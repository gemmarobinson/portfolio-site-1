import $ from 'jquery';

const mobileMenu = () => {
    $('.js-menu-toggle').on('click', function (e) {
        e.preventDefault();
        $('.js-menu-toggle').add($('.js-menu')).toggleClass('active');
        $('body').toggleClass('menu-open');
        $('html').toggleClass('menu-open');
    });

    $('.menu-item-has-children').click(function (e) {
        if (e.target == this) {
            $(this).children('.sub-menu').slideToggle();
            if ($(this).hasClass('opened')) {
                $(this).removeClass('opened');
            } else {
                $(this).addClass('opened');
            }

            $(this)
                .siblings()
                .each(function (index, value) {
                    var slider = $(value);
                    if (slider.hasClass('opened')) {
                        slider.removeClass('opened');
                        slider.children('.sub-menu').slideToggle();
                    }
                });
        }
    });
};

export default mobileMenu;
