import $ from 'jquery';

const headerScroll = () => {
    if ($(window).scrollTop() > 20) {
        $('.js-header').addClass('c-header--navy');
    } else {
        $('.js-header').removeClass('c-header--navy');
    }
};

export default headerScroll;
