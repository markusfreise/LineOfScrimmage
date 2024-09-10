const { default: axios } = require("axios");
import { createApp } from 'vue';
import Swiper, { Autoplay, Pagination } from 'swiper';
import 'swiper/css';
// import 'swiper/css/pagination';
// import 'swiper/css/navigation';

var gap = document.getElementById("gap").clientWidth;
var gap2x = document.getElementById("gap-2x").clientWidth;
var mVert = document.getElementById("m-vert").clientWidth;
var mVertSlim = document.getElementById("m-vert-slim").clientWidth;
var widthMargin = document.getElementById("width-margin").clientWidth;
var articleWidth = document.getElementById("article-width").clientWidth;

window.addEventListener('load',function() {
    
    var ff = createApp({
        delimiters: ['${', '}'],
        data() {
            return {
                waitForApi: false,
            }
        },
        methods: {
        },
        computed: {
            isTouch: function() {
                return supportsTouch;
            }
        },
        mounted: function() {
        }
    }).mount('#app');

    new Swiper('.wp-block-ff-hero .swiper-container',{
        modules: [Autoplay, Pagination],
        lazy: true,
        loop: true,
        autoplay: {
            delay: 2000,
        },
        on: {
            init: function() {
            },
            transitionEnd: function() {
            }
        },
        navigation: {
            prevEl: '',
            nextEl: ''
        },
        pagination: {
            el: '',
            type: 'bullets',
        },
    });

    document.getElementById("trigger").addEventListener("click", function (el) {
        var el = document.getElementById("trigger");
        if (el.classList.contains("open")) {
            el.classList.remove("open");
            document.querySelector("body").classList.remove("scroll-lock");
            document.getElementById("mobile_menu").classList.remove("open");
        } else {
            el.classList.add("open");
            document.querySelector("body").classList.add("scroll-lock");
            document.getElementById("mobile_menu").classList.add("open");
        }
    });

})