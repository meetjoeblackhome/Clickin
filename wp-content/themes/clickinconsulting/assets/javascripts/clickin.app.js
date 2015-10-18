jQuery(document).ready(function() {
  var clickin;
  clickin = {
    preloader: function() {
      var preloader;
      preloader = $('.preloader');
      return setTimeout((function() {
        return preloader.remove();
      }), 400);
    }
  };
  return clickin.preloader();
});
