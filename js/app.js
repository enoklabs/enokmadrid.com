$(document).ready(function(){

    $('#contact-toggle').click(function(){
      $('#artist').slideUp('fast');
      $('#contact-form').slideToggle('fast');
      $("html, body").animate({ scrollTop: $(document).height() }, 500);
    });

    $('#art-toggle').click(function(){
      $('#contact-form').slideUp('fast');
      $('#artist').slideToggle('fast');
      $("html, body").animate({ scrollTop: $(document).height() }, 500);
    });


    $('.project').mouseenter(function() {
        // $(this).children('.project-info').css("opacity", "1");
        $(this).find('.project-img').addClass("color");
    }).mouseleave(function() {
        // $(this).children('.project-info').css("opacity", "0");
        $(this).find('.project-img').removeClass("color");
    });

});
