@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    @include('partials.livery-access-gif')
    <div class="container-fluid py-5 px-sm-0 px-3">
        <div class="container col-lg-8 col-12 m-auto py-5">
            <div class="col-12 pt-lg-0 pt-5">
                {{-- section 1 --}}
                <div class="section-1 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 pb-3 fs-3 fw-bold text-darkParrot">Food and stores available at Washington
                                    Dulles airport
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        <a target="_blank" href="https://www.iadairport.com/">Dulles
                                            airport</a> has a wide variety of restaurants, cafes, fast food,
                                        pubs. It also has Duty Free stores, electronics, travel accessories, convenience and
                                        souvenir stores, clothing, cosmetics and perfumes, etc.
                                    </p>
                                    <p class="m-0 pb-3">
                                        The following is a tour of the stores and restaurants in the different lobbies and
                                        areas that make up Dulles airport. Please notice that locations and hours are
                                        subject to change.
                                    </p>
                                    <p><img src="https://www.iadairport.com/storage/page_assets/food.jpg"
                                            alt="Food Stores Dulles Airport"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 2 --}}
                <div class="section-2 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Before Security - Ticketing level (Upper
                                    Level)</h3>
                                <h3 class="p-0 m-0 fs-3 text-darkParrot">Dining
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 p-0">
                                        • District Chophouse 11:00am-7:00pm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 3 --}}
                <div class="section-3 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Shopping</h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Hudson Newsstand, East Ticketing (9:00am - 12:00pm & 1:00pm - 5:30pm)
                                        <br>
                                        • ITravel 2 (7:00am-9:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 4 --}}
                <div class="section-4 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Before Security - Baggage Claim Level
                                    (Lower Level)</h3>
                                <h3 class="p-0 m-0 fs-3 text-darkParrot">Dining
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Cafe Americana, Baggage Claim 14 (10:00am – 9pm)
                                        <br>
                                        • Capital Grounds Coffee, Baggage Claim 4 (9:00am – 6:00pm)
                                        <br>
                                        • Dulles Gourmet Market, Baggage Claim 14 (24 Hours)
                                        <br>
                                        • Starbucks Coffee, Baggage Claim 14 (5:00am – 6:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 5 --}}
                <div class="section-5 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Shopping
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Capitol City Ink (6:00am-9:00pm)
                                        <br>
                                        • Dulles Gourmet Market, Baggage Claim 14 (24 hours)
                                        <br>
                                        • The Washington Informer (9:00am-6:00pm)
                                        <br>
                                        • Washingtonian Newsstand, Baggage Claim 13 (24 hours)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 6 --}}
                <div class="section-6 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Concourse A</h3>
                                <h3 class="p-0 m-0 fs-3 text-darkParrot">Dining
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Dunkin' Donuts, Gate A23 (9:00am – 6:00pm)
                                        <br>
                                        • The Firkin and Fox, Gate A3 (8:30am – 6:00pm)
                                        <br>
                                        • Jersey Mike's, Gate A4 ( 9:30am – 6:00pm)
                                        <br>
                                        • Smashburger, Gate A4 (9:00am – 6:00pm)
                                        <br>
                                        • The Kitchen by Wolfgang Puck, Gate A22 – Post-Security (Tue-Sat 3pm-9pm)
                                        <br>
                                        • Starbucks, Gate A5 (6:00am - 6:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 7 --}}
                <div class="section-7 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Shopping
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Capitol City Ink (9:00am - 6:00pm)
                                        <br>
                                        • Duty Free Americas (8:00am - 10:00 pm)
                                        <br>
                                        • Hudson News, Gate A23 (Monday from 1pm-8:30pm, Tuesday-Thursday from 9am-1pm &
                                        3pm-8:30pm, Friday from 8am-8:30pm, Saturday from 12pm-8:30pm, Sunday from 9am-1pm &
                                        2pm-9:30pm.
                                        <br>
                                        • Montblanc (10:00am - 6:00pm)
                                        <br>
                                        • Souvenir Library, Gate A16 (3:00pm - 7:00 pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 8 --}}
                <div class="section-8 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Concourse B
                                </h3>
                                <h3 class="p-0 m-0 fs-3 text-darkParrot">Dining
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Bracket Room Sports Lounge and Eatery, Gate B50 (9:00am - 7:00pm)
                                        <br>
                                        • Capitol Grounds Coffee, Gate B72 (5:00am - 5:00pm)
                                        <br>
                                        • Carrabba's Italian Gril, Post-Security (2:00am-10:00pm)
                                        <br>
                                        • Chick-fil-A, Gate B45 (Mon -Sat 6:00am - 10:00pm)
                                        <br>
                                        • DC-3 Hot Dog Joint Gate B71, (Sun, Mon, Wed, Thur, Fri 4:30am-7:00pm & Tue, Sat
                                        4:30am-1:00pm)
                                        <br>
                                        • Five Guys Burgers and Fries, Gate B71 (8:00am - 6:00pm)
                                        <br>
                                        • Peet's Coffee, B45 (4:30am - 10:00pm)
                                        <br>
                                        • Potbelly Sandwich Shop, Gate B46 (8:00am - 6:00pm)
                                        <br>
                                        • Vino Volo Wine Room, Gate B62 (12:00pm - 7:00pm)
                                        <br>
                                        • Washington Burgundy and Gold Club, Gate B73 (11:00am - 7:00pm)
                                        <br>
                                        • Wendy's, Gate B45 (7:00am - 9:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 9 --}}
                <div class="section-9 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Shopping</h3>
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Coach (10:00am - 6:00pm)
                                        <br>
                                        • Duty Free Americas, Gate B63 ( 7:00 am - 10:00 pm)
                                        <br>
                                        • Estee Lauder/M.A.C, Gate B50 (9:00am - 5:00pm)
                                        <br>
                                        • Flag World, Gate B48 (8:00am - 2:00pm)
                                        <br>
                                        • Gen X Wireless, Gate B43 (9:00am - 7:00pm)
                                        <br>
                                        • Kiehl's, Gate B37 (10:00am-6:00pm)
                                        <br>
                                        • L’Occitane, Gate B37 (10:00am - 6:00pm)
                                        <br>
                                        • Michael Kors, Gate B37 (9:00am - 6:00pm)
                                        <br>
                                        • Polo Ralph Lauren, Gate B37 (10:00am – 6:00pm)
                                        <br>
                                        • Sunglass Hut, Gate (7:00am – 7:00pm)
                                        <br>
                                        • Stellar Newsstand, Gate B50 (8:00am – 10:00pm)
                                        <br>
                                        • Stellar Newsstand, Gate B73 (5:00am – 7:00pm)
                                        <br>
                                        • Swarovski, Gate B50 (Thursday through Monday from 9:00am - 5:00pm)
                                        <br>
                                        • Tumi, Gate B50 (Monday through Friday from 8:00am – 5:00pm)
                                        <br>
                                        • Vera Bradley Gate B66 (Thursday through Sunday from 1:00pm - 6:00pm)
                                        <br>
                                        • Vineyard Vines, Gate B70 (Thu-Sun 1:00pm-6:00pm)
                                        <br>
                                        • Washingtonian Newsstand, Gate B38 (7:00am – 6:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 10 --}}
                <div class="section-10 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Concourse C</h3>
                                <h3 class="p-0 m-0 fs-3 text-darkParrot">Dining
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • American Tap Room, Gate C19 (9:00am - 6:00pm)
                                        <br>
                                        • Au Bon Pain, Gate C14 (6:00am – 7:00pm)
                                        <br>
                                        • Auntie Anne’s, Gate C9 (6:00am – 7:00pm)
                                        <br>
                                        • Be Right Burger (brb), Gate C14 (11:00am – 7:00pm)
                                        <br>
                                        • Chef Geoff's, Gate C14 (9:00am – 6:00pm)
                                        <br>
                                        • Starbucks, Gate C7 (4:45am - 12:45pm)
                                        <br>
                                        • Starbucks, Gate C24 (5:00am-6:30pm)
                                        <br>
                                        • Subway, Gate C2 (9:00am – 7:00pm)
                                        <br>
                                        • The Chef's Table by Wolfgang Puck, Gate C4 (11:00am – 7:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 12 --}}
                <div class="section-12 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Shopping
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Brookstone, Gate C9 (Thursday-Monday from 9:30am - 12:00pm & 1:00pm - 6:30pm and
                                        Tuesday -Wednesday, from 1:00pm - 6:30pm)
                                        <br>
                                        • Capitol City Ink (6:00am - 9:00pm)
                                        <br>
                                        • Duty Free Americas, Gate C4 (7:00 am - 10:00 pm)
                                        <br>
                                        • Duty Free Americas, Gate C14 (7:00 am -10:00 pm)
                                        <br>
                                        • Hudson Newsstand, Gate C4 (9:00am - 6:00pm)
                                        <br>
                                        • Hudson Newsstand, Gate C28 (5:00am – 11:00am and 1:30pm – 6:00pm)
                                        <br>
                                        • InMotion Entertainment, Gate C11 (9:00am - 5:00pm)
                                        <br>
                                        • Pena Shoeshine (Monday through Friday from 9:00am - 5:00pm)
                                        <br>
                                        • Duty Free Americas (2:00pm-8:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 13 --}}
                <div class="section-13 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Concourse D
                                    (Lower Level)
                                    <h3 class="p-0 m-0 fs-3 text-darkParrot">Dining
                                    </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Bar Simon, Gate D14 (11:00am-10:00pm)
                                        <br>
                                        • Bistro Atelier, Gate D14 8:00am – 6:00pm)
                                        <br>
                                        • Chick-fil-A, Gate D7 (Monday through Saturday from 7:00am - 7:00pm)
                                        <br>
                                        • DC Craft Brews, Gate D23 (11:00am-7:00pm)
                                        <br>
                                        • Dulles Gourmet Market, Gate D5 (8:00am - 8:00pm)
                                        <br>
                                        • Dunkin’ Donuts, Gate D5 and D23 (6:00am – 6:00pm)
                                        <br>
                                        • Pizza Hut, Gate D15 (9:00am - 6:00pm)
                                        <br>
                                        • Potbelly Sandwich Shop, Gate D14 (8:00am – 7:00 pm)
                                        <br>
                                        • Starbucks, Gate D16 (4:45am-12:45pm)
                                        <br>
                                        • Wow Bao, Gate D18 (9:00am - 6:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 14 --}}
                <div class="section-14 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Shopping
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Capitol City Ink (9:00am - 6:00pm)
                                        <br>
                                        • NBC4 Newsstand, Gate D9 (9:00am – 6:00pm)
                                        <br>
                                        • Duty Free Americas, Gate D2 and D16 (7:00 am - 10:00 pm)
                                        <br>
                                        • Forbes Newsstand, Gate D20 (9:00am – 10:30am and 4:00pm - 6:00pm)
                                        <br>
                                        • InMotion Entertainment, Gate D20 (9:00am – 6:00pm)
                                        <br>
                                        • Uniquely D.C. Gate D18 (8:30am - 6:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- section 15 --}}
                <div class="section-15 pb-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Z Gates - South Finger
                                    (Lower Level)
                                    <h3 class="p-0 m-0 fs-3 text-darkParrot">Dining
                                    </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        • Dunkin’ Donuts (8:00am - 5:00pm)
                                        <br>
                                        • Subway, Gate Z7 (9:00am – 7:00pm)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
