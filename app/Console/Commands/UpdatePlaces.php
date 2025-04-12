<?php

namespace App\Console\Commands;

use App\Models\Place;
use App\Models\IadPlace;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class UpdatePlaces extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-places';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch new places that are not in our DB';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $airportId = config('services.airport.airport_id');
        $iadPlace = IadPlace::all();

        foreach ($iadPlace as $iad) {
            if ($iad['filter'] === 'restaurant') {
                $categoryId = 19;
                $this->updatePlaces($iad,  $airportId, $categoryId);
            }
            if ($iad['filter'] === 'car_rental') {
                $categoryId = 6;
                $this->updatePlaces($iad,  $airportId, $categoryId);
            }
            if ($iad['filter'] === 'parking') {
                $categoryId = 16;
                $this->updatePlaces($iad,  $airportId, $categoryId);
            }
            // if ($iad['filter'] === 'lounges') {
            //     $categoryId = 19;
            //     $this->updatePlaces($iad,  $categoryId);
            // }
        }
    }

    public function updatePlaces($iad, $airportId, $categoryId)
    {
        $geometry = json_decode($iad['geometry'], true);

        $lat = $geometry['location']['lat'];
        $lng = $geometry['location']['lng'];


        $placeExists = Place::where('google_place_id', $iad['place_id'])
            ->where('airport_id', $airportId)
            ->where('category_id', $categoryId)
            ->exists();
        $uniqueId = Str::uuid()->toString();
        $miles = $this->getMiles($iad['distance']);
        $allTravelModeJson = $this->travelModeJson($iad);
        $dataJson = $this->dataJson($iad, $uniqueId, $lat, $lng);
        $googleDataJson = $this->googleDataJson($iad);

        if ($placeExists === false) {

            Place::create([
                'airport_id' => $airportId,
                'category_id' => $categoryId,
                'google_place_id' => $iad['place_id'],
                'slug' => $iad['unique_name'],
                'name' => $iad['name'],
                '_id' => $uniqueId,
                'latitude' => $lat,
                'longitude' => $lng,
                'distance_text' => $miles . ' mi',
                'distance_value' => $miles,
                'all_travel_mode_distance' => json_encode($allTravelModeJson),
                'google_latitude' => $lat,
                'google_longitude' => $lng,
                'google_rating' => $iad['rating'],
                'google_formatted_address' => $iad['formatted_address'],
                'data' => json_encode($dataJson),
                'google_data' => json_encode($googleDataJson),
                'deleted_at' => null,
            ]);
            // }
        }
    }

    public function getMiles($meters)
    {
        $miles = $meters / 1609.34;
        return round($miles, 2);
    }

    public function travelModeJson($iadTable)
    {
        $miles = $this->getMiles($iadTable['distance']);
        $travelModejs =  [
            "meta" => [
                "code" =>  200,
            ],
            "routes" => [
                "car" => [
                    "distance" => [
                        "text" => $miles,
                        "value" => null
                    ],
                    "duration" => [
                        "text" => "null",
                        "value" => null
                    ],
                ],
                "geodesic" => [
                    "distance" => [
                        "text" => "null",
                        "value" => null
                    ],
                ],
            ],
        ];
        return $travelModejs;
    }


    public function dataJson($iadTable, $id, $lat, $lng)
    {
        $jsonData = [
            "_id" => $id,
            "name" => $iadTable['name'],
            "location" => [
                "type" => "Point",
                "coordinates" => [
                    $lat,
                    $lng
                ],

            ],
            "categories" => $iadTable['types'],

        ];

        return $jsonData;
    }

    public function googleDataJson($iadTable)
    {
        $jsonGoogleData = 'Google Data';
        return $jsonGoogleData;

        /* ---->>>>> old Code starts ------->>>>>>>>>*/
        // $photosArr = [];
        // foreach ($iadTable->placePhotos as $photos) {
        //     $photosArr[] = (object) ["photo_url" => 'https://www.iadairport.com/front_assets/nearby_places/' . $photos->name];
        // }

        // // DELETE FROM `places` WHERE created_at > '2024-11-01 00:00:00' AND airport_id = 935;

        // $openingHours = null;
        // if (!empty($iadTable['opening_hours']) && is_string($iadTable['opening_hours'])) {
        //     $openingHours = json_decode($iadTable['opening_hours'], true);
        // }
        // if ($openingHours === null) {
        //     Log::error("Invalid or empty opening_hours JSON data: " . $iadTable['opening_hours']);
        // }
        // Log::info($openingHours);
        // $jsonGoogleData = [
        //     "photos" => $photosArr,
        //     "reviews" => json_decode($iadTable['reviews'], true),
        //     "opening_hours" => [
        //         "weekday_text" => isset($openingHours['weekday_text']) ? $openingHours['weekday_text'] : [],
        //     ],
        // ];
        /* ---->>>>> old Code ends ------->>>>>>>>>*/
    }
}
