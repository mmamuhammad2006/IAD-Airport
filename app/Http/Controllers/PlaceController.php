<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Category;
use App\Models\Place;
use App\Models\Lounge;

class PlaceController extends Controller
{

    public function places($category)
    {
        if ($category == 'lounges') {
            $airportId = 935;
            $Category = 786;
            $places = Lounge::query()->where('airport_id', $airportId)
                ->where('category_id', $Category)
                ->whereNotNull('distance_value')
                ->whereNotNull('google_place_id')
                ->orderBy('distance_value', 'ASC')
                ->get();
            $places->each(function ($place) use ($category) {
                $place->category = $category;
            });
        } else {
            $airportId = config('services.airport.airport_id');
            $Category = is_int($category) ? $category : Category::where('slug', $category)->first()?->id;
            $places = Place::query()->where('airport_id', $airportId)
                ->where('category_id', $Category)
                ->whereNotNull('distance_value')
                ->whereNotNull('google_place_id')
                ->orderBy('distance_value', 'ASC')
                ->get();
            $places->each(function ($place) use ($category) {
                $place->category = $category;
            });
        }

        return response()->json($places);
    }

    public function loungePlaces($category)
    {

        $airportId = 935;
        $Category = 786;
        $title = Lounge::query()->where('airport_id', $airportId)
            ->where('category_id', $Category)
            ->whereNotNull('distance_value')
            ->whereNotNull('google_place_id')
            ->orderBy('distance_value', 'ASC')
            ->get();
        return response()->json($title);
    }

    public function show($category_slug, $place_slug) // web.php function
    {
        $data = $this->placeData($place_slug, $category_slug);
        $metatags = \App\Helpers\MetaTagsHelper::genMetaTags($data, $category_slug);
        return view('hotelDetails', ['metatags' => $metatags, 'place' => $place_slug, 'category' => $category_slug]);
    }

    public function placeData($code, $category)
    {
        if ($category == 'lounges') {
            $airportId = 935;
            $Category = 786;
            $place = Lounge::query()->where('airport_id', $airportId)
                ->where('category_id', $Category)
                ->whereNotNull('distance_value')
                ->whereNotNull('google_place_id')
                ->where('slug', $code)
                ->orderBy('distance_value', 'ASC')
                ->first();
            $airportData = null;
        } else {
            $airportId = config('services.airport.airport_id');
            $Category = is_int($category) ? $category : Category::where('slug', $category)->first()->id;
            $place = Place::query()->where('airport_id', $airportId)
                ->where('category_id', $Category)
                ->whereNotNull('distance_value')
                ->whereNotNull('google_place_id')
                ->where('slug', $code)
                ->orderBy('distance_value', 'ASC')
                ->first();
            $airportData = Airport::where('id', $airportId)->first();
        }

        return $place ? response()->json([
            'place' => $place,
            'airport' => $airportData
        ]) : response()->json([
            'place' => null,
            'airport' => $airportData,
            'message' => 'Place not found'
        ], 404);
    }


    public function loungesPlaceData($Code, $Category)
    {
        $airportId = 935;
        $hotelCode = $Code;
        $category = $Category;
        $Data = Lounge::where([
            ['airport_id', $airportId],
            ['category_id', $category],
            ['_id', $hotelCode]
        ])->first();
        if ($Data) {
            return response()->json($Data);
        } else {
            return 'failed';
        }
    }

    public function placeAPI($category_slug, $place_slug)
    {
        $airportId = config('services.airport.airport_id');

        if ($category_slug == 'lounges') {
            $Data = Lounge::where([
                ['airport_id', $airportId],
                ['slug', $place_slug]
            ])->first();
        } else {
            $category = Category::where('slug', $category_slug)->first();
            $Data = Place::where([
                ['airport_id', $airportId],
                ['category_id', $category->id],
                ['slug', $place_slug]
            ])->first();
        }

        if ($Data) {
            return response()->json($Data);
        }

        return 'failed';
    }
}
