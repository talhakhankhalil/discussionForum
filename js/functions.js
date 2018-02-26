$(document).ready(function(){
    $("#login").click(function(){
        if($("#arrow").hasClass("fa fa-chevron-down")){
            $("#arrow").addClass("fa-chevron-up").removeClass("fa-chevron-down");
        }else{
            $("#arrow").addClass("fa-chevron-down").removeClass("fa-chevron-up");
        }
        $("#login-wrap").slideToggle();
    });

    $(window).scroll(function(){
        if ($(this).scrollTop() > 50 ) {
            $('#backtotop').fadeIn();
        } else {
            $('#backtotop').fadeOut();
        }
    });
    $("a[href='#top']").click(function() {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
});   
