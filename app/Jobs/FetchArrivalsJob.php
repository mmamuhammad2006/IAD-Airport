<?php

namespace App\Jobs;

use DateTime;
use App\Models\Arrival;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class FetchArrivalsJob implements ShouldQueue
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
    public function handle()
    {
            // fetching arrivals data Ends
            // fetch arrivals data from external API

        try{


            $apiKey = config('services.flights.airlabs_api');

            $response = Http::withoutVerifying()->get('https://airlabs.co/api/v9/schedules',[
                'arr_iata' => 'IAD',
                'api_key' => $apiKey,
            ]);


            if(isset($response) && is_array($response['response'])) {
                $arrivalData = [];
                $arrival = Arrival::all();
                if(count($arrival) > 0){
                    DB::table('arrivals')->truncate();
                }

                foreach($response['response'] as $arrival){
                    if(isset($arrival['arr_iata']) && $arrival['arr_iata'] === 'IAD'){
                        // arrival time
                        $arrDayTime = new DateTime($arrival['arr_time']);
                        $arrDay = $arrDayTime->format('l');
                        $arrTime = $arrDayTime->format('g:i:a');
                        $formattedArrDayTime = $arrDay. ' '.$arrTime;
                        // depTime
                        $depDaytime = new DateTime($arrival['dep_time']);
                        $depDay = $depDaytime->format('l');
                        $depTime = $depDaytime->format('g:i:a');
                        $formattedDepDayTime = $depDay.' '. $depTime;
                        // saving data in array
                        $arrivalData[] = [
                            'airline_iata' => $arrival['airline_iata'],
                            'flight_iata' => $arrival['flight_iata'],
                            'arrival' => $arrival['arr_iata'],
                            'arr_time' => $formattedArrDayTime,
                            'departure' => $arrival['dep_iata'],
                            'dep_time' => $formattedDepDayTime,
                            'status' => $arrival['status'],
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
                // return $arrivalData;
            }

            DB::beginTransaction();
            try{
                DB::table('arrivals')->insert($arrivalData);

                DB::commit();
                // $arrival = Arrival::all();
                //         return response()->json($arrival);
            }catch(\Exception $e){
                DB::rollBack();
            }

        }catch(\Exception $e){
            Log::error('Arrival job failed: ' , [ 'error'=>$e->getMessage()]);
        }

    }
}
