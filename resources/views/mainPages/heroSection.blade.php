<div class="hero-section container py-5">
    <div class="title-desc row py-5">
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 mt-lg-0 mt-5 text-white d-flex align-items-center">
            <div class="col-10">
                <div
                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-10 m-auto pb-xxl-4 pb-xl-4 pb-lg-4 pb-md-2 pb-sm-2 ">
                    <p class="m-0 p-0 hero-sec-title fs-45">
                        {{ App\Helpers\MetaTagsHelper::dynamicText($content, 'home_hero_sec_title_1', 'Dulles International Airport') }}
                        <span
                            class="text-darkParrot">{{ App\Helpers\MetaTagsHelper::dynamicText($content, 'home_hero_sec_title_2', '- IAD') }}</span>
                    </p>
                </div>
            </div>
        </div>
        <div
            class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 py-md-5 py-sm-3 py-3 py-xxl-0 py-xl-0 desc text-white">
            <div class="pb-4 col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-10 m-auto">
                <p>
                    {!! App\Helpers\MetaTagsHelper::dynamicText(
                        $content,
                        'home_hero_sec_para_1',
                        'Dulles International Airport (IAD) is an international airport located in Dulles, Virginia, USA, about 26 miles west of downtown Washington, D.C. It is named after John Foster Dulles, the 52nd Secretary of State under President Dwight D. Eisenhower. The airport is operated by the Metropolitan Washington Airports Authority (MWAA) and serves as the primary international gateway for the Washington, D.C. metropolitan area. It has three main passenger terminals and is known for its unique design featuring a main terminal building connected to the concourses by mobile lounges.',
                    ) !!}
                </p>

            </div>
            <div class="row col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-10 m-auto">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 py-2">
                    <a href="/hotels"
                        class="btn col-11 p-2 px-2 rounded-5 border-2 border-white text-white hover-text-black hover-zoom bg-white-hover">{{ App\Helpers\MetaTagsHelper::dynamicText($content, 'home_hero_sec_btn_1', 'Hotels') }}</a>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12 py-2">
                    <a href="/parking"
                        class="rounded-5 px-5 py-2 btn col-11 border-white border-2 text-white hover-text-black hover-zoom d-flex justify-content-center bg-white-hover">{{ App\Helpers\MetaTagsHelper::dynamicText($content, 'home_hero_sec_btn_2', 'Parking') }}</a>
                </div>
            </div>

        </div>
    </div>

    <!-- herp section ends -->
    <div class="text-center w-100 pb-5 mb-5">
        <a href="#search-sec"
            class="btn rounded-5 border-2 border-white text-white py-2 px-5 m-auto hover-zoom bg-white-hover">
            {{ App\Helpers\MetaTagsHelper::dynamicText($content, 'home_hero_sec_btn_3', 'Explore') }}</a>
    </div>
</div>
