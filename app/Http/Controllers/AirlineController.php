<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Departure;
use Illuminate\Http\Request;
use App\Jobs\FetchDeparturesJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Collection;

class AirlineController extends Controller
{

    public function index() {
        $apiKey = config('services.flights.airlabs_api');

        // Fetch all airlines
        $airlines = Airline::all();

        if (count($airlines) > 0) {
            $departure = Departure::all();
            $airlines = Airline::all();
            //remove duplicate data from departures and filters uniqe data
            $uniqueData = Departure::select('airline_iata')->groupBy('airline_iata')->get(); //filters unique data
            try{
                // checking if departures h as updated data
                if($uniqueData && $airlines && $uniqueData->count() === $airlines->count()) {
                    $airlines = Airline::all();
                    return response()->json($airlines);

                }else{
                    //Add new records in airlines table from departues table
                    try{
                        foreach($uniqueData as $iataData){
                            $iata = $iataData['airline_iata'];
                            $airline = Airline::onlyTrashed()->whereNotNull(['deleted_at','iata'])->where('iata',$iata)->first();
                            if($airline !== null){
                                $airlines = Airline::onlyTrashed()->whereNotNull(['deleted_at','iata'])->where('iata',$iata)->restore();

                            }
                            // else{
                            //     $depIata = Departure::select('airline_iata')->pluck('airline_iata')->all();
                            //     $airlineIata = Airline::select('iata')->plucK('iata')->all();
                            //     $depIataCollection = collect($depIata);
                            //     $airlineIataCollection = collect($airlineIata);
                            //     $airlines = $airlineIataCollection->diff($depIataCollection); //cheking if airline has yateem(who has no reference in departure) records
                            //     foreach($airlines as $airline){
                            //         $sofDelAirline = Airline::where('iata',$airline)->delete();
                            //     }


                            // }
                        }
                        $airlines = Airline::all();
                        return response()->json($airlines);

                    }catch(\Exception $e){
                        return ['Error while restoring new airlines', $e->getMessage()];
                    }

                }
            }catch(\Exception $e){
                return ['Error while fetching data from Departures and Airlines databases',$e->getMessage()];
            }


        } else {
            // Fetch schedules

            $allAirlines = Http::timeout(120)->withoutVerifying()->get('https://airlabs.co/api/v9/airlines', [
                '_fields' => 'name,iata_code,icao_code',
                'api_key' => $apiKey,
            ]);

            $allAirlines = $allAirlines->json('response');
            $allCollection = collect($allAirlines);
            if($allCollection){
                $allAirlinesArr = [];
                foreach($allCollection as $airline){
                    $imgIata = $airline['iata_code'];
                    $allAirlinesArr[] = [
                        'name' => $airline['name'],
                        'iata' => $airline['iata_code'],
                        'icao' => $airline['icao_code'],
                        'img'  => 'https://airlabs.co/img/airline/m/'.$imgIata.'.png',
                    ];
                }
            }
            DB::beginTransaction();

            try{
                Airline::insert($allAirlinesArr);

                Airline::query()->delete();//softdeleting

                DB::commit();
            }catch(\Exception $e){
                DB::rollBack();
               return response()->json(['error' => 'Failed to save Airlines data. Error: ' . $e->getMessage()]);
            }

            // $response = Http::timeout(120)->withoutVerifying()->get('https://airlabs.co/api/v9/schedules', [
            //     'arr_iata' => 'IAD',
            //     'api_key' => $apiKey,
            // ]);

            // $response = $response->json('response');
            // $collection = collect($response);


            $departure = Departure::all();
            if(count($departure) > 0){

                $uniqueData = Departure::select('airline_iata')->groupBy('airline_iata')->get();
                foreach ($uniqueData as $airline) {
                    $iata = $airline['airline_iata'];
                    $iadAirlines = Airline::onlyTrashed()
                        ->whereNotNull('iata')
                        ->where('iata', $iata)
                        ->restore();
                }
                $airlines = Airline::all();
                return response()->json($airlines);

            }else{


                $depJob = new FetchDeparturesJob();
                try{
                    $depJob->handle();
                    $departure = Departure::all();
                    if(count($departure) > 0){
                        $uniqueData = Departure::select('airline_iata')->groupBy('airline_iata')->get();
                        foreach ($uniqueData as $airline) {
                            $iata = $airline['airline_iata'];
                            $iadAirlines = Airline::onlyTrashed()
                                ->whereNotNull('iata')
                                ->where('iata', $iata)
                                ->restore();
                        }
                        $airlines = Airline::all();
                        return response()->json($airlines);

                    }
                }catch(\Exception $e){
                    Log::error('Error runnig departures jobs: ', ['error' => $e->getMessage()]);
                }

            }



        }
    }

}
