<?php

namespace App\Helpers;

use App\Models\Place;
use App\Models\Category;

class MetaTagsHelper
{
    public static function genMetaTags($place, $category)
    {
        // Check if $place is a JSON response
        if ($place instanceof \Illuminate\Http\JsonResponse) {
            $placeData = $place->getData();

            if (isset($placeData->place)) {
                // Convert JSON place data to an instance of Place
                $place = new Place((array)$placeData->place);
            } else {
                throw new \InvalidArgumentException('Invalid place data in JSON response.');
            }
        }

        $title = $place->name;
        $description = self::commonDescKeyWord($title, $category)['desc'];
        $keywords = self::commonDescKeyWord($title, $category)['keyword'];
        $canonical = url('https://iadairport.com/nearby/' .  $category  . '/' . $place->slug);
        return [
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'canonical' => $canonical,
        ];
    }

    public static function commonDescKeyWord($placeName, $category)
    {
        $descKeywords = [

            "parking" => [ // Parking
                'desc' => 'Find secure and convenient parking options near Washington Dulles International Airport, including ' . $placeName . '. Park with ease and enjoy quick access to your destination.',
                'keyword' => 'parking near Washington Dulles International Airport, ' . $placeName . ', airport parking, Dulles parking options, convenient parking'
            ],
            "hotels" => [ // Hotels
                'desc' => 'Stay at ' . $placeName . ', conveniently located near Washington Dulles International Airport. Enjoy top-notch amenities and a comfortable stay for your travel needs.',
                'keyword' => 'Stay at ' . $placeName . ', conveniently located near Washington Dulles International Airport. Enjoy top-notch amenities and a comfortable stay for your travel needs.'
            ],
            "lounges" => [ // Lounges
                'desc' => 'Relax and unwind at ' . $placeName . ', a premium lounge near Washington Dulles International Airport. Enjoy exclusive services, comfort, and convenience before your flight.',
                'keyword' => 'lounges near Washington Dulles International Airport, ' . $placeName . ', airport lounges, premium lounges, travel comfort'
            ],
            "restaurants" => [ // Restaurants
                'desc' => 'Enjoy delicious dining options at ' . $placeName . ', conveniently located near Washington Dulles International Airport. Savor your favorite meals during your travels.',
                'keyword' => 'restaurants near Washington Dulles International Airport, ' . $placeName . ', airport dining, food options at Dulles, travel meals'
            ],
            "bus-stations" => [ //Transportation  train-stations
                'desc' => 'Find reliable transportation services, including ' . $placeName . ', near Washington Dulles International Airport. Travel conveniently to and from the airport.',
                'keyword' => 'transportation near Washington Dulles International Airport, ' . $placeName . ', airport transportation, Dulles transit options, travel services'
            ],
            "train-stations" => [ //Transportation  train-stations
                'desc' => 'Find reliable transportation services, including ' . $placeName . ', near Washington Dulles International Airport. Travel conveniently to and from the airport.',
                'keyword' => 'transportation near Washington Dulles International Airport, ' . $placeName . ', airport transportation, Dulles transit options, travel services'
            ],
            "shipping" => [ //Transportation  train-stations
                'desc' => 'Find reliable transportation services, including ' . $placeName . ', near Washington Dulles International Airport. Travel conveniently to and from the airport.',
                'keyword' => 'transportation near Washington Dulles International Airport, ' . $placeName . ', airport transportation, Dulles transit options, travel services'
            ],
            "taxis" => [ //Transportation  train-stations
                'desc' => 'Find reliable transportation services, including ' . $placeName . ', near Washington Dulles International Airport. Travel conveniently to and from the airport.',
                'keyword' => 'transportation near Washington Dulles International Airport, ' . $placeName . ', airport transportation, Dulles transit options, travel services'
            ],
            "car-truck-rental" => [ // car rental
                'desc' => 'Rent a car at ' . $placeName . ' near Washington Dulles International Airport. Choose from a variety of vehicles and enjoy convenient pick-up and drop-off services.',
                'keyword' => 'car rentals near Washington Dulles International Airport, ' . $placeName . ', airport car rental, Dulles car hire, vehicle rental services'
            ],
        ];

        $metaTags = $descKeywords[$category];
        return $metaTags;
    }

    public static function dynamicText($array, $key, $default = null)
    {


        if (!isset($array[$key]) || $array[$key] === "") {
            return $default;
        }
        return $array[$key];
    }
}
