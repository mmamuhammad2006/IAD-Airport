<template>
    <div class="container-fluid py-5 bg-lightGray bg-img-fixed">
        <div class="container m-auto pb-5">
            <div class="col-12">
                <div class="head py-5">
                    <div class="col-12 text-center">
                        <h3 class="fw-bold fs-2 text-orange position-relative">
                            {{ dynamicText(content,'home_benefits_iad_head_1','Benefits of IAD') }}
                        </h3>
                    </div>
                </div>
                <div class="imges-descs row d-flex justify-content-center">
                    <div
                        class="c2-a1 my-2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center"
                    >
                        <div
                            class="border-radius-10 col-11 hover-zoom bg-white cursor-pointer card-div shadow border-b-t-20-parrot d-flex align-items-center justify-content-center px-4"
                        >
                            <div
                                class="desc-img d-flex align-items-center flex-column"
                            >
                                <div class="img h-150 w-150">
                                    <img
                                        :src="airplanes"
                                        class="img-fluid h-100 w-100 object-fit-cover rounded-circle"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <div class="desc text-center">
                                    <div class="col-12 pt-2">
                                        <div class="head py-1">
                                            <div class="col-12">
                                                <h3
                                                    class="fw-bold fs-5 text-darkParrot"
                                                >
                                                    <!-- {{ benefits.one.title }} -->
                                                    {{
                                                        dynamicText(content,'home_benefits_iad_sub_head_1','Consistency is key')
                                                    }}
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="para py-1">
                                            <div class="col-12">
                                                <p
                                                    v-html="dynamicText(content,'home_benefits_iad_sub_para_1','We operate a uniform fleet: what you book is what you get')
                                                    "
                                                ></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="c2-a2 my-2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center"
                    >
                        <div
                            class="border-radius-10 col-11 hover-zoom bg-white cursor-pointer card-div shadow border-b-t-20-orange d-flex align-items-center justify-content-center px-4"
                        >
                            <div
                                class="desc-img d-flex align-items-center flex-column"
                            >
                                <div class="img h-150 w-150">
                                    <img
                                        :src="seats"
                                        class="img-fluid h-100 w-100 object-fit-cover rounded-circle"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <div class="desc text-center">
                                    <div class="col-12 pt-2">
                                        <div class="head py-1">
                                            <div class="col-12">
                                                <h3
                                                    class="fw-bold fs-5 text-orange"
                                                >
                                                    <!-- {{ benefits.two.title }} -->
                                                    {{
                                                        dynamicText(content,'home_benefits_iad_sub_head_2','Your home in the sky')
                                                    }}
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="para py-1">
                                            <div class="col-12">
                                                <p
                                                    v-html="dynamicText(content,'home_benefits_iad_sub_para_2','Quilted Italian leather, hardwood cabinetry, spacious cabin')
                                                    "
                                                ></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="c2-a3 my-2 col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 d-flex justify-content-center"
                    >
                        <div
                            class="border-radius-10 col-11 hover-zoom bg-white cursor-pointer card-div shadow border-b-t-20-purple d-flex align-items-center justify-content-center px-4"
                        >
                            <div
                                class="desc-img d-flex align-items-center flex-column"
                            >
                                <div class="img h-150 w-150">
                                    <img
                                        :src="seats"
                                        class="img-fluid h-100 w-100 object-fit-cover rounded-circle"
                                        srcset=""
                                    />
                                </div>
                                <div class="desc text-center">
                                    <div class="col-12 pt-2">
                                        <div class="head py-1">
                                            <div class="col-12">
                                                <h3
                                                    class="fw-bold fs-5 text-purple"
                                                >
                                                    {{
                                                        dynamicText(content,'home_benefits_iad_sub_head_3','Easy access')
                                                    }}
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="para py-1">
                                            <div class="col-12">
                                                <p
                                                    v-html="dynamicText(content,'home_benefits_iad_sub_para_3','You can land anywhere and everywhere in the world')
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
    </div>
</template>

<script setup>
const airplanes = "/images/airplanes.jpg";
const seats = "/images/seats.jpg";
const skyAirplane = "/images/skyAirplane.jpg";
import { dynamicText } from "../helperFunctions.js";
import { defineProps } from "vue";
const props = defineProps({
    benefits: {
        required: true,
    },
    content: {
        required: true,
    },
});
</script>
