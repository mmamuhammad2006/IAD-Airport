<template>
    <main>
        <div class="container-fluid py-5 bg-lightGray">
            <div class="container m-auto">
                <loading v-if="data.loading"/>
                <div
                    v-else
                    class="col-12 row pt-3 pt-lg-0">
                    <div
                        class="col-lg-8 mt-lg-0 mt-5 pt-5 col-12 bg-white row p-sm-5 p-3">
                        <div class="desc-img row">
                            <div class="desc col-md-6 col-12 pe-4">
                                <div class="head py-2">
                                    <div class="col-12">
                                        <h4
                                            v-if="data.PlacesData && data.PlacesData.name"
                                            class="text-darkParrot fw-bold fs-3">
                                            {{ data.PlacesData.name }}
                                        </h4>
                                        <h4
                                            v-else
                                            class="text-darkParrot fw-bold">
                                            Place name
                                        </h4>
                                    </div>
                                </div>
                                <div class="stars py-2">
                                    <div class="col-12 text-white">
                                        <span class="fa fa-star checked text-purple"/>
                                        <span class="fa fa-star checked text-purple"/>
                                        <span class="fa fa-star checked text-purple"/>
                                        <span class="fa fa-star checked text-purple"/>
                                        <span class="fa fa-star checked text-purple"/>
                                    </div>
                                </div>
                                <div class="para">
                                    <div class="col-12">
                                        <p v-if="data.Airport" class="py-1">
                                            <span class="fw-bold">Near</span>:
                                            {{ data.Airport.name }}
                                        </p>
                                        <p v-else class="py-1">
                                            -
                                        </p>
                                        <p
                                            v-if="data.OpeningHours"
                                            class="py-1">
                                            <span class="fw-bold">Hours</span>:
                                            {{ data.OpeningHours }}
                                        </p>
                                        <p v-else class="py-1">
                                            <span class="fw-bold">Hours</span>:
                                            -
                                        </p>
                                    </div>
                                </div>
                                <div class="para pt-3">
                                    <div class="col-12">
                                        <p v-if="data.PlacesData.google_formatted_address">
                                            {{
                                                data.PlacesData.google_formatted_address
                                            }}
                                        </p>
                                        <p v-else>
                                            -
                                        </p>
                                    </div>
                                </div>
                                <div class="w-100 pb-5 py-2">
                                    <div
                                        class="btn rounded-5 border-2 border-orange text-orange py-2 px-5 m-auto hover-zoom bg-orange-hover fw-bold"
                                    >
                                        Tweet
                                    </div>
                                </div>
                            </div>
                            <div class="img-cont col-md-6 col-12 pb-5">
                                <div
                                    v-if="
                                        data.Img && data.Img.bio_current_image
                                    "
                                    class="col-12"
                                >
                                    <img
                                        class="img-fluid rounded-4 hover-zoom h-300 w-100 object-fit-cover"
                                        :src="data.Img.bio_current_image"
                                        alt=""
                                        srcset=""
                                    />
                                </div>
                                <div v-else class="col-12">
                                    <img
                                        class="img-fluid rounded-4 hover-zoom h-300 w-100 object-fit-cover"
                                        :src="data.defaultImg"
                                        alt="Default image"
                                        srcset=""
                                    />
                                </div>
                            </div>
                        </div>

                        <!-- reviews section -->
                        <div class="reviews-head">
                            <div class="col-12">
                                <div class="head">
                                    <div class="col-12 py-4">
                                        <h4 class="fw-bold fs-3">Reviews</h4>
                                    </div>
                                </div>
                                <div
                                    v-if="
                                        data.PlacesData &&
                                        data.PlacesData.bio_reviews_data &&
                                        data.PlacesData.bio_reviews_data
                                            .length > 0
                                    "
                                    class="reviews"
                                >
                                    <div
                                        v-for="(reviewGroup, groupIndex) in data.PlacesData.bio_reviews_data"
                                        :key="groupIndex"
                                        class="col-12"
                                    >
                                        <div
                                            v-for="(
                                                review, index
                                            ) in reviewGroup"
                                            :key="index"
                                            class="review py-2"
                                        >
                                            <div
                                                class="col-12 bg-white shadow rounded-4 p-4 d-flex flex-lg-row flex-column flex-sm-column flex-md-column"
                                            >
                                                <div
                                                    class="img-cont py-1 py-lg-0"
                                                >
                                                    <div
                                                        class="col-12 h-100px w-100px"
                                                    >
                                                        <img
                                                            class="img-fluid h-100 w-100 rounded-circle object-fit-cover"
                                                            :src="
                                                                review.profile_photo_url
                                                            "
                                                            alt="deafult "
                                                            srcset=""
                                                        />
                                                    </div>
                                                </div>
                                                <div
                                                    class="head-rating-para ps-0 ps-lg-4"
                                                >
                                                    <div class="head">
                                                        <div
                                                            class="col-12 py-1 py-lg-0"
                                                        >
                                                            <h3 class="fs-4">
                                                                {{
                                                                    review.author_name
                                                                }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ratings py-1 py-lg-0"
                                                    >
                                                        <div class="col-12">
                                                            <span
                                                                class="fa fa-star checked text-purple"
                                                            ></span>
                                                            <span
                                                                class="fa fa-star checked text-purple"
                                                            ></span>
                                                            <span
                                                                class="fa fa-star checked text-purple"
                                                            ></span>
                                                            <span
                                                                class="fa fa-star checked text-purple"
                                                            ></span>
                                                            <span
                                                                class="fa fa-star checked text-purple"
                                                            ></span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="desc py-1 py-lg-0"
                                                    >
                                                        <div class="col-12">
                                                            <p
                                                                v-if="
                                                                    review.text
                                                                "
                                                            >
                                                                {{
                                                                    review.text
                                                                }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    v-else
                                    class="no-reviews col-12 bg-white shadow rounded-4 p-4">
                                    No reviews yet.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- side bar section -->
                    <div
                        class="col-lg-4 col-12 bg-white d-flex justify-content-center"
                    >
                        <div class="col-11 py-3">
                            <div class="map py-2">
                                <div class="img-top-darkParrot h-70"></div>
                                <div
                                    class="col-12 bg-darkParrot text-white px-3"
                                >
                                    <div class="head py-2">
                                        <div class="col-12">
                                            <h4 class="fw-bold fs-4 pb-3">
                                                {{ data.PlacesData.name }}
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="img-cont py-2">
                                        <div class="col-12">
                                            <iframe
                                                :src="
                                                    'https://maps.google.com/maps?q=' +
                                                    data.PlacesData.name +
                                                    ',' +
                                                    data.PlacesData
                                                        .google_formatted_address +
                                                    '&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=&amp;output=embed'
                                                "
                                            ></iframe>
                                        </div>
                                    </div>
                                    <div class="btn-cont py-2">
                                        <div class="col-12">
                                            <a
                                                :href="
                                                    'http://maps.apple.com/?q=' +
                                                    data.PlacesData.name +
                                                    ',' +
                                                    data.PlacesData
                                                        .google_formatted_address
                                                "
                                                class="px-3 py-2 rounded-5 bg-orange border-0 text-white fs-14 text-decoration-none"
                                                target="blank"
                                                >Apple Map</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="img-bottom-darkParrot h-70"></div>
                            </div>
                            <div class="more-info py-2">
                                <div class="img-top-purple h-70"></div>
                                <div class="col-12 bg-purple text-white px-3">
                                    <div class="head">
                                        <div class="col-12">
                                            <h4 class="fw-bold fs-4 pb-3">
                                                More info
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <div class="col-12">
                                            <p
                                                v-if="data.PlacesData.distance_text"
                                                class="fs-14"
                                            >
                                                Distance:
                                                {{
                                                    data.PlacesData
                                                        .distance_text
                                                }}
                                            </p>
                                            <p v-else class="fs-14">
                                                Distance: -
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-bottom-purple h-70"></div>
                            </div>
                            <div class="nearby-hotels py-2">
                                <div class="img-top-orange h-70"></div>
                                <div class="col-12 bg-orange text-white px-3">
                                    <div class="head">
                                        <div class="col-12">
                                            <h4 class="fw-bold fs-4 pb-3">
                                                Nearby {{category}}
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <div
                                            v-for="(nearByPlace, nearByKey) in data.NearByPlaces" :key="nearByKey"
                                            class="col-12"
                                        >
                                            <a class="fs-14 link-warning text-white link-underline-opacity-0 link-underline-opacity-100-hover" :href="`/nearby/${category}/${nearByKey}`">
                                                {{ nearByPlace }}
                                            </a>
                                        </div>
<!--                                        <div v-else class="fw-bold">-->
<!--                                            Not available-->
<!--                                        </div>-->

                                    </div>
                                </div>
                                <div class="img-bottom-orange h-70"></div>
                            </div>
                            <div class="hours py-2">
                                <div class="img-top-parrot h-70"></div>
                                <div class="col-12 bg-parrot text-white p-3">
                                    <div class="head">
                                        <div class="col-12">
                                            <h4 class="fw-bold fs-4 pb-3">
                                                Hours
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="desc">
                                        <div
                                            v-if="
                                                data.PlacesData &&
                                                data.PlacesData.bio_week_days
                                            "
                                            class="col-12"
                                        >
                                            <table
                                                v-for="(weekDay, index) in data
                                                    .PlacesData.bio_week_days"
                                                :key="index"
                                                class="table"
                                            >
                                                <tbody
                                                    v-for="(
                                                        officeDay, officeIndex
                                                    ) in weekDay"
                                                    :key="officeIndex"
                                                >
                                                    <tr>
                                                        <td
                                                            class="bg-transparent text-white fs-14"
                                                        >
                                                            {{ officeDay }}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div v-else class="fw-bold">
                                            -
                                        </div>
                                    </div>
                                </div>
                                <div class="img-bottom-parrot h-70"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
import { onMounted, reactive, defineProps, computed } from "vue";
import axios from "axios";
import Loading from "../Loading.vue";
const props = defineProps({
    place: {
        type: String,
        required: true,
    },
    category: {
        type: String,
        required: true,
    },
    loungesDetails: {
        type: Boolean,
    },
});
const data = reactive({
    PlacesData: [],
    Airport: null,
    Img: null,
    OpeningHours: [],
    defaultImg: null,
    NearByPlaces: [],
    loungesDetails: false,
    loading: false,
});

const fetchData = async () => {
        console.log("Not loungesDetails");
        try {
            data.loading = true;
            const response = await axios.get(
                `/api/place/Data/${props.place}/${props.category}`
            );
            console.log(response.data.place);
            data.PlacesData = response.data.place;
            // data.Img = response1.data;
            const OpeningHours = data.PlacesData?.bio_week_days ?  data.PlacesData.bio_week_days[0][1]: '';
            const time = OpeningHours ? OpeningHours?.split(": ")[1]: '';
            data.OpeningHours = time;
            data.NearByPlaces = data.PlacesData.bio_near_by_places;
            data.Airport = response.data.airport;
            console.log(data.Airport);
            data.loading = false;
        } catch (error) {
            console.log('yup')
            console.error(error);
        }
};
const defaultImg = () => {
    switch (props.category) {
        case "lounges":
            data.defaultImg = "/images/default-resturant.jpg";
            break;
        case "hotels":
            data.defaultImg = "/images/default-hotel.avif";
            break;
        case "parking":
            data.defaultImg = "/images/default-parking.jfif";
            break;
        case "restaurants":
            data.defaultImg = "/images/default-resturant.jpg";
            break;
        default:
            data.defaultImg = "/images/default-transportation.png";
            break;
    }
};
onMounted(() => {
    if (props.loungesDetails) {
        data.loungesDetails = true;
    }
    fetchData();
    defaultImg();
});
</script>
