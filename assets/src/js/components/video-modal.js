import $ from 'jquery';

const videoModal = () => {
    $('.js-play-video').click(function (e) {
        $('.js-video-popup').addClass('active');
        var source = $('#main-video').attr('data-source');
        $('#main-video')[0].src = source + '&autoplay=1';
        $('html').addClass('fixed');
        $('body').addClass('fixed');
    });

    $(document).click(function (e) {
        if ($('.js-video-popup').hasClass('active')) {
            if ($(e.target).closest('#main-video, .js-play-video').length > 0) {
                return false;
            }
            // Otherwise
            $('.js-video-popup').removeClass('active');
            $('#main-video')[0].src = '';
            $('html').removeClass('fixed');
            $('body').removeClass('fixed');
        }
    });
};
export default videoModal;
