<template>
    <!-- first sec part 1 -->
    <div
        class="search-sec rounded-5 position-relative container-fluid py-4 bg-darkParrot"
        id="search-sec"
    >
    <div class="iad-gif py-5 col-lg-8 col-12 px-sm-0 px-3 m-auto">
    <a href="https://liveryaccess.com/" target="_blank" class="col-12">
        <img class="col-12 rounded" :src="'images/iad-gif.gif'" alt="" srcset="">
    </a>
</div>
        <div class="container m-auto px-sm-0 px-3">
            <div class="col-12">
                <div class="d-flex col-12 d-flex flex-lg-row flex-column align-items-center">
                    <div class="col-lg-7 col-md-8 col-12 py-2 pb-lg-0 pb-5">
                        <div class="heading pb-4">
                            <div class="col-12 text-center">
                                <h3 class="fs-2 fw-bold text-white">
                                    Search your flight
                                </h3>
                            </div>
                        </div>
                        <form
                            method="POST"
                            @submit.prevent="submit"
                            class="col-lg-11 col-12 row d-flex justify-content-between"
                        >
                            <!-- <div
                                        class="m-auto pe-lg-0 pe-md-0 pe-sm-0 pe-0 py-xxl-0 py-xl-0 py-lg-0 py-md-1 py-sm-1 py-1 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-10">
                                        <div class="">
                                            <input class="col-12 py-2 px-3 rounded border-0" type="text"
                                               id="" placeholder="Airline">
                                        </div>
                                    </div> -->
                            <div
                                class="m-auto pe-lg-3 pe-0 py-xxl-0 py-xl-0 py-lg-0 py-md-1 py-sm-1 py-1 col-xl-9 col-lg-8 col-12"
                            >
                                <div class="bg-white rounded w-100">
                                    <input
                                        class="col-12 py-2 px-3 rounded border-0"
                                        type="text"
                                        v-model="data.flight.flight_iata"
                                        name="flight_iata"
                                        id=""
                                        placeholder="Flight number"
                                    />
                                </div>
                            </div>
                            <div
                                class="m-auto btn-cont col-xl-3 col-lg-4 col-12 py-xxl-0 py-xl-0 py-lg-0 py-md-1 py-sm-1 py-1"
                            >
                                <button
                                    type="submit"
                                    class="pe-3 col-12 btn col text-white bg-orange fw-bold py-2 px-3 border-0 hover-zoom"
                                >
                                    Search Flight
                                </button>
                            </div>
                        </form>
                        <div class="pt-5" v-if="data.nullFlightMsg">
                            <div class="col-11">
                                <h3 class="m-0 fw-bold text-center">
                                    {{ data.nullFlightMsg }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-8 col-12">
                        <div class="col-12 h-100 w-100">
                            <iframe
                                :src="mapUrl"
                                frameborder="0"
                                class="map w-100"
                                style="height: 300px"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- flights results -->
    <div v-if="data.flightDetails['flight_iata']" class="container-fluid py-5">
        <div class="container m-auto py-5">
            <div
                v-if="data.flightDetails['flight_iata']"
                class="table-responsive"
            >
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th class="p-2" scope="col">Airline</th>
                            <th class="p-2" scope="col">Flight</th>
                            <th class="p-2" scope="col">Arrival</th>
                            <th class="p-2" scope="col">Departure</th>
                            <th class="p-2" scope="col">Arrival time</th>
                            <th class="p-2" scope="col">Departure time</th>
                            <th class="p-2" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-if="data.flightDetails" class="">
                            <td class="p-2" scope="row">
                                {{ data.flightDetails["airline_iata"] }}
                            </td>
                            <td class="p-2">
                                {{ data.flightDetails["flight_iata"] }}
                            </td>
                            <td class="p-2">
                                {{ data.flightDetails["arrival"] }}
                            </td>
                            <td class="p-2">
                                {{ data.flightDetails["departure"] }}
                            </td>
                            <td class="p-2">
                                {{ data.flightDetails["arr_time"] }}
                            </td>
                            <td class="p-2">
                                {{ data.flightDetails["dep_time"] }}
                            </td>
                            <td class="p-2">
                                {{ data.flightDetails["status"] }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from "axios";
import { ref, defineProps, onMounted } from "vue";
import { reactive } from "vue";
const props = defineProps({
    mapUrl: {
        type: String,
        required: true,
    },
});

const data = reactive({
    flight: {},
    flightDetails: {},
    nullFlightMsg: "",
});

const submit = () => {
    console.log(data.flight.flight_iata);
    const iata = data.flight.flight_iata;
    axios
        .post(`/api/flight/${iata}`)
        .then((response) => {
            data.flightDetails = response["data"];
            if (data.flightDetails["flight_iata"]) {
                data.nullFlightMsg = "";
            } else {
                data.nullFlightMsg = response["data"];
            }
            console.log(data.flightDetails);
        })
        .catch((error) =>
            console.error(
                "Fetching flight  with flight iata using search bar getting error:- " +
                    error
            )
        );
};

// const mapUrl = ref("{{ url('/map') }}")
// const map = new airlabs.Map('map', {
//   center: [51.505, -0.09], // Set the initial center
//   zoom: 13, // Set the initial zoom
// });

onMounted(() => {
    console.log(data.flightDetails);
});
</script>
