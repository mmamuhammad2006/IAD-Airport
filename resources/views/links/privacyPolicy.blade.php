@extends('layouts.app')
@include('partials.metaTags')
@section('content')
    @include('partials.livery-access-gif')
    <div class="container-fluid py-5 bg-lightGray px-sm-0 px-3">
        <div class="container m-auto">
            <div class="col-12 row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 pt-lg-0 pt-sm-5 pt-5">
                    <div class="col-12  pt-lg-0 pt-sm-5 pt-5">
                        <img class="img-fluid" src="{{ asset('images/privacyPolicy.webp') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-end">
                    <div class="col-lg-10 col-sm-12 col-12 d-flex flex-column justify-content-center py-4">
                        <div class="head py-2">
                            <div class="col-12">
                                <h3 class="fw-bold text-darkParrot">Our Website Policy </h3>
                            </div>
                        </div>
                        <div class="desc py-2">
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam ratione eveniet
                                    laudantium iste officiis asperiores, fugiat, explicabo tempora tenetur sed quis quasi
                                    doloribus quisquam modi. Est accusamus distinctio voluptates aliquid.</p>
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
    </div>
    <!-- privacy policy section -->
    <div class="container-fluid bg-lightGray py-5 px-sm-0 px-3">
        <div class="container m-auto pb-5">
            <div class="col-12 row d-flex justify-content-center">
                <div class="head text-center py-3">
                    <div class="col-12 pb-3">
                        <h1 class="fw-bold text-dark">Privacy and policy</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="policies">
                        <div class="policy py-2">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h3 class="text-darkParrot py-2 fw-bold" id="desc1">IADAIRPORT.COM</h3>
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="col-12">
                                        <p>Access to this Website may imply the use of cookies. Cookies are small amounts of
                                            information that are stored in the browser used by each User —in the different
                                            devices that they can use to navigate— so that the server remembers certain
                                            information that later and only the server that implemented it will read.
                                            Cookies facilitate navigation, make it more user-friendly, and do not damage the
                                            navigation device. Cookies are automatic procedures for collecting information
                                            regarding the preferences determined by the User during his visit to the Website
                                            in order to recognize him as a User, and personalize his experience and use of
                                            the Website, and may also, for example, help to identify and resolve errors. The
                                            information collected through cookies may include the date and time of visits to
                                            the Website, the pages viewed, the time spent on the Website and the sites
                                            visited just before and after it. However, no cookie allows it to contact the
                                            User's phone number or any other means of personal contact. No cookie can
                                            extract information from the User's hard drive or steal personal information.
                                            The only way that the User's private information is part of the Cookie file is
                                            for the user to personally give that information to the server. Cookies that
                                            allow a person to be identified are considered personal data. Therefore, the
                                            Privacy Policy described above will apply to them. In this sense, for the use of
                                            the same, the consent of the User will be necessary. This consent will be
                                            communicated, based on an authentic choice, offered through an affirmative and
                                            positive decision, before the initial treatment, removable and documented.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="policy py-2">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h3 class="text-darkParrot py-2 fw-bold" id="desc2">Third party cookies</h3>
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="col-12">
                                        <p>They are cookies used and managed by external entities that provide DCdulles.com
                                            with services requested by it to improve the Website and the user experience
                                            when browsing the Website. The main purposes for which third-party cookies are
                                            used are to obtain access statistics and analyze navigation information, that
                                            is, how the User interacts with the Website.

                                            The information obtained refers, for example, to the number of pages visited,
                                            the language, the place where the IP address from which the User accesses, the
                                            number of Users who access, the frequency and recurrence of visits, the visit
                                            time, the browser they use, the operator or type of device from which the visit
                                            is made. This information is used to improve the Website and detect new needs to
                                            offer Users a Content and / or service of the highest quality. In any case, the
                                            information is collected anonymously and trend reports on the Website are
                                            prepared without identifying individual users.

                                            Providers, including Google, use cookies to display relevant ads based on a
                                            user's previous visits to their website or other websites.

                                            The use of advertising cookies allows Google and its partners to display ads
                                            based on visits made by users to their websites or to other websites on the
                                            Internet.

                                            The entity (s) in charge of providing cookies may transfer this information to
                                            third parties, as long as it is required by law or it is a third party that
                                            processes this information for said entities.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="policy py-2">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h3 class="text-darkParrot py-2 fw-bold" id="desc3">Disable, reject and delete
                                            cookies</h3>
                                    </div>
                                </div>
                                <div class="desc">
                                    <div class="col-12">
                                        <p>The User can disable, reject and delete the cookies - totally or partially -
                                            installed on their device through the configuration of their browser (among
                                            which are, for example, Chrome, Firefox, Safari, Explorer). In this sense, the
                                            procedures for rejecting and deleting cookies may differ from one Internet
                                            browser to another. Consequently, the User must refer to the instructions
                                            provided by the Internet browser they are using. In the event that you reject
                                            the use of cookies - totally or partially - you may continue to use the Website,
                                            although you may have limited use of some of its features.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
