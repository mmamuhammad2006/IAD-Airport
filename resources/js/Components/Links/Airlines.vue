<template>
    <main>
        <div class="container-fluid bg-lightGray py-5 px-sm-0 px-3">
            <div class="container m-auto pt-lg-0 pt-5">
                <div class="col-12 pt-lg-0 pt-5">
                    <loading v-if="data.loading" />
                    <div
                        v-else
                        class="parkings">
                        <div class="col-12 row">
                            <div v-if="data.error">
                                <h3 class="fw-bold">
                                    Airlines cannot loaded successfully. Please
                                    check Your internet connection and try again
                                </h3>
                            </div>

                            <div
                                v-for="airline in data.Airlines"
                                class="parking-cont col-lg-4 col-md-6 col-12 rounded-3 py-3 d-flex justify-content-center"
                            >
                                <div
                                    class="shadow p-4 parking col-md-11 col-12 bg-darkParrot rounded-4 hover-zoom"
                                >
                                    <div class="img pb-3">
                                        <div
                                            class="col-12 d-flex justify-content-center"
                                        >
                                            <img
                                                class="img-fluid h-70"
                                                :src="airline.img"
                                                alt=""
                                                srcset=""
                                            />
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="col-12">
                                            <h5
                                                class="fw-bold text-white text-center pb-2"
                                            >
                                                {{ airline.name }}
                                            </h5>
                                            <p
                                                class="fw-bold text-white text-center"
                                            >
                                                iata: {{ airline.iata }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
import { onMounted, reactive } from "vue";
import axios from "axios";
import Loading from "../Loading.vue";
const data = reactive({
    Airlines: [],
    url: [],
    error: false,
    loading: false,
});
const fetchAirlines = async () => {
    try {
        data.loading = true;
        const response = await axios.get("/api/airlines");
        data.Airlines = response.data;
        data.loading = false;
        console.log(data.Airlines);
    } catch (error) {
        data.error = true;
        data.loading = false;
        console.error(
            "airlines cannot load get this error",
            error["response"]["data"]["message"]
        );
    }
};
onMounted(() => {
    fetchAirlines();
    console.log("mounted");
});
</script>
