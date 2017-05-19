/**
 * @file related function 
 */
(function ($) {
  Drupal.behaviors.pthrmbo = {
    attach: function (context, settings) {
      $( "input[type='submit'][value='Remove']" ).addClass('remove-button');
    }
  };
})(jQuery);