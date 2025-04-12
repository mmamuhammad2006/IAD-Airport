@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    @include('partials.livery-access-gif')
    {{-- section one --}}
    <div class="container-fluid py-5 px-sm-0 px-3">
        <div class="container m-auto">
            <div class="col-12 d-lg-flex">
                {{-- head and para --}}
                <div class="head-para col-lg-6 col-12 py-lg-0 pb-5 d-flex align-items-center">
                    <div class="col-10">
                        <div class="head py-2">
                            <div class="col-12">
                                <h3 class="fs-3 fw-bold text-darkParrot">Dulles Airport Complex</h3>
                            </div>
                        </div>
                        <div class="para py-2">
                            <div class="col-12">
                                <p>The passenger terminal complex at Dulles Airport consists of a large main passenger
                                    terminal, recognized by its curved roof, with connecting Z gates and two buildings
                                    parallel to each other. The first building houses A gates (west) and B gates (east),
                                    while the second houses C gates (west) and D gates (east). To the right of the Main
                                    Terminal is the International Arrivals Building.</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- img --}}
                <div class="img col-lg-6 col-12">
                    <div class="col-12">
                        <img class="w-100" src="{{ asset('images/terminal.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- section two --}}
    <div class="container-fluid py-5 px-sm-0 px-3">
        <div class="container m-auto col-12">
            <div class="col-lg-8 col-12 m-auto">
                {{-- Main Head --}}
                <div class="head">
                    <div class="col-12 d-flex justify-content-center">
                        <h3 class="fs-3 fw-bold text-darkParrot">Terminals</h3>
                    </div>
                </div>
                {{-- heads paras sections --}}
                <div class="head-para">
                    <div class="col-12">
                        {{-- first head para --}}
                        <div class="py-3">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-4 text-darkParrot">Main terminal</h3>
                                </div>
                            </div>
                            <div class="para">
                                <div class="col-12">
                                    <p>The Ground Transportation and Parking level of the Main Terminal with entrance gates
                                        2, 4 and 6 offers rental cars and a rest area for pets. You have access to shared
                                        taxis and vans, as well as parking and valet parking.

                                        The arrivals / baggage claim level houses the AeroTrain platform with access to it,
                                        Z gates and A and B gates, as well as the shuttle bus to D gates. To the right of
                                        the level is the International Arrivals Building . Services and amenities include
                                        ATMs, Health Room, 1-15 baggage claim carousels, lost property, US Lounge and USO
                                        lounges AND access to the Silver Line Express at Door 4.

                                        The security checkpoint level is reached by elevator / escalator and is divided into
                                        East and West security checkpoints. Thereafter, passengers proceed to Z gates
                                        (left); or via pedestrian walkway to gates A, B or the shuttle service to C or D
                                        gates.

                                        The <b>Aerotrain</b> level between the lower and upper levels is reached by an
                                        elevator / escalator, which serves A, B and C gates.

                                        On the upper level the check-in counters, with separate east and west security
                                        checkpoints and TSA pre-check enrollment centers leading to gates Z Z6-Z10, the
                                        passenger walkway to gates A and B and to the shuttle to D gates. International
                                        currency exchange services are available on the east and west of this level at the
                                        top of the escalators. Electronic device charging stations can be found outside the
                                        international arrivals gate. You can find a pet rest area at opposite ends of this
                                        level, a gift shop, and an information desk.</p>
                                </div>
                            </div>
                        </div>
                        {{-- second head para --}}
                        <div class="py-3">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-4 text-darkParrot">Concourse A</h3>
                                </div>
                            </div>
                            <div class="para">
                                <div class="col-12">
                                    <p>Concourse A has 32 gates labeled A1-32. Gates A1-A6 are for United Express.

                                        International currency exchange services are available within this lobby at gate
                                        A32. Directly across from gate A32 is the Washington Dulles International Airport
                                        Chapel in Concourse A, which welcomes all passengers. There is a nursing room inside
                                        lobby A near door A20. There is also a Pet Rest Area next to Gate A32, adjacent to
                                        the Virgin Atlantic Club. Lobby A includes the first Sleepbox at IAD Airport, which
                                        is located on the mezzanine level between gates A6 and A14. Free charging stations
                                        can be found throughout the Concourse.</p>
                                </div>
                            </div>
                        </div>
                        {{-- third head para --}}
                        <div class="py-3">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-4 text-darkParrot">Concourse B</h3>
                                </div>
                            </div>
                            <div class="para">
                                <div class="col-12">
                                    <p>Lobby B has 45 gates labeled gates B35-79.

                                        This Concourse has free charging stations at all gates. There is a children's play
                                        area inside lobby B, which is located near door B70. There is a nurse's room inside
                                        lobby B near gate B70 and a smoking area directly across from gate B37 and off gate
                                        B73.</p>
                                </div>
                            </div>
                        </div>

                        {{-- fourth head para --}}
                        <div class="py-3">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-4 text-darkParrot">Concourse C</h3>
                                </div>
                            </div>
                            <div class="para">
                                <div class="col-12">
                                    <p>Lobby C has 30 gates labeled C1-30 gates.

                                        This Concourse offers international currency exchange services at gates C8 and C12.
                                        Free charging stations can be found throughout the Concourse. There is a nurse's
                                        room inside lobby C near door C11 and a smoking area directly across from door C2.
                                    </p>
                                </div>
                            </div>
                        </div>
                        {{-- fifth head para --}}
                        <div class="py-3">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-4 text-darkParrot">Concourse D</h3>
                                </div>
                            </div>
                            <div class="para">
                                <div class="col-12">
                                    <p>Hall D has 32 gates labeled gates D1-32.

                                        International currency exchange services are located at gate D16. There is a nurse's
                                        room inside lobby D, near door D1. Free charging stations can be found throughout
                                        the Concourse at the gates. There is also a pet rest area included in this lobby,
                                        just across from door D1. There is a smoking area right in front of gate D30.</p>
                                </div>
                            </div>
                        </div>
                        {{-- sixth head para --}}
                        <div class="py-3">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-4 text-darkParrot">Connection between the main Terminal and the Concourses
                                    </h3>
                                </div>
                            </div>
                            <div class="para">
                                <div class="col-12">
                                    <p>The <b>Aerotrain</b> is the automatic train service that moves passengers between the
                                        Terminal and the gates for domestic and international departure flights and domestic
                                        arrival flights. Passengers arriving on most international flights do not use the
                                        AeroTrain because they must first go through US Customs The Terminal Station is
                                        located beyond the TSA security checkpoints. Travel time of less than two minutes
                                        between stations.</p>
                                </div>
                            </div>
                        </div>
                        {{-- ends --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
