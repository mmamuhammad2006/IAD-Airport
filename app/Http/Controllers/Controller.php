<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Place;
use App\Models\Cities;
use App\Models\Departure;
use App\Jobs\FetchDeparturesJob;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function trackFlight($iata){

        $departure = Departure::all();
        // $flight = Departure::where('flight_iata','AA2617')->first();
        // return $flight;
        if(count($departure) > 0){
            $flight = Departure::where('flight_iata',$iata)->first();
            // return $flight;
            // Log::info('During flight tracking this flight found',$flight);
            if($flight !== null){
                return response()->json($flight);
            }else{
                return 'Please enter the correct code';
            }
        
        }else{
        
            $depJob = new FetchDeparturesJob();
        
            try{
                $depJob->handle();
                $departure = Departure::all();
                
                if(count($departure) > 0){
                    $flight = Departure::where('flight_iata',$iata)->first();

                    if($flight !== null){
                        return response()->json($flight);
                    }else{
                        return 'Not found this flight number';
                    }
                }
        
            }catch(\Exception $e){
                Log::error('Error runnig departures jobs: ', ['error' => $e->getMessage()]);
            }
        }
    }

}
