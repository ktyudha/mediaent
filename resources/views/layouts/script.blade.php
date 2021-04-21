<script>
var scrollpos = window.scrollY;
var header = document.getElementById("header");
var navcontent = document.getElementById("nav-content");
var navaction = document.getElementById("navAction");
var brandname = document.getElementById("brandname");
var toToggle = document.querySelectorAll(".toggleColour");
var navlogo = document.getElementById("navlogo");
var navtitle = document.getElementById("navtitle");
var navbody = document.getElementById("navbody");
var btn_selengkapnya = document.getElementById("btn-selengkapnya");

document.addEventListener("scroll", function() {
    /*Apply classes for slide in bar*/
    scrollpos = window.scrollY;

    if (scrollpos > 10) {
        btn_selengkapnya.classList.remove("gradient");
        btn_selengkapnya.classList.add("hover-gradient");
        header
            .classList
            .add("bg-white");
        navaction
            .classList
            .remove("bg-white");
        navaction
            .classList
            .add("gradient");
        navaction
            .classList
            .remove("text-gray-800");
        navaction
            .classList
            .add("text-white");

        navaction
            .classList
            .remove("py-4");
        navaction
            .classList
            .remove("px-8");
        navaction
            .classList
            .add("py-2");
        navaction
            .classList
            .add("px-4");

        navlogo
            .classList
            .remove("h-20");
        navlogo
            .classList
            .add("h-12");
        navlogo
            .classList
            .add("py-1");
        navtitle
            .classList
            .remove("py-5");
        navtitle
            .classList
            .add("py-2");
        navtitle
            .classList
            .remove("lg:text-4xl");
        navtitle
            .classList
            .add("lg:text-lg");
        navtitle
            .classList
            .remove("mx-5");
        navtitle
            .classList
            .add("mx-1");

        navbody
            .classList
            .remove("py-2");

        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
            toToggle[i]
                .classList
                .add("text-gray-800");
            toToggle[i]
                .classList
                .remove("text-white");
        }

        header
            .classList
            .add("shadow");
        navcontent
            .classList
            .remove("bg-gray-100");
        navcontent
            .classList
            .add("bg-white");
    } else {
        header
            .classList
            .remove("bg-white");
        navaction
            .classList
            .remove("gradient");
        navaction
            .classList
            .add("bg-white");
        navaction
            .classList
            .remove("text-white");
        navaction
            .classList
            .add("text-gray-800");

        navaction
            .classList
            .add("py-4");
        navaction
            .classList
            .add("px-8");
        navaction
            .classList
            .remove("py-2");
        navaction
            .classList
            .remove("px-4");
        navtitle
            .classList
            .add("mx-5");
        navtitle
            .classList
            .remove("mx-1");

        navbody
            .classList
            .add("py-2");

        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
            toToggle[i]
                .classList
                .add("text-white");
            toToggle[i]
                .classList
                .remove("text-gray-800");
        }

        header
            .classList
            .remove("shadow");
        navcontent
            .classList
            .remove("bg-white");
        navcontent
            .classList
            .add("bg-gray-100");

        navlogo
            .classList
            .add("h-20");
        navlogo
            .classList
            .remove("h-10");
        navtitle
            .classList
            .add("py-5");
        navtitle
            .classList
            .add("lg:text-4xl");
        navtitle
            .classList
            .add("sm:text-2xl");
        navlogo
            .classList
            .add("duration-700");
        navtitle
            .classList
            .add("duration-700");

    }
});
</script>
<script>
    /*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;

function check(e) {
    var target = (e && e.target) || (event && event.srcElement);

    //Nav Menu
    if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
                navMenuDiv
                    .classList
                    .remove("hidden");
            } else {
                navMenuDiv
                    .classList
                    .add("hidden");
            }
        } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv
                .classList
                .add("hidden");
        }
    }
}

function checkParent(t, elm) {
    while (t.parentNode) {
        if (t == elm) {
            return true;
        }
        t = t.parentNode;
    }
    return false;
}
</script>

{{-- carousel --}}
<script>
    var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
})
</script>