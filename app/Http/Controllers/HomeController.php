<?php

namespace App\Http\Controllers;

use App\Models\IadPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function googleDataJson()
    {
        // $iadPlace = IadPlace::where('filter', 'lounges')->get();
        // $photosArr = [];

        // foreach ($iadPlace as $iad) {
        //     // dd($iad);
        //     $google_place_detail = Http::get('https://maps.googleapis.com/maps/api/place/details/json?place_id=' . $iad['place_id'] . '&key=' . config('aroundairports.google.api_key') . '');
        //     if ($google_place_detail['status'] === 'OK') {
        //         $google_place_detail = $google_place_detail->object();

        //         if (isset($google_place_detail->result->photos)) {
        //             $google_place_detail->result->photos = self::setPhotoUrl($google_place_detail->result->photos);
        //         }
        //     }

        //     // $photosArr[] = (object) ["photo_url" => 'https://www.iadairport.com/front_assets/nearby_places/' . $photos->name];

        //     $photosArr[] = isset($google_place_detail->result) ? $google_place_detail->result : null;
        // }
        // dd($photosArr);
    }
}