<?php

namespace App\Console\Commands;

use App\Jobs\FetchArrivalsJob;
use Illuminate\Console\Command;
use App\Jobs\FetchDeparturesJob;
use App\Jobs\FetchFlightsDataJob;
use Illuminate\Support\Facades\Log;

class DispatchFetchFlightsDataJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dispatch-fetch-flights-data-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch arrivals and departures data from the API and saving in tables';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $depJob = new FetchDeparturesJob();
        $arrJob = new FetchArrivalsJob();
        try{
            $depJob->handle();
            $arrJob->handle();
        $this->info('FetchFlightsDataJob Dispatched Successfully');

        }catch(\Exception $e){
            Log::error('Queue jobs failed to execute error:-',['error'=> $e->getMessage()]);
        }
        // FetchDeparturesJob::dispatch();
        // FetchArrivalsJob::dispatch();
        // $this->info('FetchFlightsDataJob Dispatched Successfully');
    }
}
