/* Vendor Scripts */
import $ from 'jquery';
import { WOW } from 'wowjs';
import lightgallery from 'lightgallery';

/* Our functions */
import videoModal from './components/video-modal';
import smoothScroll from './components/smooth-scroll';
import mobileMenu from './components/mobile-menu';
import headerScroll from './components/header-scroll';
import countAnimation from './components/counter-animation';
import companyDropdown from './components/company-dropdown';

countAnimation();

$(document).ready(() => {
    videoModal();
    mobileMenu();
    headerScroll();
    smoothScroll();
    companyDropdown();

    $('.js-gallery').lightGallery({
        download: false,
    });

    $('.js-product-card').hover(
        function () {
            $('.js-product-card').not($(this)).addClass('grey-out');
        },
        function () {
            $('.js-product-card').removeClass('grey-out');
        }
    );

    // Initiate WOWjs
    const wow = new WOW();
    wow.init();
});

$(window).scroll(function () {
    headerScroll();
});

$(window).on('resize', function () {
    // add functions here
});
