jQuery(document).ready(function($){

	//arrow-spin-link rotation
    $('.arrow-spin-link').hover(function(){
        $('a.arrow-spin-link span.arrow"').stop().rotate({animateTo:360},100);
    },function(){
        $('a.arrow-spin-link span.arrow"').stop().rotate({animateTo:0});
    });

    //menu-link rotation
    $('.menu a').hover(function(){
        jQuery(this).children("span:first").stop().rotate({animateTo:360});
    },function(){
        jQuery(this).children("span:first").stop().rotate({animateTo:0});
    });

    //ssmenu
    $('li[id^=menu-item-] a').hover(function() {
        
        if ( $(this).parent().parent().parent().attr('class') == 'menu' ) {
            $('.sub-menu').css('display', 'none');
            $('.menu a').removeClass('hover');

            var id = $(this).parent().attr('id');

            $(this).addClass('hover');
            $('#' + id + ' .sub-menu').css('display', 'block');
        }
    });

    $('ul.sub-menu').hover(function() {
    },function(){
        $(this).css('display', 'none');
    });

    view_email();
});


function view_email() {   
    $('.view_email').html('cabinet-nadialebreton@orange.fr');
}