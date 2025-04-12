<?php

namespace Database\Seeders;

use App\Models\ChangeContent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChangeContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $content = [
            ['page' => 'home', 'key' => 'home_hero_sec_title_1', 'value' => 'Dulles International Airport', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_hero_sec_title_2', 'value' => '- IAD', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_hero_sec_para_1', 'value' => 'Dulles International Airport (IAD) is an international airport located in Dulles, Virginia, USA, about 26 miles west of downtown Washington, D.C. It is named after John Foster Dulles, the 52nd Secretary of State under President Dwight D. Eisenhower. The airport is operated by the Metropolitan Washington Airports Authority (MWAA) and serves as the primary international gateway for the Washington, D.C. metropolitan area. It has three main passenger terminals and is known for its unique design featuring a main terminal building connected to the concourses by mobile lounges.', 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_hero_sec_btn_1', 'value' => 'Hotels', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_hero_sec_btn_2', 'value' => 'Parking', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_hero_sec_btn_3', 'value' => 'Explore', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_about_airport_title_1', 'value' => 'About the airport', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_about_airport_sub_title_1', 'value' => 'Statistics and location', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_about_airport_sub_para_1', 'value' => "The Washington D.C. Dulles airport, IATA code is IAD,serves the Unites States nation's capital area with domestic, international and intercontinental flights. During 2020, 8.33 million passengers passed through it. It is located in Fairfax County, Virginia, 42 km (26 miles) west of downtown Washington D.C. (SEE MAP).", 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_about_airport_sub_title_2', 'value' => 'Dulles International Airport(IAD)', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_about_airport_sub_para_2', 'value' => 'IAD is an international airport located in Dulles, Virginia, USA, about 26 miles west of downtown Washington, D.C. It is named after John Foster Dulles,the 52nd Secretary of State under President Dwight D.Eisenhower. The airport is operated by the Metropolitan Washington Airports Authority (MWAA) and serves as the primary international gateway for the Washington, D.C. metropolitan area. It has three main passenger terminals and is known for its unique design featuring a main terminal building connected to the concourses by mobile lounges. IAD is the busiest airport in the Washington metropolitan area and handles millions of passengers and cargo each year, serving over 125 destinations worldwide. It is also home to a number of major airlines, including United Airlines, which operates a hub at the airport.', 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_facilities_airport_head_1', 'value' => 'Facilities on airport', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_head_1', 'value' => 'Black Car and Taxi service', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_para_1', 'value' => "LiveryAccess serve Dulles
                                            International exclusively, with
                                            24-hour service to and from the
                                            Airport. From the Terminal, Arrivals
                                            Level - Baggage Claim, customers
                                            should proceed DOWN the ramp at
                                            Doors 2 or 6. Taxi fare starts from
                                            USD 55 to Arlington VA and 70 to
                                            Washington DC. Uber and Lyft are
                                            also available.", 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_head_2', 'value' => 'Bus services', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_para_2', 'value' => "There are several bus services
                                            (Silver Line Express, bus Route 983
                                            and the Metro bus 5A) that connect
                                            Washington Dulles airport with the
                                            closest metro station, Wiehle-Reston
                                            East Station. Also, Route 983, and
                                            5A together with 981 run to the
                                            Museum's area in Washington DC.
                                            Virginia Breeze bus connect the
                                            airport with Virginia area and
                                            Megabus go to Union Station (central
                                            station).", 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_head_3', 'value' => 'Car rental', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_para_3', 'value' => "If you want to rent a car at Dulles
                                            airport, you will find the car
                                            rental companies in the rental car
                                            lot, connected by Free shuttle
                                            buses.", 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_head_4', 'value' => 'Services and amenities', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_para_4', 'value' => "The airport has free Wi-fi access,
                                            currency exchange, Concierge
                                            service, charging stations for
                                            electronic devices as well as
                                            electric vehicles, luggage carts,
                                            chapel, Nursing Rooms, Pet relief
                                            areas, Kid’s play zone, and smoking
                                            area.", 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_head_5', 'value' => 'Food and Shopping', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_facilities_airport_sub_para_5', 'value' => "It has a wide gastronomic variety
                                            with restaurants, cafes and bars
                                            (some available 24 hours a day), as
                                            well as a wide variety of duty-free
                                            items, including clothing and
                                            fashion, cosmetics, electronics and
                                            telephones, alcoholic beverages,
                                            sweets, etc. You can find 24-hour
                                            convenience stores with regional
                                            products, books, and newspapers.", 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_public_private_transportation_head_1', 'value' => 'Public and Private Transportation', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_public_private_transportation_sub_head_1', 'value' => 'VIP Lounges', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_public_private_transportation_sub_para_1', 'value' => 'There are several airline lounges at Washington Dulles airport, such as: Air France, British Airways, Etihad, Lufthansa, Turkish Airlines, Virgin Atlantic, United Airlines. USO Lounge is available as well.', 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_public_private_transportation_sub_head_2', 'value' => 'Parking', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_public_private_transportation_sub_para_2', 'value' => "There are 6 parking sectors: Terminal Lot - Cell Phone Lot - Garage 1 - Valet - Garage 2 and Economy Lot.
<br><br>
<b>The following spaces have been reserved in the IAD Airport's public parking lots:</b>
<br><br>
Rows 2 through 30 of the Terminal Lot, at the end of the row closest to the Terminal.
<br><br>
Garage 1 is located on Level 1 adjacent to the Terminal's walkway and shuttle stop.
<br><br>
Garage 2 is located on Level 3 near the walkway and Level 1 near the shuttle stop.
<br><br>
Economy Parking is available throughout the parking lot and is close to all shuttle stations.
<br><br>
Disability parking spots are only for vehicles with a government-issued plate or placard for disabled parking.
<br><br>
These spaces are available on a first-come, first-served basis and cannot be reserved in advance.
<br><br>
All airport parking shuttles are wheelchair accessible and available to all passengers at no cost.", 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_benefits_iad_head_1', 'value' => 'Benefits of IAD', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_benefits_iad_sub_head_1', 'value' => 'Consistency is key', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_benefits_iad_sub_para_1', 'value' => 'We operate a uniform fleet: what you book is what you get', 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_benefits_iad_sub_head_2', 'value' => "Your home in the sky", 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_benefits_iad_sub_para_2', 'value' => 'Quilted Italian leather, hardwood cabinetry, spacious cabin', 'type' => 'textarea'],
            ['page' => 'home', 'key' => 'home_benefits_iad_sub_head_3', 'value' => 'Easy access', 'type' => 'text'],
            ['page' => 'home', 'key' => 'home_benefits_iad_sub_para_3', 'value' => 'You can land anywhere and everywhere in the world', 'type' => 'textarea'],
        ];
        if (!is_null(ChangeContent::first())) {
            echo ('ChangeContent is not null');
            ChangeContent::truncate();
            ChangeContent::insert($content);
        } else {
            echo ('ChangeContent is null');
            ChangeContent::insert($content);
        }
    }
}
