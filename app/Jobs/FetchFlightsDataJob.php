<?php

namespace App\Jobs;

use DateTime;
use App\Models\Arrival;
use App\Models\Departure;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class FetchFlightsDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
//     public function handleArrivals(){

// }
    public function handle(){
        // $this->fetchArrivals();
        // $this->fetchDepartures();

    }


        // public function fetchDepartures(){
        //     // fetching departures data starts
        //     $apiKey = config('services.flights.airlabs_api');
        //     // $departure = Departure::all

        //     $response = Http::withoutVerifying()->get('https://airlabs.co/api/v9/schedules',[
        //         'dep_iata' => 'IAD',
        //         'api_key' => $apiKey,
        //     ]);

        //     if (isset($response) && is_array($response['response'])) {
        //         $departureData = [];
        //         $departure = Departure::all();
        //         if(count($departure) > 0){
        //             Departure::truncate();
        //         }

        //         foreach ($response['response'] as $departure) {
        //             if($departure['dep_iata'] === 'IAD'){
        //                 // depTime
        //                 $depDaytime = new DateTime($departure['dep_time']);
        //                 $depDay = $depDaytime->format('l');
        //                 $depTime = $depDaytime->format('g:i:a');
        //                 $formattedDepDayTime = $depDay.' '. $depTime;
        //                 // arrival time
        //                 $arrDayTime = new DateTime($departure['arr_time']);
        //                 $arrDay = $arrDayTime->format('l');
        //                 $arrTime = $arrDayTime->format('g:i:a');
        //                 $formattedArrDayTime = $arrDay. ' '.$arrTime;
        //                 // saving data in array
        //                 $departureData[] = [
        //                     'airline_iata' => $departure['airline_iata'],
        //                     'flight_iata' => $departure['flight_iata'],
        //                     'departure' => $departure['dep_iata'],
        //                     'dep_time' => $formattedDepDayTime,
        //                     'arrival' => $departure['arr_iata'],
        //                     'arr_time' => $formattedArrDayTime,
        //                     'status' => $departure['status'],
        //                     'created_at' => now(),
        //                     'updated_at' => now(),
        //                 ];
        //             }

        //         }


        //     }

        //     DB::beginTransaction();
        //     try {
        //         // Departure::truncate();
        //         Departure::insert($departureData);

        //         DB::commit();
        //         // $departure = Departure::all();
        //         // return response()->json($departure);
        //     } catch (\Exception $e) {
        //         // Rollback the transaction on exception
        //         DB::rollBack();

        //     }

        //     // fetching departures data Ends
        // }

        // public function fetchArrivals(){
        //     // fetching arrivals data Ends
        //     // fetch arrivals data from external API
        //     $apiKey = config('services.flights.airlabs_api');

        //     $response = Http::withoutVerifying()->get('https://airlabs.co/api/v9/schedules',[
        //         'arr_iata' => 'IAD',
        //         'api_key' => $apiKey,
        //     ]);
        
        //     if(isset($response) && is_array($response['response'])) {
        //         $arrivalData = [];
        //         $arrival = Arrival::all();
        //         if(count($arrival) > 0){
        //             Arrival::truncate();
        //         }
            
        //         foreach($response['response'] as $arrival){
        //             if(isset($arrival['arr_iata']) && $arrival['arr_iata'] === 'IAD'){
        //                 // arrival time
        //                 $arrDayTime = new DateTime($arrival['arr_time']);
        //                 $arrDay = $arrDayTime->format('l');
        //                 $arrTime = $arrDayTime->format('g:i:a');
        //                 $formattedArrDayTime = $arrDay. ' '.$arrTime;
        //                 // depTime
        //                 $depDaytime = new DateTime($arrival['dep_time']);
        //                 $depDay = $depDaytime->format('l');
        //                 $depTime = $depDaytime->format('g:i:a');
        //                 $formattedDepDayTime = $depDay.' '. $depTime;
        //                 // saving data in array
        //                 $arrivalData[] = [
        //                     'airline_iata' => $arrival['airline_iata'],
        //                     'flight_iata' => $arrival['flight_iata'],
        //                     'arrival' => $arrival['arr_iata'],
        //                     'arr_time' => $formattedArrDayTime,
        //                     'departure' => $arrival['dep_iata'],
        //                     'dep_time' => $formattedDepDayTime,
        //                     'status' => $arrival['status'],
        //                     'created_at' => now(),
        //                     'updated_at' => now(),
        //                 ];
        //             }
        //         }
        //         // return $arrivalData;
        //     }
        
        //     DB::beginTransaction();
        //     try{
        //         Arrival::insert($arrivalData);
            
        //         DB::commit();
        //     }catch(\Exception $e){
        //         DB::rollBack();
        //     }
        // }

}
