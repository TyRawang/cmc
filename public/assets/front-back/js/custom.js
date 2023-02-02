

$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scrollToTop').click(function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });


});




$(document).ready(function () {

$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.menubar').addClass('addMenuBg')
        $('.header').addClass('has-subnav')
    } else {
        $('.menubar').removeClass('addMenuBg')
        $('.header').removeClass('has-subnav')
    }
});

});


        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
         $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });




$('.listLoop').owlCarousel({
    nav: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 40,
    smartSpeed: 1000,
    autoplaySpeed: 2000,
    autoplayHoverPause: true,
    margin: 40,
    responsive: {
        100: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        },
        1200: {
            items: 3
        }
    }

});

$('.listOfBlog').owlCarousel({
    nav: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 40,
    smartSpeed: 1000,
    autoplaySpeed: 2000,
    autoplayHoverPause: true,
    margin: 40,
    responsive: {
        100: {
            items: 1
        },
        767: {
            items: 2
        },
        1000: {
            items: 3
        },
        1200: {
            items: 3
        }
    }

});

$('.listLoopTest').owlCarousel({
    nav: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 40,
    smartSpeed: 1000,
    autoplaySpeed: 2000,
    autoplayHoverPause: true,
    margin: 30,
    responsive: {
        100: {
            items: 1
        },
        767: {
            items: 1
        },
        1000: {
            items: 1
        },
        1200: {
            items: 1
        }
    }

});

$(".owl-prev").html('<i><img src="images/left-arrow2.png"></i>');
$(".owl-next").html('<i><img src="images/right-arrow2.png"></i>');











/*===================================

    Scrollmenu 

  ===================================*/


/* activate scrollspy menu */
$('body').scrollspy({
  target: '#navbarSupportedContent',
  offset: 100
});



$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".nav-link").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});




$('#carouselExampleControls').carousel({
  interval: 3000,
  cycle: true
}); 





$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

