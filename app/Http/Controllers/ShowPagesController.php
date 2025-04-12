<?php

namespace App\Http\Controllers;

use App\Models\ChangeContent;
use App\Models\Metatag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ShowPagesController extends Controller
{
    public function home()
    {
        $metatags = self::Metatags("Home");
        $content = self::getPageContent("Home");
        return view('mainPages.home', compact('metatags', 'content'));
    }

    public function aboutUs()
    {
        $metatags = self::Metatags("About us");
        return view('links.aboutUs', compact('metatags'));
    }

    public function privacyPolicy()
    {
        $metatags = self::Metatags("Privacy Policy");
        return view('links.privacyPolicy', compact('metatags'));
    }

    public function termsOfUse()
    {
        $metatags = self::Metatags("Terms of use");
        return view('links.termsOfUse', compact('metatags'));
    }

    public function contactUs()
    {
        $metatags = self::Metatags("Contact us");
        return view('links.contactUs', compact('metatags'));
    }

    public function hotels()
    {
        $metatags = self::Metatags("Hotels");
        return view('hotels', compact('metatags'));
    }

    public function restaurant()
    {
        $metatags = self::Metatags("Restaurant");
        return view('resturants', compact('metatags'));
    }

    public function parking()
    {
        $metatags = self::Metatags("Parking");
        return view('parkings', compact('metatags'));
    }

    public function terminal()
    {
        $metatags = self::Metatags("Terminal");
        return view('links.terminal', compact('metatags'));
    }

    public function carRental()
    {
        $metatags = self::Metatags("Car rental");
        return view('carRentals', compact('metatags'));
    }

    public function lounges()
    {
        $metatags = self::Metatags("Lounges");
        return view('lounges', compact('metatags'));
    }

    public function transportation()
    {
        $metatags = self::Metatags("Transportation");
        return view('transportations', compact('metatags'));
    }

    public function airlines()
    {
        $metatags = self::Metatags("Airlines");
        return view('airlines', compact('metatags'));
    }

    public function airlineDetails()
    {
        $metatags = self::Metatags("Airlines");
        return view('airlinesDetails', compact('metatags'));
    }

    public function arrivals()
    {
        $metatags = self::Metatags("Arrivals");
        return view('flights', ['flight' => 'arrivals', 'metatags' => $metatags]);
    }


    public function departures()
    {
        $metatags = self::Metatags("Departures");
        return view('flights', ['flight' => 'departures', 'metatags' => $metatags]);
    }

    public function shuttleServices()
    {
        $metatags = self::Metatags("Shuttle services");
        return view('pages.shuttleServices', compact('metatags'));
    }

    public function shoppingDining()
    {
        $metatags = self::Metatags("Shopping dining");
        return view('pages.shoppingDining', compact('metatags'));
    }

    public function terminalConcourses()
    {
        $metatags = self::Metatags("Terminal concourses");
        return view('pages.terminalConcourses', compact('metatags'));
    }

    public function vipLoungeAccess()
    {
        $metatags = self::Metatags("VIP Lounge Access");
        return view('pages.vipLoungeAccess', compact('metatags'));
    }

    public function taxis()
    {
        $metatags = self::Metatags("Taxis");
        return view('pages.taxis', compact('metatags'));
    }

    public function faqs()
    {
        $metatags = self::Metatags("Faqs");
        return view('pages.faqs', compact('metatags'));
    }

    public function blackCarService()
    {
        $metatags = self::Metatags("Black car service");
        return view('pages.blackCarService', compact('metatags'));
    }

    public function disabilitiesServices()
    {
        $metatags = self::Metatags("Disabilities services");
        return view('pages.disabilitiesServices', compact('metatags'));
    }

    public function amenitiesServices()
    {
        $metatags = self::Metatags("Amenities services");
        return view('pages.amenitiesServices', compact('metatags'));
    }

    public static function Metatags($page)
    {
        $metatags = Metatag::where('page', $page)->get();
        return $metatags;
    }

    public static function getPageContent($page)
    {
        $structured = [];
        if (cache::has($page)) {
            return cache::get($page);
        }
        $content = ChangeContent::where('page', $page)->get();
        foreach ($content as $item) {
            $structured[$item->key] = $item->value;
        }
        Cache::put($page, $structured, now()->addMinutes(60));
        return $structured;
    }
}