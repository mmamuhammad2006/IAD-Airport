<template>
    <main class="bg-lightGray">
        <div class="first-sec bg-lightGray">
            <search :map-url="mapUrl" />
            <!--            <Hotels :hotel_location=data.hotel_location />-->
        </div>
        <airport1 :content="props.content" :localization="data" />
        <trip-inspiration
            :categories="categories"
            :inspired_trip="data.inspired_trip"
        />
        <airport-facilities
            :content="props.content"
            :facilities="data.facilities"
        />
        <airport2 :content="props.content" :localization="data" />
        <aiport-benefits :content="props.content" :benefits="data.benefits" />
    </main>
</template>
<script setup>
import { onMounted, ref, nextTick } from "vue";
import { defineProps, computed } from "vue";
const props = defineProps({
    categories: {
        type: Array,
        required: true,
    },
    content: {
        type: Array,
        required: true,
    },
    localization: {
        type: Object,
        required: true,
    },
    mapUrl: {
        type: String,
        required: true,
    },
});
//create computed properties

const data = computed(() => JSON.parse(props.localization));

// using third party image zoom package
let zoomInstance1 = null; // To track the ImageZoom instance for img 1
let zoomInstance2 = null; // To track the ImageZoom instance for img 2

// Function to enable image zoom
const enableImageZoom1 = () => {
    let parentWidth = document.getElementById("map-img-id1").offsetWidth;
    let parentheight = document.getElementById("map-img-id1").offsetHeight;
    if (!zoomInstance1) {
        let options = {
            width: parentWidth,
            height: parentheight,
            zoomWidth: 500,
            offset: { vertical: 0, horizontal: 33 },
            scale: 1,
        };
        zoomInstance1 = new ImageZoom(
            document.getElementById("map-img-id1"),
            options
        );
    }
};

const enableImageZoom2 = () => {
    if (!zoomInstance2) {
        let parentHorizontalWidth =
            document.getElementById("map-img-id2").offsetWidth;
        parentHorizontalWidth =
            parentHorizontalWidth + parentHorizontalWidth / 0.901;
        let parentWidth = document.getElementById("map-img-id2").offsetWidth;
        let parentheight = document.getElementById("map-img-id2").offsetHeight;
        let options = {
            width: parentWidth,
            height: parentheight,
            zoomWidth: 500,
            offset: { vertical: 0, horizontal: -parentHorizontalWidth },
            scale: 1,
        };
        zoomInstance2 = new ImageZoom(
            document.getElementById("map-img-id2"),
            options
        );
    }
};

// Function to disable image zoom
const disableImageZoom1 = () => {
    if (zoomInstance1) {
        let container = document.getElementById("map-img-id1");
        container.removeEventListener("mousemove", zoomInstance1.zoom);
        container.removeEventListener("mouseleave", zoomInstance1.resetZoom);
        let zoomElements = container.querySelectorAll(
            ".js-image-zoom__zoomed-area, .js-image-zoom__zoomed-image"
        );
        zoomElements.forEach(function (element) {
            element.remove();
        });
        zoomInstance1 = null;
    }
};

const disableImageZoom2 = () => {
    if (zoomInstance2) {
        let container = document.getElementById("map-img-id2");
        container.removeEventListener("mousemove", zoomInstance2.zoom);
        container.removeEventListener("mouseleave", zoomInstance2.resetZoom);
        let zoomElements = container.querySelectorAll(
            ".js-image-zoom__zoomed-area, .js-image-zoom__zoomed-image"
        );
        zoomElements.forEach(function (element) {
            element.remove();
        });
        zoomInstance2 = null;
    }
};

// Check screen width and enable/disable image zoom accordingly
const updateImageZoom = () => {
    let screenWidth = window.innerWidth;
    if (screenWidth >= 992) {
        enableImageZoom1();
        enableImageZoom2();
    } else {
        disableImageZoom1();
        disableImageZoom2();
    }
};

// Initial check on page load

// Update image zoom on window resize
let zoomEnabled1 = false;
let zoomEnabled2 = false;

// image zoom enable below 992px
const enableZoom1 = ($container, $img) => {
    if (!zoomEnabled1) {
        $container.on("mousemove", zoomFunction1);
        $container.on("mouseleave", resetZoom1);
        zoomEnabled1 = true;
    }
};

const enableZoom2 = ($container, $img) => {
    if (!zoomEnabled2) {
        $container.on("mousemove", zoomFunction2);
        $container.on("mouseleave", resetZoom2);
        zoomEnabled2 = true;
    }
};

// image zoom disables above 992px
const disableZoom1 = ($container, $img) => {
    if (zoomEnabled1) {
        $container.off("mousemove", zoomFunction1);
        $container.off("mouseleave", resetZoom1);
        $img.css({
            transform: "scale(1)",
            "transform-origin": "center center",
        });
        zoomEnabled1 = false;
    }
};

const disableZoom2 = ($container, $img) => {
    if (zoomEnabled2) {
        $container.off("mousemove", zoomFunction2);
        $container.off("mouseleave", resetZoom2);
        $img.css({
            transform: "scale(1)",
            "transform-origin": "center",
        });
        zoomEnabled2 = false;
    }
};

const zoomFunction1 = (event) => {
    let container = document.getElementById("map-img-id1");
    let img = container.querySelector("img");
    let rect = container.getBoundingClientRect();
    let x = event.clientX - rect.left;
    let y = event.clientY - rect.top;
    let percentX = (x / rect.width) * 100;
    let percentY = (y / rect.height) * 100;
    img.style.cssText = `
                    transform-origin: ${percentX}% ${percentY}%;
                    transform: scale(2);
                `;
};

const zoomFunction2 = (event) => {
    let container = document.getElementById("map-img-id2");
    let img = container.querySelector("img");
    let rect = container.getBoundingClientRect();
    let x = event.clientX - rect.left;
    let y = event.clientY - rect.top;
    let percentX = (x / rect.width) * 100;
    let percentY = (y / rect.height) * 100;
    img.style.cssText = `
                    transform-origin: ${percentX}% ${percentY}%;
                    transform: scale(2);
                `;
};

const resetZoom1 = (event) => {
    let $container = $(event.currentTarget);
    let $img = $container.find("img");
    $img.css({
        "transform-origin": "center center",
        transform: "scale(1)",
    });
};

const resetZoom2 = (event) => {
    let $container = $(event.currentTarget);
    let $img = $container.find("img");
    $img.css({
        "transform-origin": "center center",
        transform: "scale(1)",
    });
};

onMounted(() => {
    const images = document.querySelectorAll(
        "#map-img-id1 img, #map-img-id2 img"
    );

    let checkImagesLoaded = setInterval(() => {
        let allImagesLoaded = true;
        images.forEach((img) => {
            if (!img.complete) {
                allImagesLoaded = false;
            }
        });
        if (allImagesLoaded) {
            clearInterval(checkImagesLoaded);
            nextTick(() => {
                updateImageZoom();
                let windowWidth = window.matchMedia("(max-width: 991px)");
                function screenChange(e) {
                    let $container1 = $("#map-img-id1");
                    let $img1 = $container1.find("img");
                    let $container2 = $("#map-img-id2");
                    let $img2 = $container2.find("img");
                    updateImageZoom();
                    if (e.matches) {
                        // console.log("width is smaller than 992px");
                        enableZoom1($container1, $img1);
                        enableZoom2($container2, $img2);
                    } else {
                        // console.log("width is greater than 992px");
                        disableZoom1($container1, $img1);
                        disableZoom2($container2, $img2);
                    }
                }
                screenChange(windowWidth);
                windowWidth.addEventListener("change", screenChange);
            });
        }
    }, 100); // Check every 100ms
});
</script>
