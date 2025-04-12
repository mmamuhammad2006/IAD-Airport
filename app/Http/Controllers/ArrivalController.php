<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Arrival;
use Illuminate\Http\Request;
use App\Jobs\FetchArrivalsJob;
use App\Jobs\FetchFlightsDataJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ArrivalController extends Controller
{
    public function arrivals()
    {
        $arr = Arrival::all();
        if (count($arr) > 0) {
            return response()->json($arr);
        } else {
            $arrJob = new FetchArrivalsJob();
            try{
                $arrJob->handle();
                if(count($arr) > 0){
                    return response()->json($arr);
                }
            }catch(\Exception $e){
                Log::error('Arrival job is not running getting this error',['error' => $e->getMessage()]);
            }
            // FetchArrivalsJob::dispatch();

        }
    }
}
