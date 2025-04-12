<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Departure;
use Illuminate\Http\Request;
use App\Jobs\FetchDeparturesJob;
use App\Jobs\FetchFlightsDataJob;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class DepartureController extends Controller
{

  public function departures(){
    $dep = Departure::all();
    if(count($dep) > 0){
        return response()->json($dep);
    }else{
        $depJob = new FetchDeparturesJob();
        try{
            $depJob->handle();
            if(count($dep) > 0){
                return response()->json($dep);
            }
        }catch(\Exception $e){
            Log::error('Error runnig departures jobs: ', ['error' => $e->getMessage()]);
        }
        // FetchDeparturesJob::dispatch()->onConnection('sync');

    }
  }
}
