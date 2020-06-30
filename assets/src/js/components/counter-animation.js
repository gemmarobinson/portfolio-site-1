import $ from 'jquery';

const countAnimation = () => {
    $(window).scroll(countUp);
    var viewed = false;

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return elemBottom <= docViewBottom && elemTop >= docViewTop;
    }

    function countUp() {
        if ($('.js-numbers').length > 0) {
            if (isScrolledIntoView($('.js-numbers')) && !viewed) {
                viewed = true;
                $('.js-value').each(function () {
                    $(this)
                        .prop('Counter', 0)
                        .animate(
                            {
                                Counter: $(this).text(),
                            },
                            {
                                duration: 1000,
                                easing: 'swing',
                                step: function (now) {
                                    $(this).text(Math.ceil(now));
                                },
                            }
                        );
                });
            }
        }
    }
};

export default countAnimation;
