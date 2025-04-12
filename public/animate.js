// jquery animation on website scroll airport1-a1
$(document).ready(function () {
    let offset = { offset: "80%" };
    // About the airport
    $(".airport1-a1").waypoint(function () {
        setTimeout(function () {
            $(".airport1-a1").addClass(
                "animate__animated animate__fadeInRight"
            );
        }, 200);
    }, offset);
    $(".airport2-a2").waypoint(function () {
        setTimeout(function () {
            $(".airport2-a2").addClass(
                "animate__animated animate__fadeInRight"
            );
        }, 100);
    }, offset);
    // facilites on aiport
    $(".c1-a1").waypoint(function () {
        setTimeout(function () {
            $(".c1-a1").addClass("animate__animated animate__fadeInLeft");
        }, 100);
    }, offset);
    $(".c1-a2").waypoint(function () {
        setTimeout(function () {
            $(".c1-a2").addClass("animate__animated animate__fadeInLeft");
        }, 200);
    }, offset);
    $(".c1-a3").waypoint(function () {
        setTimeout(function () {
            $(".c1-a3").addClass("animate__animated animate__fadeInLeft");
        }, 300);
    }, offset);
    $(".c1-a4").waypoint(function () {
        setTimeout(function () {
            $(".c1-a4").addClass("animate__animated animate__fadeInLeft");
        }, 400);
    }, offset);
    $(".c1-a5").waypoint(function () {
        setTimeout(function () {
            $(".c1-a5").addClass("animate__animated animate__fadeInLeft");
        }, 500);
    }, offset);

    // benefits of airport
    $(".c2-a1").waypoint(function () {
        setTimeout(function () {
            $(".c2-a1").addClass("animate__animated animate__fadeInLeft");
        }, 100);
    }, offset);
    $(".c2-a2").waypoint(function () {
        setTimeout(function () {
            $(".c2-a2").addClass("animate__animated animate__fadeInLeft");
        }, 200);
    }, offset);
    $(".c2-a3").waypoint(function () {
        setTimeout(function () {
            $(".c2-a3").addClass("animate__animated animate__fadeInLeft");
        }, 300);
    }, offset);
});

function scrollImages(direction) {
    let scrollAmount = direction === "left" ? -350 : 350;
    $(".images-cont").animate({ scrollLeft: "+=" + scrollAmount }, 400);
}
