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

});
