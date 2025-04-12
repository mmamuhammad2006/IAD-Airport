<?php

namespace App\Jobs;

use DateTime;
use App\Models\Departure;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Log;

class FetchDeparturesJob implements ShouldQueue
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
    public function handle(): void
    {
        try{

                    // fetching departures data starts
                    $apiKey = config('services.flights.airlabs_api');

                    $response = Http::withoutVerifying()->get('https://airlabs.co/api/v9/schedules',[
                        'dep_iata' => 'IAD',
                        'api_key' => $apiKey,
                    ]);
                    if (isset($response) && is_array($response['response'])) {
                        $departureData = [];
                        $departure = Departure::all();
                        if(count($departure) > 0){
                            DB::table('departures')->truncate();
                        }

                        Log::info('Api response has arrival and departure data :', ['data' => $response['response']]);
                        foreach ($response['response'] as $departure) {
                            if(isset($departure['dep_iata']) && $departure['dep_iata'] === 'IAD'){
                        Log::info('Api response has departure data :', ['data' => $departure]);

                                $arr_time = isset($departure['arr_time']) ? $departure['arr_time'] : null;
                                $dep_time = isset($departure['dep_time']) ? $departure['dep_time'] : null;
                                if($arr_time && $dep_time){

                                    // arrival time
                                    $arrDayTime = new DateTime($departure['arr_time']);
                                    $arrDay = $arrDayTime->format('l');
                                    $arrTime = $arrDayTime->format('g:i:a');
                                    $formattedArrDayTime = $arrDay. ' '.$arrTime;

                                    // depTime
                                    $depDaytime = new DateTime($departure['dep_time']);
                                    $depDay = $depDaytime->format('l');
                                    $depTime = $depDaytime->format('g:i:a');
                                    $formattedDepDayTime = $depDay.' '. $depTime;
                                }
                                // saving data in array
                                $departureData[] = [
                                    'airline_iata' => $departure['airline_iata'],
                                    'flight_iata' => $departure['flight_iata'],
                                    'departure' => $departure['dep_iata'],
                                    'dep_time' => $formattedDepDayTime,
                                    'arrival' => $departure['arr_iata'],
                                    'arr_time' => $formattedArrDayTime,
                                    'status' => $departure['status'],
                                    'created_at' => now(),
                                    'updated_at' => now(),
                                ];
                            }

                        }


                    }

                    DB::beginTransaction();
                    try {

                        DB::table('departures')->insert($departureData);
                        Log::info('IAD departures data saved in DB table:', ['data' => $departureData]);

                        DB::commit();
                    } catch (\Exception $e) {
                        // Rollback the transaction on exception
                        DB::rollBack();


                    }

        }catch(\Exception $e){
            Log::error('departure job failed',['error' => $e->getMessage()]);
        }
                    // fetching departures data Ends
    }
}
