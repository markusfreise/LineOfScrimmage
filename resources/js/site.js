const { default: axios } = require("axios");
import { createApp } from 'vue';
import Swiper, { Autoplay, Navigation, Pagination } from 'swiper';
import 'swiper/css';

var gap = document.getElementById("gap").clientWidth;
var gap2x = document.getElementById("gap-2x").clientWidth;
var mVert = document.getElementById("m-vert").clientWidth;
var mVertSlim = document.getElementById("m-vert-slim").clientWidth;
var widthMargin = document.getElementById("width-margin").clientWidth;
var articleWidth = document.getElementById("article-width").clientWidth;
var lastScroll = 0;

window.addEventListener('load',function() {

    var slCnt = document.querySelectorAll('.wp-block-eaw-feature .swiper-slide').length;
    
    new Swiper('.wp-block-eaw-feature .swiper-container',{
        modules: [Autoplay,Navigation,Pagination],
        lazy: true,
        spaceBetween: 10,
        slidesPerView: 1.15,
        slidesOffsetAfter: widthMargin,
        slidesOffsetBefore: widthMargin,
        on: {
            init: function() {
            },
            transitionEnd: function() {
            }
        },
        navigation: {
            prevEl: '.wp-block-eaw-feature .prev',
            nextEl: '.wp-block-eaw-feature .next',
        },
        pagination: {
            el: (slCnt>1)?'.wp-block-eaw-feature .swiper-pagination':'',
            type: 'bullets',
        },
        breakpoints: {
            768: {
                spaceBetween: 32,
                slidesPerView: (slCnt>1)?1.8:1.1
            },
            1024: {
                spaceBetween: 32,
                slidesPerView: (slCnt>2)?2.4:(slCnt>1)?1.8:1.1
            },
            1440: {
                spaceBetween: 32,
                slidesPerView: (slCnt>2)?3.2:(slCnt>1)?1.8:1.1
            },
            1680: {
                slidesOffsetBefore: gap2x,
                slidesOffsetAfter: gap2x
            }
        }
    });

    new Swiper('.wp-block-eaw-artists .swiper-container',{
        modules: [Autoplay,Navigation,Pagination],
        lazy: true,
        spaceBetween: 10,
        slidesPerView: 1.15,
        slidesOffsetAfter: widthMargin,
        slidesOffsetBefore: widthMargin,
        on: {
            init: function() {
            },
            transitionEnd: function() {
            }
        },
        navigation: {
            prevEl: '.wp-block-eaw-artists .prev',
            nextEl: '.wp-block-eaw-artists .next',
        },
        pagination: {
            el: '.wp-block-eaw-artists .swiper-pagination',
            type: 'bullets',
        },
        breakpoints: {
            768: {
                spaceBetween: 32,
                slidesPerView: 1.8
            },
            1024: {
                spaceBetween: 32,
                slidesPerView: 2.4
            },
            1440: {
                spaceBetween: 32,
                slidesPerView: 3.2
            },
            1680: {
                slidesPerView: 3.5,
                slidesOffsetBefore: gap2x,
                slidesOffsetAfter: gap2x
            }
        }
    });

    new Swiper('.wp-block-eaw-quotes .swiper-container',{
        modules: [Autoplay,Navigation,Pagination],
        lazy: true,
        slidesPerView: 1,
        navigation: {
            prevEl: '.wp-block-eaw-quotes .prev',
            nextEl: '.wp-block-eaw-quotes .next',
        },
        pagination: {
            el: '.wp-block-eaw-quotes .swiper-pagination',
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

    var header = document.querySelector('header');
    var headerFixed = header.cloneNode(true);
    headerFixed.classList.add('fixed');
    document.getElementById('wrapall').appendChild(headerFixed);

    window.addEventListener('scroll', function() {
        if(window.widht<768) return;
        var headerfixed = document.querySelector('header.fixed');
        if(window.scrollY < lastScroll && window.scrollY > 10) {
            headerfixed.classList.add('show');
        } else {
            headerfixed.classList.remove('show');
        }
        lastScroll = window.scrollY;
    });

})