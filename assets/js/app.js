(function ($) {
    $(document).ready(function () {
        $('.lightBox').fancybox();

        $(document).on('click','.btnShowMenu', function (e) {
            if($(this).hasClass('active')){
                $(this).removeClass('active');
                $('.mainMenu').removeClass('active')
            }else{
                $(this).addClass('active');
                $('.mainMenu').addClass('active')
            }
        });
    });
}(jQuery));
