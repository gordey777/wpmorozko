// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
jQuery(document).ready(function() {
  //слайдер партнеры
  jQuery("#partner-slider").owlCarousel({
    items: 6,
    margin: 25,
    dots: false,
    nav: true,
    navText: '',
    //center: true,
  });


  /* Модальные окна */
  var overlay = jQuery('#overlay');
  var open_modal = jQuery('.open_modal');
  var close = jQuery('.modal_close, #overlay');
  var modal = jQuery('.modal_div');

  open_modal.click(function(event) {
    event.preventDefault();
    var div = jQuery(this).attr('href');
    overlay.fadeIn(400,
      function() {
        jQuery(div).css('display', 'block').animate({
          opacity: 1,
          top: '250px'
        }, 200);
      });
  });

  close.click(function() {
    modal.animate({
        opacity: 0,
        top: '120px'
      }, 200,
      function() {
        jQuery(this).css('display', 'none');
        overlay.fadeOut(400);
      }
    );
  });

  jQuery('.noLink > a').on('click', function(e) {
    e.preventDefault();

  });

});
