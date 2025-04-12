<nav class="navbar navbar-cont navbar-expand-lg">
    <div class="m-auto container-fluid col-xxl-12 col-xl-12 col-lg-12 col-md-10 col-sm-10 col-10">
        <a class="col-xxl-2 col-xl-2 col-lg-2 col-sm-6 col-6 z-3 navbar-brand fw-bold fs-3 text-darkParrot position-relative py-3"
            :href="'/'">
            <img src="{{ url('/images/iadLogo.png') }}" alt="" srcset="">
        </a>
        <button class="navbar-toggler bars-icon" type="button" aria-label="Toggle navigation" id="bars-icon">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 navbar-dropdown">
            <ul
                class="ms-xxl-auto ms-xl-auto ms-lg-auto ms-0 col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 navbar-nav mb-2 mb-lg-0 d-flex justify-content-between">
                {{-- <li class="nav-item d-flex align-items-center nav-dropdown-parent">
                    <a
                        class="nav-link nav-dropdown-link text-white hover-zoom fw-bold fs-14 py-4 d-inline-block"
                        aria-current="page"
                        href="/flights"
                        >Flights</a
                    >
                    <ul class="nav-dropdown">
                        <li class="nav-dropdown-child"><a href="">Arrivals</a></li>
                        <li class="nav-dropdown-child"><a href="">Departures</a></li>
                    </ul>

                </li> --}}
                <li class="nav-item nav-dropdown-parent">
                    <a class="nav-link cursor-pointer nav-dropdown-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        aria-current="page">
                        Flights
                    </a>
                    <ul class="nav-dropdown position-absolute z-1 bg-darkParrot p-3 shadow">
                        <li class="nav-dropdown-child">
                            <a class="text-decoration-none text-white" href="/arrivals">Arrivals</a>
                        </li>
                        <li class="nav-dropdown-child">
                            <a class="text-decoration-none text-white" href="/departures">Departures</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        href="/iad-airlines">Air Lines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        href="/terminal">Terminal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        :href="'/parking'">Parking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        :href="'/hotels'">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        href="/lounges">Lounges</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        :href="'/restaurant'">Restaurant</a>
                </li>
                <li class="nav-item nav-dropdown-parent">
                    <a
                        class="nav-link text-white cursor-pointer nav-dropdown-link hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block">Transportation</a>
                    <ul class="nav-dropdown position-absolute z-1 bg-darkParrot p-3 shadow">
                        <li class="nav-dropdown-child">
                            <a class="text-decoration-none text-white" href="/shuttle-services">Shuttle Service</a>
                        </li>
                        <li class="nav-dropdown-child">
                            <a class="text-decoration-none text-white" href="/taxis">Taxi</a>
                        </li>
                        <li class="nav-dropdown-child">
                            <a class="text-decoration-none text-white" href="/black-car-service">Black Car Service</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white hover-zoom fw-bold fs-14 py-lg-4 py-2 d-inline-block"
                        href="/car-rental">Car Rental</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    @if ($bgDarkParrot)

        function white() {
            $('.navbar-brand').addClass('text-white').removeClass('text-darkParrot')
        }
        white();
    @else
        function darkParrot() {
            $('.navbar-brand').addClass('text-darkParrot').removeClass('text-white')
        }
        darkParrot();
    @endif

    $(document).ready(function() {
        $('.bars-icon').click(function(e) {
            $('.navbar-dropdown').toggleClass('navbar-show')

        });

    });
</script>
