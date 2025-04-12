<nav class="navbar navbar-cont navbar-expand-lg shadow px-0 py-4">
    <div
        class="m-auto container-fluid col-xxl-12 col-xl-12 col-lg-12 col-md-10 col-sm-10 col-10 px-4"
    >
        <div class="col-2">
            <i class="fa-solid fa-align-left text-cyan"></i>
            <span class="fw-bold px-3 text-cyan">Blogs list</span>
        </div>
        <button
            class="navbar-toggler bars-icon"
            type="button"
            aria-label="Toggle navigation"
            id="bars-icon"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="col-10 navbar-dropdown overflow-hidden"
        >
            <ul
                class="ms-xxl-auto ms-xl-auto ms-lg-auto ms-0 col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 navbar-nav mb-2 mb-lg-0 d-flex justify-content-end"
            >

                <li class="nav-item">
                    <a
                        class="nav-link hover-zoom white-line-hover text-gray fw-bold fs-14 d-inline-block"
                        >Restaurant</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link hover-zoom white-line-hover text-gray fw-bold fs-14 d-inline-block"
                        >Transportation</a
                    >
                </li>
                <li class="nav-item h-w-50">
                    <img class="h-100 w-100 rounded-circle" src="{{ asset('images/aboutIad.webp') }}" alt="">
                </li>
            </ul>
        </div>
    </div>
</nav>
@push('scripts')
<script>
    $(document).ready(function () {
        $('.bars-icon').click(function (e) {
            $('.navbar-dropdown').toggleClass('navbar-show')

        });

    });
</script>
@endpush
