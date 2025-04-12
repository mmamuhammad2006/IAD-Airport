<template>
    <!-- second sec -->
    <div class="col-12 img-top-darkParrot h-150 bg-lightGray"></div>
    <div
        class="container-fluid bg-lightGray bg-darkParrot px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-3"
    >
        <div class="container col-12 m-auto">
            <div class="col-12">
                <div class="head pb-5">
                    <div class="col-12 text-center">
                        <h3 class="fw-bold fs-2 text-white">
                            <!-- {{ localization.About_the_airport_label }} -->
                            {{
                                dynamicText(
                                    content,
                                    "home_about_airport_title_1",
                                    "About the airport"
                                )
                            }}
                        </h3>
                    </div>
                </div>
                <div class="desc-img col-12 row d-flex align-items-center">
                    <div
                        class="airport1-a1 img-cont mb-xxl-0 mb-xl-0 mb-lg-0 mb-md-5 mb-sm-5 mb-5 col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12"
                    >
                        <div
                            class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 position-relative"
                            id="map-img-id1"
                        >
                            <img
                                class="w-100 map-img img-fluid h-100"
                                :src="mapImage"
                                alt=""
                                srcset=""
                            />
                        </div>
                    </div>
                    <div
                        class="airport1-a2 desc-cont col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 d-flex align-items-center flex-column"
                    >
                        <div
                            class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-white"
                        >
                            <div class="desc1">
                                <div class="col-12">
                                    <div class="head py-2">
                                        <div class="col-12">
                                            <h3 class="fw-bold fs-5">
                                                <!-- {{
                                                    localization.station_and_location_label
                                                }} -->
                                                {{
                                                    dynamicText(
                                                        content,
                                                        "home_about_airport_sub_title_1",
                                                        "Statistics and location"
                                                    )
                                                }}
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="desc py-2">
                                        <div class="col-12">
                                            <p
                                                v-html="
                                                    dynamicText(
                                                        content,
                                                        'home_about_airport_sub_para_1',
                                                        'The Washington D.C. Dulles airport, IATA code is IAD,serves the Unites States nation\'s capital area with domestic, international and intercontinental flights. During 2020, 8.33 million passengers passed through it. It is located in Fairfax County, Virginia, 42 km (26 miles) west of downtown Washington D.C. (SEE MAP).'
                                                    )
                                                "
                                            ></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desc2">
                                <div class="col-12">
                                    <div class="head py-2">
                                        <div class="col-12">
                                            <h3 class="fw-bold fs-5">
                                                <!-- {{ localization.IAD_label }} -->
                                                {{
                                                    dynamicText(
                                                        content,
                                                        "home_about_airport_sub_title_2",
                                                        "Dulles International Airport(IAD)"
                                                    )
                                                }}
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="desc py-2">
                                        <div class="col-12">
                                            <p
                                                v-html="
                                                    dynamicText(
                                                        content,
                                                        'home_about_airport_sub_para_2',
                                                        'IAD is an international airport located in Dulles, Virginia, USA, about 26 miles west of downtown Washington, D.C. It is named after John Foster Dulles,the 52nd Secretary of State under President Dwight D.Eisenhower. The airport is operated by the Metropolitan Washington Airports Authority (MWAA) and serves as the primary international gateway for the Washington, D.C. metropolitan area. It has three main passenger terminals and is known for its unique design featuring a main terminal building connected to the concourses by mobile lounges. IAD is the busiest airport in the Washington metropolitan area and handles millions of passengers and cargo each year, serving over 125 destinations worldwide. It is also home to a number of major airlines, including United Airlines, which operates a hub at the airport.'
                                                    )
                                                "
                                            ></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 img-bottom-darkParrot h-150 bg-lightGray"></div>
</template>

<script setup>
import { dynamicText } from "../helperFunctions.js";

import { defineProps } from "vue";
const mapImage = "/images/map.jpg";
const props = defineProps({
    localization: {
        required: true,
    },
    content: {
        required: true,
    },
});
</script>
