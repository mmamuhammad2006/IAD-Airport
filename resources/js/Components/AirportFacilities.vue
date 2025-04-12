<template>
    <!-- fourth sec -->
    <div class="container-fluid py-5 bg-black1">
        <div class="container py-5 m-auto">
            <div class="col-12 p-0">
                <div class="head pb-5">
                    <div
                        class="col-12 p-0 text-center d-flex justify-content-center"
                    >
                        <h3
                            class="p-0 m-0 fs-2 fw-bold text-white w-410 d-flex justify-content-center align-items-center"
                        >
                            {{ dynamicText(content,'home_facilities_airport_head_1','Facilities on airport') }}
                        </h3>
                    </div>
                </div>
                <div class="desc">
                    <div class="col-12 d-flex flex-wrap justify-content-center">
                        <div
                            class="c1-a1 desc2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-3 px-3"
                        >
                            <div
                                class="border-radius-10 bg-white hover-zoom h-100 shadow cursor-pointer p-4 d-flex flex-column justify-content-center align-items-center text-center border-b-t-20-purple"
                            >
                                <div class="img">
                                    <div class="col-12">
                                        <img
                                            class="h-150 w-150 object-fit-cover rounded-circle"
                                            :src="taxiCar"
                                            alt=""
                                            srcset=""
                                        />
                                    </div>
                                </div>
                                <div class="head py-2">
                                    <div class="col-12">
                                        <h3 class="fw-bold fs-5 text-purple">
                                            <!-- {{ facilities.one.title }} -->
                                            {{
                                                dynamicText(content,'home_facilities_airport_sub_head_1','Black Car and Taxi service')
                                            }}
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="desc py-2 h-30 col-12 overflow-hidden"
                                >
                                    <div class="col-12">
                                        <p
                                            v-html="dynamicText(content,
                                            'home_facilities_airport_sub_para_1',
                                            'LiveryAccess serve Dulles International exclusively, with 24-hour service to and from the Airport. From the Terminal, Arrivals Level - Baggage Claim, customers should proceed DOWN the ramp at Doors 2 or 6. Taxi fare starts from USD 55 to Arlington VA and 70 to Washington DC. Uber and Lyft are also available.'
                                            )"
                                            class="overflow-hidden white-space-nowrap text-overflow-ellipsis"
                                        ></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="c1-a2 desc2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-3 px-3"
                        >
                            <div
                                class="border-radius-10 bg-white hover-zoom h-100 shadow cursor-pointer p-4 d-flex flex-column justify-content-center align-items-center text-center border-b-t-20-orange"
                            >
                                <div class="img">
                                    <div class="col-12">
                                        <img
                                            class="h-150 w-150 object-fit-cover rounded-circle"
                                            :src="bus"
                                            alt=""
                                            srcset=""
                                        />
                                    </div>
                                </div>
                                <div class="head py-2">
                                    <div class="col-12">
                                        <h3 class="fw-bold fs-5 text-orange">
                                            {{
                                                dynamicText(content,'home_facilities_airport_sub_head_2','Bus services')
                                            }}
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="desc py-2 h-30 col-12 overflow-hidden"
                                >
                                    <div class="col-12">
                                        <p
                                            v-html="dynamicText(content,'home_facilities_airport_sub_para_2','There are several bus services (Silver Line Express, bus Route 983 and the Metro bus 5A) that connect Washington Dulles airport with the closest metro station, Wiehle-Reston East Station. Also, Route 983, and 5A together with 981 run to the Museum\'s area in Washington DC. Virginia Breeze bus connect the airport with Virginia area and Megabus go to Union Station (central station).')
                                            "
                                            class="overflow-hidden white-space-nowrap text-overflow-ellipsis"
                                        ></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="c1-a3 desc2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-3 px-3"
                        >
                            <div
                                class="border-radius-10 bg-white hover-zoom h-100 shadow cursor-pointer p-4 d-flex flex-column justify-content-center align-items-center text-center border-b-t-20-parrot"
                            >
                                <div class="img">
                                    <div class="col-12">
                                        <img
                                            class="h-150 w-150 object-fit-cover rounded-circle"
                                            :src="carRental"
                                            alt=""
                                            srcset=""
                                        />
                                    </div>
                                </div>
                                <div class="head py-2">
                                    <div class="col-12">
                                        <h3
                                            class="fw-bold fs-5 text-darkParrot"
                                        >
                                            {{
                                                dynamicText(content,'home_facilities_airport_sub_head_3','Car rental')
                                            }}
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="desc py-2 h-30 col-12 overflow-hidden"
                                >
                                    <div class="col-12">
                                        <p
                                            v-html="dynamicText(content,'home_facilities_airport_sub_para_3','If you want to rent a car at Dulles airport, you will find the car rental companies in the rental car lot, connected by Free shuttle buses.')
                                            "
                                            class="overflow-hidden white-space-nowrap text-overflow-ellipsis"
                                        ></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="c1-a4 desc2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-3 px-3"
                        >
                            <div
                                class="border-radius-10 bg-white hover-zoom h-100 shadow cursor-pointer p-4 d-flex flex-column justify-content-center align-items-center text-center border-b-t-20-purple"
                            >
                                <div class="img">
                                    <div class="col-12">
                                        <img
                                            class="h-150 w-150 object-fit-cover rounded-circle"
                                            :src="services"
                                            alt=""
                                            srcset=""
                                        />
                                    </div>
                                </div>
                                <div class="head py-2">
                                    <div class="col-12">
                                        <h3 class="fw-bold fs-5 text-purple">
                                            {{
                                                dynamicText(content,'home_facilities_airport_sub_head_4','Services and amenities')
                                            }}
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="desc py-2 h-30 col-12 overflow-hidden"
                                >
                                    <div class="col-12">
                                        <p
                                            v-html="
                                                dynamicText(content,'home_facilities_airport_sub_para_4','The airport has free Wi-fi access, currency exchange, Concierge service, charging stations for electronic devices as well as electric vehicles, luggage carts, chapel, Nursing Rooms, Pet relief areas, Kid’s play zone, and smoking area.')
                                            "
                                            class="overflow-hidden white-space-nowrap text-overflow-ellipsis"
                                        ></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="c1-a5 desc2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 my-3 px-3"
                        >
                            <div
                                class="border-radius-10 bg-white hover-zoom h-100 shadow cursor-pointer p-4 d-flex flex-column justify-content-center align-items-center text-center border-b-t-20-orange"
                            >
                                <div class="img">
                                    <div class="col-12">
                                        <img
                                            class="h-150 w-150 object-fit-cover rounded-circle"
                                            :src="food"
                                            alt=""
                                            srcset=""
                                        />
                                    </div>
                                </div>
                                <div class="head py-2">
                                    <div class="col-12">
                                        <h3 class="fw-bold fs-5 text-orange">
                                            {{
                                                dynamicText(content,'home_facilities_airport_sub_head_5','Food and Shopping')
                                            }}
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="desc py-2 h-30 col-12 overflow-hidden"
                                >
                                    <div class="col-12">
                                        <p
                                            v-html="
                                            dynamicText(content,'home_facilities_airport_sub_para_5','It has a wide gastronomic variety with restaurants, cafes and bars (some available 24 hours a day), as well as a wide variety of duty-free items, including clothing and fashion, cosmetics, electronics and telephones, alcoholic beverages, sweets, etc. You can find 24-hour convenience stores with regional products, books, and newspapers.')
                                            "
                                            class="overflow-hidden white-space-nowrap text-overflow-ellipsis"
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
</template>

<script setup>
const taxiCar = "/images/taxiCar.jpg";
const bus = "/images/bus.jpg";
const carRental = "/images/carRental.jpg";
const services = "/images/services.webp";
const food = "/images/food.jpg";
import { dynamicText } from "../helperFunctions.js";
import { defineProps } from "vue";
const props = defineProps({
    facilities: {
        required: true,
    },
    content: {
        required: true,
    },
});
</script>
