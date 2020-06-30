import $ from 'jquery';

const companyDropdown = () => {
    $('.js-company-more').click(function (e) {
        e.preventDefault();

        var $this = $(this);
        var $company = $this.closest('.js-company');

        $company.toggleClass('active');

        if ($company.hasClass('active')) {
            // if the class of active has just been added, open dropdown
            $company.children('.js-company-dropdown').slideDown();
            $this
                .find('i')
                .removeClass('fa-plus-circle')
                .addClass('fa-minus-circle');
            $this.find('span').html('Less information');
        } else {
            // if the class of active has just been removed, close dropdown
            $company.children('.js-company-dropdown').slideUp();
            $this
                .find('i')
                .removeClass('fa-minus-circle')
                .addClass('fa-plus-circle');
            $this.find('span').html('More information');
        }
    });
};

export default companyDropdown;
