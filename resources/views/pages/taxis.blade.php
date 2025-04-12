@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    @include('partials.livery-access-gif')
    <div class="container-fluid py-5 px-sm-0 px-3">
        <div class="container col-lg-8 col-12 m-auto py-5">
            <div class="col-12">
                {{-- section 1 --}}
                <div class="section-1 pb-5 pt-lg-0 pt-5">
                    <div class="col-12">
                        {{-- head --}}
                        <div class="head pb-3">
                            <div class="col-12">
                                <h3 class="p-0 m-0 pb-3 fs-3 fw-bold text-darkParrot">Taxi and Rideshare services
                                </h3>
                                <h5 class="p-0 m-0 pb-3 fs-5 text-darkParrot">Fares and stop locations
                                </h5>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <img class="pb-3"
                                        src="https://web.archive.org/web/20240414162914im_/https://www.iadairport.com/storage/page_assets/taxi.jpg"
                                        alt="Taxi">
                                    <h3 class="m-0 pb-3 fs-3 text-darkParrot">Washington Flyer Taxicabs</h3>
                                    <p class="m-0 pb-3">
                                        It is the official taxi company serving Dulles International exclusively, with
                                        24-hour service to and from the Airport.
                                    </p>
                                    <p class="m-0 pb-3">
                                        Location
                                    </p>
                                    <p class="m-0 pb-3">
                                        From the terminal Arrivals Level – Baggage Claim, customers should proceed DOWN the
                                        ramp at Doors 2 or 6. A customer service representative is available 24-hours a day.
                                        No reservations are necessary for taxi service.
                                    </p>
                                    <p class="m-0 pb-3">
                                        IMPORTANT: If you wish to board a non-Washington Flyer cab must make advance
                                        arrangements directly with the operator of that company for pickup at Dulles.
                                        Non-Washington Flyer cab companies are prohibited from soliciting passengers for
                                        pick up on airport property.
                                    </p>
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
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Special Requests</h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        Wheelchair-accessible vehicles can accommodate one person in his/her wheelchair plus
                                        three additional passengers.
                                        <br>
                                        Pets and service dogs are welcome.
                                    </p>
                                    <p class="m-0 pb-3">
                                        IMPORTANT: All pets (excluding service dogs) must be transported in a pet carrier.
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
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Taxi fares</h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        A fare estimate starts from USD 55 to Arlington VA and USD 70 to Washington DC.
                                    </p>
                                    <p class="m-0 pb-3">
                                        The taxicab operator is required to use the taxicab meter to calculate the fare for
                                        every trip using the following rates and charges:
                                    </p>
                                    <p class="m-0 pb-3">
                                        $3.50 First 1/4 mile or part thereof
                                        <br>
                                        $ .54 Each additional 1/4 mile or part thereof
                                        <br>
                                        $ .40 Each 60 seconds of waiting time ($24/hour)
                                        <br>
                                        $1.50 Each additional passenger in a pre-formed party
                                        <br>
                                        (up to 5 year old childs have no charge when
                                        <br>
                                        accompanied by an older person)
                                        <br>
                                        $3.00 Surcharge shall be charged for each trip originating at
                                        <br>
                                        or terminating at Washington Dulles International Airport
                                        <br>
                                        $2.50 Surcharge shall be charged for each trip when a snow
                                        <br>
                                        emergency is declared by the District of Columbia.
                                    </p>
                                    <p class="m-0 pb-3">
                                        Tips, although not mandatory, are welcome and are at the discretion of the passenger
                                    </p>
                                    <p class="m-0 pb-3">
                                        IMPORTANT: trips to and from Dulles Airport might be impacted by tolls on nearby
                                        roads. For more details about rush hour tolls on nearby Virginia Route 66 <a
                                            target="_blank" href="https://www.66expresslanes.org/">click here.</a>
                                    </p>
                                    <p class="m-0 pb-3">
                                        PAYMENT METHOD
                                    </p>
                                    <p class="m-0 pb-3">
                                        Cash or credit card: American Express, Visa, MasterCard, Discover, and Diners Club
                                        are accepted by all cabs,
                                    </p>
                                    <p class="m-0 pb-3">
                                        Payment by Airline Voucher: Taxicab service is restricted to the destination and
                                        payment terms indicated on the airline voucher.
                                    </p>
                                    <p class="m-0 pb-3">
                                        IMPORTANT: you will be responsible for payment of the balance if the meter amount
                                        exceeds the airline voucher amount.
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
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Uber, Lyft and LiveryAccess Black Car
                                    Service
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        Location
                                    </p>
                                    <p class="m-0 pb-3">
                                        Pick up zone is on the ground level outside of Baggage Claim, accessible via Doors
                                        2, 4 or 6. Numbered zones make finding your ride easy.
                                    </p>
                                    <p class="m-0 pb-3">
                                        A solar-powered overhead canopy protects passengers from the elements.
                                    </p>
                                    <p class="m-0 pb-3">
                                        Airport drop-offs for all vehicles remain on the Departures Level.
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
                                <h3 class="p-0 m-0 fs-3 fw-bold text-darkParrot">Fares
                                </h3>
                            </div>
                        </div>
                        {{-- content --}}
                        <div class="content p-0">
                            <div class="col-12">
                                <div class="col-12">
                                    <p class="m-0 pb-3">
                                        Fares to Arlington and Washington DC ranges between usd 50 and usd 60.
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
