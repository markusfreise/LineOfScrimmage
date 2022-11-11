const { default: axios } = require("axios");
import { createApp } from 'vue';
import Swiper, { Autoplay, Pagination } from 'swiper';
import 'swiper/css';
// import 'swiper/css/pagination';
// import 'swiper/css/navigation';

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

})