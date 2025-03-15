// import './bootstrap';

window.addEventListener("scroll", function () {
    var scrollValue = window.scrollY;
    var image = document.getElementById("zoomImage");

    var scaleValue = 1 + scrollValue / 1000;
    image.style.transform = "scale(" + scaleValue + ")";
});

// This is the change