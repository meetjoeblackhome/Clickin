jQuery(document).ready(function() {
  var clickin;
  clickin = {
    preloader: function() {
      var preloader;
      preloader = $('.preloader');
      return setTimeout((function() {
        return preloader.remove();
      }), 800);
    }
  };
  return clickin.preloader();
});
