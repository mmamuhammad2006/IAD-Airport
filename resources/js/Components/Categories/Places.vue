<template>
    <main>
         <div class="container-fluid bg-lightGray py-5 px-sm-0 px-3">
          <div class="container m-auto">
              <loading v-if="data.loading"></loading>
            <div class="col-12">
              <div class="place">
                <div class="col-12 row">
                  <div v-for="place in data.places" class="hotel-cont col-lg-4 col-md-6 col-12 rounded-3 py-3 d-flex justify-content-center">
                    <div class="hotel col-md-11 col-12 bg-white rounded-4 hover-zoom max-h-450 min-h-450">
                      <div class="img">
                        <div class="col-12">
                          <img v-if="place.bio_image[0]" class="img-fluid rounded-top-4 h-260 w-100 object-fit-cover" :src="place.bio_image[0]" alt="" srcset="">
                          <img v-else class="img-fluid rounded-top-4 h-260 w-100 object-fit-cover" :src="defaultImage" alt="" srcset="">
                        </div>
                      </div>
                      <div class="desc p-4">
                        <div class="col-12">
                          <div class="para">
                            <div class="col-12">
                              <p v-if="place.name" class="fw-bold py-1 hover-zoom cursor-pointer overflow-hidden white-space-nowrap text-overflow-ellipsis">{{ place.name }}</p>
                              <p v-else class="fw-bold py-1 hover-zoom cursor-pointer overflow-hidden white-space-nowrap text-overflow-ellipsis">Null place Name</p>
                              <p v-if="place.google_formatted_address" class="fs-12 py-1 overflow-hidden white-space-nowrap text-overflow-ellipsis">{{ place.google_formatted_address }}</p>
                              <p v-else class="fs-12 py-1 overflow-hidden white-space-nowrap text-overflow-ellipsis">Null google_formatted_address</p>
                              <div class="ratings">
                                <span class="fa fa-star checked text-purple"></span>
                                <span class="fa fa-star checked text-purple"></span>
                                <span class="fa fa-star checked text-purple"></span>
                                <span class="fa fa-star checked text-purple"></span>
                                <span class="fa fa-star checked text-purple"></span>
                              </div>
                            </div>
                          </div>
                          <div class="pt-3 col-12">
                            <a :href=" `/nearby/${place.category}/${place.slug}`" class="btn col-12 rounded-5 border-2 border-purple text-purple py-2 px-5 m-auto hover-zoom bg-purple-hover">Explore</a>
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
       </main>
</template>

<script setup>

    import {defineProps, onMounted, reactive} from 'vue';
    import axios from "axios";
    import Loading from "../Loading.vue";

    const props = defineProps({
        categories: {
            type: Array,
            required: true,
        },
        defaultImage: {
            type: String,
            required: true,
        }
    });

    const data = reactive({
        places : [],
        loading: false,
    });
    const fetchPlaces  = async () => {
        data.loading = true;
        const responses = await Promise.all(
            props.categories.map((category) => axios.get(`/api/places/${category}`))
        );
        data.places = responses.reduce((acc,response) => {
            return acc.concat(response.data);
        },[]);
        data.loading = false;
    };
    onMounted(() => {
        fetchPlaces();
    });
</script>
