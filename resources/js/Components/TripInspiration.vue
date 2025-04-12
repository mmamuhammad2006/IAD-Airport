<template>
    <div
        class="container-fluid bg-lightGray px-xxl-0 px-xl-0 px-lg-0 px-md-0 px-sm-0 px-3"
    >
        <div class="container py-5 p-0 m-auto">
            <div class="col-12 p-0">
                <div class="head p-0 pb-3">
                    <div class="col-12 p-0 text-center">
                        <h3 class="m-0 py-3 fw-bold fs-2 text-darkParrot">
                            {{ inspired_trip }}
                        </h3>
                    </div>
                </div>
                <!-- img section -->
                <div
                    class="col-12 d-flex justify-content-between align-items-center"
                >
                    <div
                        onclick="scrollImages('left')"
                        class="scroll d-flex align-items-center rounded-circle bg-darkParrot left-scroll col-1"
                    >
                        <div class="col-12 text-center">
                            <img :src="arrowLeft" alt="" srcset="" />
                        </div>
                    </div>
                    <div class="images-cont col-10 py-3 row d-flex">
                        <div
                            class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center"
                            v-for="resturant in data.Resturants"
                        >
                            <a
                                :href="`/hotels`"
                                class="col-11 hover-zoom text-decoration-none text-dark"
                            >
                                <img
                                    v-if="resturant.bio_image[0]"
                                    class="col-12 hotel-img rounded-4 img-fluid object-fit-cover"
                                    :src="resturant.bio_image[0]"
                                    alt=""
                                    srcset=""
                                />
                                <img
                                    v-else
                                    class="col-12 hotel-img rounded-4 img-fluid object-fit-cover"
                                    :src="defaultImg"
                                    alt=""
                                    srcset=""
                                />
                                <div class="head p-0 py-2">
                                    <div class="col-12 p-0">
                                        <h3
                                            class="m-0 p-0 fw-bold fs-5 overflow-hidden white-space-nowrap text-overflow-ellipsis"
                                        >
                                            {{ resturant.name }}
                                        </h3>
                                    </div>
                                </div>
                                <div class="price p-0">
                                    <div class="col-12 p-0">
                                        <p
                                            class="m-0 p-0 fw-bold line-hover purple-line-hover d-inline-block"
                                        >
                                            Distance:
                                            <span class="text-purple">{{
                                                resturant.distance_text
                                            }}</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div
                        onclick="scrollImages('right')"
                        class="scroll d-flex align-items-center rounded-circle bg-darkParrot right-scroll col-1"
                    >
                        <div class="col-12 text-center">
                            <img :src="arrowRight" alt="" srcset="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const arrowLeft = "/images/arrow-left.svg";
const arrowRight = "/images/arrow-right.svg";
const place1 = "/images/place1.jpg";
const place2 = "/images/place2.jpg";
const place3 = "/images/place3.jpg";
const place4 = "/images/place4.jpg";
const place5 = "/images/place5.jpg";
const place6 = "/images/place6.jpg";
import { defineProps, reactive, onMounted } from "vue";
const props = defineProps({
    inspired_trip: {
        required: true,
    },
    categories: {
        type: Array,
        required: true,
    },
});

const data = reactive({
    Resturants: [],
});
const fetchResturants = async () => {
    const responses = await Promise.all(
        props.categories.map((category) => axios.get(`/api/places/${category}`))
    );
    data.Resturants = responses.reduce((acc, response) => {
        const restaurants = acc.concat(response.data);
        return restaurants.slice(0, 6);
    }, []);
};

onMounted(() => {
    fetchResturants();
});
</script>
