@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    @include('partials.livery-access-gif')
    <!-- hero section -->
    <div class="container-fluid py-5 bg-lightGray px-sm-0 px-3">
        <div class="container m-auto">
            <div class="col-12">
                <div class="col-12 row d-flex align-items-center justify-content-between">
                    <div
                        class="aboutUs-desc1 desc-cont col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center pt-lg-0 pt-sm-5 pt-5">
                        <div class="col-xxl-11 col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12 pt-lg-0 pt-sm-5 pt-5">
                            <div class="desc2">
                                <div class="col-12">
                                    <div class="head py-2">
                                        <div class="col-12">
                                            <h3 class="fw-bold text-darkParrot">What to expect from IADAIRPORT.COM</h3>
                                        </div>
                                    </div>
                                    <div class="desc py-2">
                                        <div class="col-12">
                                            <p>A guide aimed exclusively at the Dulles airport passenger. The answers to the
                                                most frequent questions asked by the thousands of passengers who travel by
                                                Dulles airport daily. In addition, details and transfer between the main
                                                terminal and the concourses, public and private transport, flight status,
                                                food, shopping and general services, installation for passengers with
                                                special needs, VIP lounges, hotels and places to rest, information on
                                                parking, the airlines that currently serve the airport and non stop
                                                destinations.</p>
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <div
                                            class="btn rounded-5 border-2 border-darkParrot text-darkParrot py-2 px-5 m-auto hover-zoom bg-darkParrot-hover">
                                            Explore</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="aboutUs-img img-cont mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-end">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12  position-relative">
                            <img class="w-100 map-img img-fluid h-100 " src="{{ asset('images/aboutIad.webp') }}"
                                alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- second sec -->
    <div class="container-fluid  bg-lightGray pb-5  px-sm-0 px-3">
        <div class="container m-auto">
            <div class="col-12 pb-5">
                <div class="head py-3">
                    <div class="col-12 text-center">
                        <h3 class="fw-bold text-darkParrot">About IAD Aiport</h3>
                    </div>
                </div>
                <div class="desc">
                    <div class="col-12 row">
                        <div class="aboutUs-desc2 desc1 col-lg-6 col-12 d-flex align-items-center">
                            <div class="col-11">
                                <p>
                                    This website IADairport.com is part of the project of the World Airport Guide for
                                    passengers.
                                    Project that originated in 2007 and that over the years and thanks to the efforts of
                                    collaborators, editors and users, grew to provide a free service to passengers at
                                    different airports around the world.
                                    Today we can be proud to say that almost a thousand airports make up this great guide.
                                    The present website IADairport.com, UNDER NO ASPECT, tries to be labeled with the title
                                    of "Official Airport Website", but represents an alternative, complementary and original
                                    option, without any desire to compete with anyone, but to offer to passengers an
                                    additional source of information to that which can be found on the airport's official
                                    website (https://www.flydulles.com/) and on other websites related to the same airport.
                                    With the desire to continue growing, we hope that IADairport.com can be of great use to
                                    the thousands of passengers who daily pass through the Washington Dulles International
                                    Airport.
                                </p>
                            </div>
                        </div>
                        <div class="aboutUs-links links-cont col-lg-6 col-12 d-flex align-items-center">
                            <div class="col-12">
                                <div class="links py-2">
                                    <h4 class="fw-bold">Indexes</h4>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Index</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Terminal</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Today's Departures</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Today's Arrivals</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">FAQs</a>
                                </div>
                                <div class="links py-2">
                                    <h4 class="fw-bold">Services</h4>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Amenities</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Shopping and Dining</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Customer Service</a>
                                </div>
                                <div class="links py-2">
                                    <h4 class="fw-bold">To/From</h4>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Buses</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Black Car Service</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Taxis and ride share
                                        services</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Rent a car</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Hotel (Sleepbox lounge and
                                        Washington Dulles Marriot)</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">VIP Lounges</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Airlines and
                                        Destinations</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Parking</a>
                                    <a class="px-1 text-decoration-none fw-bold" href="">Passengers with special
                                        needs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
