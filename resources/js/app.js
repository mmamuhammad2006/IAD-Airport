/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "./bootstrap";
import { createApp } from "vue";

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});
import Parent from "./components/Parent.vue";
import Search from "./Components/Search.vue";
import Airport1 from "./Components/Airport1.vue";
import TripInspiration from "./Components/TripInspiration.vue";
import AirportFacilities from "./Components/AirportFacilities.vue";
import Airport2 from "./Components/Airport2.vue";
import AiportBenefits from "./Components/AiportBenefits.vue";
import Places from "./components/Categories/Places.vue";
import PlaceDetail from "./Components/Categories/PlaceDetail.vue";
import Flights from "./components/Links/Flights.vue";
import Airlines from "./components/Links/Airlines.vue";
app.component("Parent", Parent)
    .component("search", Search)
    .component("airport1", Airport1)
    .component("trip-inspiration", TripInspiration)
    .component("airport-facilities", AirportFacilities)
    .component("airport2", Airport2)
    .component("aiport-benefits", AiportBenefits)
    .component("flights", Flights)
    .component("airlines", Airlines)
    .component("places", Places)
    .component("place-detail", PlaceDetail);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount("#app");
