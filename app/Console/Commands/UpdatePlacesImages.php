<?php

namespace App\Console\Commands;

use App\Models\Place;
use App\Models\Lounge;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class UpdatePlacesImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-places-images {type?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch places data(specially images) from Places API and save it in the goog_data field';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /* We are updating google_data field by using two separate functions 
        1: updatePlacesImages()
            Updating ""google_data"" field using ""place_id"" for all places ""Expect Lounges"" because Lounges places
            are stored in table name ""lounges"" and DB name ""newairport"" while the remaining all places are 
            saved in table name ""places"" and DB name ""airport_remote  
            
        2: updateLoungesImages()
            Updating ""google_data"" field using ""place_id""  only for lounges place
        */

        $placeType = $this->argument('type');
        if ($placeType === 'places' || $placeType === 'p') {
            Log::info("Places function runs");
            $this->updatePlacesImages();
            $this->info("Places function have successfully runned");
        } elseif ($placeType === 'lounges' || $placeType === 'l') {
            Log::info("lounges function runs");
            $this->updateLoungesImages();
            $this->info("lounges function have successfully runned");
        } elseif ($placeType === null) {
            Log::info("Both places and lounges function runs");
            $this->updatePlacesImages();
            $this->updateLoungesImages();
            $this->info("Both places and lounges function have successfully runned");
        }
    }

    public function updatePlacesImages()
    {
        $places = Place::whereDate('created_at', '>', '2024-11-01')->where('airport_id', 935)->get();

        foreach ($places as $place) {
            try {
                $google_place_detail = Http::get('https://maps.googleapis.com/maps/api/place/details/json?place_id=' . $place['google_place_id'] . '&key=' . config('services.google.api_key') . '');
                if ($google_place_detail['status'] === 'OK') {
                    $google_place_detail = $google_place_detail->object();
                    if (isset($google_place_detail->result->photos)) {
                        $google_place_detail->result->photos = self::setPhotoUrl($google_place_detail->result->photos);
                    }
                    $place->update([
                        'google_data' => isset($google_place_detail->result) ? $google_place_detail->result : null,
                    ]);
                    Log::info($google_place_detail->result);
                } else {
                    Log::warning("Failed to fetch Google place images details.", [
                        'place_id' => $place['google_place_id'],
                        'status' => $response['status'] ?? 'Unknown',
                        'response' => $google_place_detail->json(),

                    ]);
                }
            } catch (\Exception $e) {
                Log::error("Error While processing places images: name => {$place['name']} and place_id {$place['google_place_id']}", [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
            }
        }
    }

    public function updateLoungesImages()
    {
        $lounges = Lounge::whereDate('created_at', '>', '2024-11-01')->get();

        foreach ($lounges as $lounge) {
            try {
                $google_place_detail = Http::get('https://maps.googleapis.com/maps/api/place/details/json?place_id=' . $lounge['google_place_id'] . '&key=' . config('services.google.api_key') . '');
                if ($google_place_detail['status'] === 'OK') {
                    $google_place_detail = $google_place_detail->object();
                    if (isset($google_place_detail->result->photos)) {
                        $google_place_detail->result->photos = self::setPhotoUrl($google_place_detail->result->photos);
                    }
                    $lounge->update([
                        'google_data' => isset($google_place_detail->result) ? $google_place_detail->result : null,
                    ]);
                    Log::info($google_place_detail->result);
                } else {
                    Log::warning("Failed to fetch Google lounges place images details.", [
                        'place_id' => $lounge['google_place_id'],
                        'status' => $response['status'] ?? 'Unknown',
                        'response' => $google_place_detail->json(),

                    ]);
                }
            } catch (\Exception $e) {
                Log::error("Error While processing lounges images place: name => {$lounge['name']} and place_id {$lounge['google_place_id']}", [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);
            }
        }
    }

    /**
     * @param $photos
     * @return array
     */
    public static function setPhotoUrl($photos)
    {
        return collect($photos)->each(function ($photo) {
            $google_photo = Http::get('https://maps.googleapis.com/maps/api/place/photo?maxwidth=' . $photo->width . '&photoreference=' . $photo->photo_reference . '&key=' . config('services.google.api_key') . '');

            $photo->photo_url = 'https://' . $google_photo->effectiveUri()->getAuthority() . $google_photo->effectiveUri()->getPath();
        })->toArray();
    }
}
