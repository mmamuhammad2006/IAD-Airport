<template>
    <main>
    <div class="parent" v-if="data.flightArrival">
        <div class="container-fluid pt-5">
            <div class="container pt-5 m-auto px-sm-0 px-3">
                <div class="main-head pt-5 mt-3">
                    <div class="col-12 text-center">
                        <h1 class="fw-bold fs-1 text-darkParrot">Arrivals</h1>
                    </div>
                </div>
                <div class="col-12">

                    <div class="head-para">
                        <div class="col-12">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-3 fw-bold text-darkParrot py-1">Dulles airport arrivals</h3>
                                    <h5 class="fs-5 fw-bold text-darkParrot py-1">Flight status of today's arrivals at Dulles airport</h5>
                                </div>
                            </div>
                            <div class="paras py-2">
                                <div class="col-12">
                                    <div class="para1 py-1">
                                        <div class="col-12">
                                            <p>Check for possible delays or cancellations.</p>
                                        </div>
                                    </div>
                                    <div class="para2 py-1">
                                        <div class="col-12">
                                            <p><span class="fw-bold">Today:</span> {{new Date().toLocaleDateString("en-US", {
                                                    weekday: "short",
                                                    day: "numeric",
                                                    month: "short",
                                                    year: "numeric",
                                                })}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="table py-5">
                        <div class="col-12 overflow-auto">
                            <table class="table table-hover border-parrot">
                                <thead class="py-2 bg-darkParrot">
                                    <tr>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" >Flight</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" >Carier</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" >Origin</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" >Scheduled</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" >Arrival</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" >Estimated</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" >Status</th>
                                    </tr>
                                </thead>
                                <tbody v-if="data.arrivals">
                                    <tr v-for="arrival in data.arrivals" :class="{'d-none': arrival['flight_iata'] === null || arrival['departure'] === null || arrival['dep_time'] === null || arrival['arrival'] === null || arrival['arr_time'] === null || arrival['status'] === null}">
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="arrival['flight_iata']" scope="row">{{ arrival['flight_iata'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" scope="row"><img class="h-30 w-30 rounded-circle" :src="carrier" alt=""></td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="arrival['departure']" scope="row">{{ arrival['departure'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="arrival['dep_time']" scope="row">{{ arrival['dep_time'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="arrival['arrival']" scope="row">{{ arrival['arrival'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="arrival['arr_time']" scope="row">{{ arrival['arr_time'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td :class="{'text-success': arrival.status === 'active'
                                        ,'text-danger':arrival.status === 'landed'}"
                                         class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold" v-if="arrival['status']" scope="row">{{ arrival['status'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid py-5">
            <div class="container m-auto px-sm-0 px-3">
                <div class="main-head pb-5">
                    <div class="col-12 text-center">
                        <h3 class="fs-3 fw-bold text-darkParrot">Recommendations after arriving at Dulles airport (IAD)
                        </h3>
                    </div>
                </div>
                <div class="col-12 d-flex flex-wrap">
                    <div class="col-md-6 col-12 py-2">
                        <div class="head-para col-md-10 col-12">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">1. Carry on luggage</h5>
                                    </div>
                                </div>
                                <div class="para pt-1">
                                    <div class="col-12">
                                        <p>Don't forget your aircraft belongings.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 py-2">
                        <div class="head-para col-md-10 col-12">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">2. Connecting Flights</h5>
                                    </div>
                                </div>
                                <div class="para pt-1">
                                    <div class="col-12">
                                        <p>In case you expect a connecting flight and arrive in the early hours, the airport has  24-hour cafe options. If your are coming from another country and the connecting flight is domestic, you must collect your checked baggage (in case you have checked baggage) and do migrations. Other wise if your final destination is outside the United States, you don't need to do so.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-12 py-2">
                        <div class="head-para col-md-10 col-12">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">3. Checked baggage</h5>
                                    </div>
                                </div>
                                <div class="para pt-1">
                                    <div class="col-12">
                                        <p>If Washington Dulles airport is your final destination and you have checked luggage, go to the baggage claim area and look for the carousel that corresponds to your flight. In some cases there may be two flights sharing the same carousel. If your luggage is missing, go to your airline counter or ask for help to the airport staff.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 py-2">
                        <div class="head-para col-md-10 col-12">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">4. Migrations</h5>
                                    </div>
                                </div>
                                <div class="links pt-1">
                                    <div class="col-12">
                                        <p>Follow the signals to pass migration control. If you are a foreigner, depending on your nationality, you will need to present a passport and visa (as applicable) and hotel reservation or address and phone number and name of the person where you will stay. Get ready for some questions that may be asked (they do not always ask) and just answer what they ask without giving additional explanations that may compromise you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-12 py-2">
                        <div class="head-para col-md-10 col-12">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">5. FAQs</h5>
                                    </div>
                                </div>
                                <div class="links pt-1">
                                    <div class="col-12">
                                        <p>For other inquiries, review the answers to the <a href="#">Frequently Asked Questions</a> made by passengers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 py-2">
                        <div class="head-para col-md-10 col-12">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">6. Arrivals hall</h5>
                                    </div>
                                </div>
                                <div class="links pt-1">
                                    <div class="col-12">
                                        <p>When you get to the public area, if a private driver is waiting for you, it will surely be with some sign and your name. If you want to search for a taxi, just look for the authorized ones and not the ones that some stranger can offer you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="main-head">
                            <div class="col-12">
                                <h5 class="fs-5 fw-bold">Meeting points:</h5>
                            </div>
                        </div>
                        <div class="head-para pt-3">

                            <div class="col-12 py-2">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">7. Inside the Terminal</h5>
                                    </div>
                                </div>
                                <div class="para pt-2">
                                    <div class="col-12">
                                        <p>Dulles International provides a waiting area immediately outside the International Arrivals Building, next to Baggage Claim 15. Passengers who go through U.S. Customs at the flight's country of origin will arrive through doors located between Baggage Claims 4 and 12, the same exit point as domestic flights.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 py-2">
                                <div class="head">
                                    <div class="col-12">
                                        <h5 class="fs-5 fw-bold">8. Pick-up area</h5>
                                    </div>
                                </div>
                                <div class="para pt-2">
                                    <div class="col-12">
                                        <p>Drivers and passengers should agree on meeting at a specific Arrival Door, numbered 1-7, on the Arrivals Level. Drivers approaching the Terminal should follow the airport signs for Arrivals on the roadway. The Arrivals Level is for active loading and unloading of passengers only; waiting is not permitted. A Cell Phone Lot is available for drivers to temporarily wait until they receive confirmation that the passenger has arrived and is waiting at the agreed-upon Arrival Door.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="parent" v-if="data.flightDeparture">
        <div class="container-fluid pb-5">
            <div class="container py-5 m-auto px-sm-0 px-3">
                <div class="main-head  pb-3 pt-5 mt-3">
                    <div class="col-12 text-center">
                        <h1 class="fw-bold fs-1 text-darkParrot">Departures</h1>
                    </div>
                </div>
                <div class="col-12">

                    <div class="head-para">
                        <div class="col-12">
                            <div class="head py-2">
                                <div class="col-12">
                                    <h3 class="fs-3 fw-bold text-darkParrot py-1">Washington Dulles international airport (IAD) today´s departures
                                    </h3>
                                    <h5 class="fs-5 fw-bold text-darkParrot py-1">Today flight status of the departures from Dulles airport.
                                    </h5>
                                </div>
                            </div>
                            <div class="paras py-2">
                                <div class="col-12">
                                    <div class="para1 py-1">
                                        <div class="col-12">
                                            <p>Check your flight if it's scheduled, or for possible delays or cancellations.

                                            </p>
                                        </div>
                                    </div>
                                    <div class="para2 py-1">
                                        <div class="col-12">
                                            <p><span class="fw-bold">Today Date:</span> July 10th, 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="table py-5">
                        <div class="col-12 overflow-auto">
                            <table class="table table-hover border-parrot">
                                <thead class="py-2 bg-darkParrot">
                                    <tr>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" scope="col">Flight</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" scope="col">Carier</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" scope="col">Origin</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" scope="col">Scheduled</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" scope="col">Arrival</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" scope="col">Estimated</th>
                                        <th class="p-2 text-center vertical-align-middle text-white bg-darkParrot" scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody v-if="data.departures">
                                    <tr v-for="derpart in data.departures" :class="{'d-none': derpart['flight_iata'] === null || derpart['departure'] === null || derpart['dep_time'] === null || derpart['arrival'] === null || derpart['arr_time'] === null || derpart['status'] === null}">
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="derpart['flight_iata']" scope="row">{{ derpart['flight_iata'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" scope="row"><img class="h-30 w-30 rounded-circle" :src="carrier" alt=""></td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="derpart['departure']" scope="row">{{ derpart['departure'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="derpart['dep_time']" scope="row">{{ derpart['dep_time'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="derpart['arrival']" scope="row">{{ derpart['arrival'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td class="p-2 vertical-align-middle text-center border-b-2-parrot" v-if="derpart['arr_time']" scope="row">{{ derpart['arr_time'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                        <td :class="{'text-success': derpart.status === 'scheduled', 'text-danger': derpart.status === 'active'}"
                                         class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold" v-if="derpart['status']" scope="row">{{ derpart['status'] }}</td>
                                        <td v-else class="p-2 vertical-align-middle text-center border-b-2-parrot fw-bold text-danger" scope="row">Null</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
</template>

<script setup>
const carrier = '/images/unitedAirlines.png'

import axios from 'axios';
import { onMounted, reactive, defineProps} from 'vue';
const prop = defineProps({
    flight : {
        type: String,
        required: true
    }
});
const data = reactive({
    departures: [],
    arrivals: [],
    flightArrival: false,
    flightDeparture: false,
});

const fetchArrivals = () => {
    axios.get('/api/arrivals').then(response => {
        data.arrivals = response.data;


    console.log(data.arrivals);

    });
}

const fetchDepartures = () => {
    axios.get('/api/departures').then(response => {
        data.departures = response.data;

    });
}

onMounted(() =>{
    console.log('FLights status',prop.flight);
    if(prop.flight === 'departures'){
        fetchDepartures();
        data.flightDeparture = true;

    }else if(prop.flight === 'arrivals'){
        fetchArrivals();
        data.flightArrival = true
    }
    // Fetch Departures data from API
});
</script>
