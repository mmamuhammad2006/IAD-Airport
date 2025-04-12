<?php

namespace Database\Seeders;

use App\Models\Metatag;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetaTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metaTags = [
            [
                'page' => 'Home',
                'title' => 'Dulles Airport Guide',
                'description' => 'Discover everything you need to know about Washington Dulles International Airport, including services, facilities, and travel tips.',
                'keywords' => 'Dulles Airport, Washington Dulles International Airport, airport guide, airport services, travel tips',
                'canonical' => 'https://www.iadairport.com/',
            ],
            [
                'page' => 'Airlines',
                'title' => 'Airlines',
                'description' => 'Explore the list of airlines operating at Dulles Airport, including flight schedules and destinations.',
                'keywords' => 'Dulles Airport airlines, Washington Dulles flights, flight schedules, airlines at Dulles',
                'canonical' => 'https://www.iadairport.com/iad-airlines',
            ],
            [
                'page' => 'Arrivals',
                'title' => 'Arrivals',
                'description' => 'Stay updated with the latest flight arrival times at Washington Dulles International Airport (IAD). Check flight statuses, including delays and cancellations, for today.',
                'keywords' => 'Dulles airport arrivals, flight status, Washington Dulles arrivals, IAD flight updates, flight delays, IAD cancellations',
                'canonical' => 'https://www.iadairport.com/arrivals',
            ],
            [
                'page' => 'Departures',
                'title' => 'Departures',
                'description' => 'View the latest departure times for flights from Washington Dulles International Airport (IAD). Check for scheduled flights, possible delays, or cancellations for today.',
                'keywords' => 'Dulles airport departures, flight status, IAD departures, Washington Dulles flight updates, flight delays, IAD cancellations',
                'canonical' => 'https://www.iadairport.com/departures',

            ],
            [
                'page' => 'Hotels',
                'title' => 'Hotels Near Dulles Airport',
                'description' => 'Find the best hotels near Washington Dulles International Airport for a comfortable stay during your trip.',
                'keywords' => 'Dulles Airport hotels, Washington Dulles accommodations, nearby hotels, airport hotels',
                'canonical' => 'https://www.iadairport.com/hotels',
            ],
            [
                'page' => 'Lounges',
                'title' => 'Lounges',
                'description' => 'Relax and unwind at the lounges in Washington Dulles International Airport. Learn about facilities, access, and services.',
                'keywords' => 'Dulles Airport lounges, airport lounge access, Washington Dulles facilities, relax at airport',
                'canonical' => 'https://www.iadairport.com/lounges',
            ],
            [
                'page' => 'Transportation',
                'title' => 'Transportation Options',
                'description' => 'Explore various transportation options available at Washington Dulles International Airport, including buses, taxis, shuttles, and more. Find the best ways to get to and from the airport.',
                'keywords' => 'transportation, airport shuttle, taxi services, bus routes, Washington Dulles transportation, IAD transport options',
                'canonical' => 'https://www.iadairport.com/transportations',
            ],
            [
                'page' => 'Parking',
                'title' => 'Parking',
                'description' => 'Learn about parking options at Washington Dulles International Airport, including short-term, long-term, and valet parking.',
                'keywords' => 'Dulles Airport parking, Washington Dulles parking options, short-term parking, long-term parking, valet parking at Dulles',
                'canonical' => 'https://www.iadairport.com/parking',
            ],
            [
                'page' => 'Shuttle services',
                'title' => 'Shuttle Services',
                'description' => 'Discover the shuttle services available at Washington Dulles International Airport for convenient and reliable transportation.',
                'keywords' => 'Dulles Airport shuttle, airport shuttle services, Washington Dulles transport, shuttle options',
                'canonical' => 'https://www.iadairport.com/shuttle-services',
            ],
            [
                'page' => 'Shopping dining',
                'title' => 'Shopping and Dining',
                'description' => 'Enjoy a variety of shopping and dining options at Washington Dulles International Airport.',
                'keywords' => 'Dulles Airport shopping, airport dining, Washington Dulles food, shopping options at Dulles',
                'canonical' => 'https://www.iadairport.com/shopping-dining',
            ],
            [
                'page' => 'Terminal concourses',
                'title' => 'Terminal and Concourses',
                'description' => 'Learn about the terminal and concourses at Washington Dulles International Airport, including services and layout.',
                'keywords' => 'Dulles Airport terminal, concourses at Dulles, Washington Dulles layout, airport services',
                'canonical' => 'https://www.iadairport.com/terminal-concourses',
            ],
            [
                'page' => 'Terminal',
                'title' => 'Terminal',
                'description' => 'Explore the terminal complex at Washington Dulles International Airport, including the main terminal, concourses, AeroTrain, security levels, amenities, and more. Find essential information for a smooth journey.',
                'keywords' => 'Dulles Airport terminal, Washington Dulles International Airport, airport terminals, AeroTrain, security checkpoints, baggage claim, lounges, parking, concourses, gates, airport amenities, terminal services',
                'canonical' => 'https://www.iadairport.com/terminal',
            ],
            [
                'page' => 'Restaurant',
                'title' => 'Restaurants',
                'description' => 'Explore the variety of restaurants available at Washington Dulles International Airport for every taste.',
                'keywords' => 'Dulles Airport restaurants, Washington Dulles dining, airport food options, places to eat at Dulles',
                'canonical' => 'https://www.iadairport.com/restaurant',
            ],
            [
                'page' => 'Car rental',
                'title' => 'Car Rentals',
                'description' => 'Find the best car rental options at Washington Dulles International Airport for your travel needs.',
                'keywords' => 'Dulles Airport car rental, car hire at Dulles, Washington Dulles rentals, travel services',
                'canonical' => 'https://www.iadairport.com/car-rental',
            ],
            [
                'page' => 'Contact us',
                'title' => 'Contact Us',
                'description' => 'Get in touch with us for any inquiries or support regarding Washington Dulles International Airport.',
                'keywords' => 'Dulles Airport contact, Washington Dulles support, inquiries, airport assistance',
                'canonical' => 'https://www.iadairport.com/contact-us',
            ],
            [
                'page' => 'VIP Lounge Access',
                'title' => 'VIP Lounge Access',
                'description' => 'Get exclusive access to VIP lounges at Washington Dulles International Airport and enjoy premium services.',
                'keywords' => 'VIP lounge access, Dulles Airport VIP, premium services, Washington Dulles lounges',
                'canonical' => 'https://www.iadairport.com/vip-lounge-access',
            ],
            [
                'page' => 'Privacy Policy',
                'title' => 'Privacy Policy',
                'description' => 'Learn about the Privacy Policy and Cookie usage at IADAirport.com. Understand how we collect, use, and protect your personal information. Learn how to manage cookies and your privacy preferences.',
                'keywords' => 'privacy policy, data handling, user privacy, Washington Dulles guide',
                'canonical' => 'https://www.iadairport.com/privacy-policy',
            ],
            [
                'page' => 'Terms of use',
                'title' => 'Terms of Use',
                'description' => 'Read the Terms of Use for IADAirport.com. Understand liability exclusions, copyright policies, and guidelines for using our website and its services.',
                'keywords' => 'terms of use, liability exclusion, copyright, website guidelines, Washington Dulles guide',
                'canonical' => 'https://www.iadairport.com/terms-of-use',
            ],
            [
                'page' => 'Faqs',
                'title' => 'FAQs',
                'description' => 'Find answers to frequently asked questions about Dulles International Airport, including COVID-19 entry requirements, transportation options, services, and more.',
                'keywords' => 'FAQs, Dulles Airport questions, Washington Dulles answers, airport guide',
                'canonical' => 'https://www.iadairport.com/faqs',
            ],
            [
                'page' => 'Black car service',
                'title' => 'Black Car Services',
                'description' => 'Experience luxury black car services for transportation to and from Washington Dulles International Airport.',
                'keywords' => 'black car service, luxury transportation, Dulles Airport cars, airport travel',
                'canonical' => 'https://www.iadairport.com/black-car-service',
            ],
            [
                'page' => 'Taxis',
                'title' => 'Taxis',
                'description' => 'Find detailed information on Taxi and Rideshare services at Dulles Airport. Learn about fares, stop locations, special requests, and payment methods for taxis, Uber, Lyft, and more.',
                'keywords' => 'taxi services, rideshare, Uber, Lyft, Washington Flyer, Dulles Airport, airport taxis, fares, payment methods, wheelchair accessible taxis, pet-friendly taxis, airport transportation, taxi rates, airport services, car services',
                'canonical' => 'https://www.iadairport.com/taxis',
            ],
            [
                'page' => 'Disabilities services',
                'title' => 'Disabilities Services',
                'description' => 'Learn about the facilities and services available for passengers with disabilities at Washington Dulles International Airport.',
                'keywords' => 'disabilities services, passenger assistance, Washington Dulles facilities, Dulles Airport guide',
                'canonical' => 'https://www.iadairport.com/disabilities-services',
            ],
            [
                'page' => 'Amenities services',
                'title' => 'Amenities and Services',
                'description' => 'Explore the various amenities and services offered at Washington Dulles International Airport including free Wi-Fi, currency exchange, charging stations, travel assistance, and more.',
                'keywords' => "Dulles airport amenities, free WiFi, currency exchange, travel assistance, charging stations, luggage carts, chapel, nursing room, pet relief areas, kid's play zone, smoking areas, Dulles International Airport services",
                'canonical' => 'https://www.iadairport.com/amenities-services',
            ],
            [
                'page' => 'About us',
                'title' => 'About Us',
                'description' => 'Learn more about our mission to provide the best guide for Washington Dulles International Airport.',
                'keywords' => 'about us, Dulles Airport guide, mission, Washington Dulles information',
                'canonical' => 'https://www.iadairport.com/about-us',
            ],
            [
                'page' => 'Blog',
                'title' => 'Blog',
                'description' => 'Stay updated with the latest blogs and articles about Washington Dulles International Airport.',
                'keywords' => 'Dulles Airport blog, Washington Dulles articles, news, updates',
                'canonical' => 'https://www.iadairport.com/blog',
            ],
        ];

        foreach ($metaTags as $metaTag) {
            // change the data type to text
            Metatag::updateOrCreate(['page' => $metaTag['page']], $metaTag);
        }
    }
}
