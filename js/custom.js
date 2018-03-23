(function ($) {
  "use strict";
  jQuery(document).ready(function($){

  // gallery lightbox

  $('.gallery-lightbox').magnificPopup({
      type: 'image',
      gallery:{
        enabled: true
      }
  })

  //for Sticky Nav

    $ (window) .on('scroll',function (){
    if ($(window) .scrollTop() >50){
      $('.header-main') .addClass('menu-bg');
    } else {
      $('.header-main').removeClass('menu-bg');
    }
    });
  
  // for google map

  var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        zoom: 16,
        lat: 23.7508505,
        lng: 90.3912424,
        scrollwheel: false,
      });
      map.addControl({
        position: 'top_right',
        content: 'Geolocate',
        style: {
          margin: '5px',
          padding: '1px 6px',
          border: 'solid 1px #717B87',
          background: '#fff'
        },
        events: {
          click: function(){
            GMaps.geolocate({
              success: function(position){
                map.setCenter(position.coords.latitude, position.coords.longitude);
              },
              error: function(error){
                alert('Geolocation failed: ' + error.message);
              },
              not_supported: function(){
                alert("Your browser does not support geolocation");
              }
            });
          }
        }
      });
    });
  });
  // smooth scroll
  // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  /* ---------------------------------------------
    Pre loader
    --------------------------------------------- */
    $(window).on('load', function() {
        // will first fade out the loading animation
        $(".preloader").fadeOut();
        //then background color will fade out slowly
        $("#faceoff").delay(200).fadeOut("slow");
    });
    


  jQuery(window).load(function(){


  });
  
}(jQuery));
