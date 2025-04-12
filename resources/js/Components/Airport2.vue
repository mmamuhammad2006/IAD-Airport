<template>
    <!-- fifth sec -->
    <div
        class="container-fluid p-0 py-5 grayWhite-linearGradient px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-3"
    >
        <div class="container col-12 m-auto">
            <div class="col-12">
                <div class="head pb-5">
                    <div
                        class="col-12 text-center d-flex justify-content-center"
                    >
                        <h3
                            class="fw-bold fs-2 text-darkParrot w-410 d-flex justify-content-center align-items-center"
                        >
                            {{
                                dynamicText(content,'home_public_private_transportation_head_1','Public and Private Transportation')
                            }}
                        </h3>
                    </div>
                </div>
                <div
                    class="desc-img col-12 row d-flex align-items-center h-100"
                >
                    <div
                        class="img-lightParrot py-5 col-1 d-xxl-block d-xl-block d-lg-block d-none"
                    ></div>
                    <div
                        class="airport2-a1 ps-xxl-5 ps-xl-5 ps-lg-5 ps-0 desc-cont col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center"
                    >
                        <div
                            class="col-xxl-11 col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12"
                        >
                            <div class="desc2">
                                <div class="col-12">
                                    <div class="head py-2">
                                        <div class="col-12">
                                            <h3
                                                class="fw-bold fs-5 text-darkParrot"
                                            >
                                                {{
                                                    dynamicText(content,'home_public_private_transportation_sub_head_1','VIP Lounges')
                                                }}
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="desc py-2">
                                        <div class="col-12">
                                            <p
                                                v-html="
                                                dynamicText(content,'home_public_private_transportation_sub_para_1','There are several airline lounges at Washington Dulles airport, such as: Air France, British Airways, Etihad, Lufthansa, Turkish Airlines, Virgin Atlantic, United Airlines. USO Lounge is available as well.')
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
                                            <h3
                                                class="fw-bold fs-5 text-darkParrot"
                                            >
                                                {{
                                                    dynamicText(content,'home_public_private_transportation_sub_head_2','Parking')
                                                }}
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="desc py-2">
                                        <div class="col-12">
                                            <!-- <p class="py-2">
                                                {{
                                                    localization.parking_sectors_description
                                                }}
                                            </p>
                                            <p class="py-2 fw-bold">
                                                {{
                                                    localization.parking_sectors_airport_public_parking
                                                }}
                                            </p>
                                            <p
                                                class="py-2"
                                                v-html="
                                                    localization.parking_sectors_points
                                                "
                                            ></p> -->
                                            <p
                                                class="py-2"
                                                v-html=" dynamicText(content,'home_public_private_transportation_sub_para_2','There are 6 parking sectors: Terminal Lot - Cell Phone Lot - Garage 1 - Valet - Garage 2 and Economy Lot. <br><br> <b>The following spaces have been reserved in the IAD Airport\'s public parking lots:</b> <br><br> Rows 2 through 30 of the Terminal Lot, at the end of the row closest to the Terminal. <br><br> Garage 1 is located on Level 1 adjacent to the Terminal\'s walkway and shuttle stop. <br><br> Garage 2 is located on Level 3 near the walkway and Level 1 near the shuttle stop. <br><br> Economy Parking is available throughout the parking lot and is close to all shuttle stations. <br><br> Disability parking spots are only for vehicles with a government-issued plate or placard for disabled parking. <br><br> These spaces are available on a first-come, first-served basis and cannot be reserved in advance. br><br> All airport parking shuttles are wheelchair accessible and available to all passengers at no cost.')
                                                "
                                            ></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="airport2-a2 img-cont mt-xxl-0 mt-xl-0 mt-lg-0 mt-md-5 mt-sm-5 mt-5 col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 d-flex justify-content-end"
                        id="parent-map-img2"
                    >
                        <div
                            class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 position-relative"
                            id="map-img-id2"
                        >
                            <img
                                class="w-100 map-img img-fluid h-100"
                                :src="naqsa"
                                alt=""
                                srcset=""
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { dynamicText } from "../helperFunctions.js";
import { defineProps } from "vue";
const naqsa = "/images/naqsa.jpg";
const props = defineProps({
    localization: {
        required: true,
    },
    content: {
        required: true,
    },
});
</script>
