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


    // TIMELINE ANIMATION
    var timelineBlocks = $('.cd-timeline-block');
  	var offset = 0.8;

  	//hide timeline blocks which are outside the viewport
  	hideBlocks(timelineBlocks, offset);

  	//on scolling, show/animate timeline blocks when enter the viewport
  	$(window).on('scroll', function(){
  		(!window.requestAnimationFrame)
  			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
  			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
  	});

  	function hideBlocks(blocks, offset) {
  		blocks.each(function(){
  			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-dot, .cd-timeline-content').addClass('is-hidden');
  		});
  	}

  	function showBlocks(blocks, offset) {
  		blocks.each(function(){
  			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-dot').hasClass('is-hidden') ) && $(this).find('.cd-dot, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
  		});
  	}

});
