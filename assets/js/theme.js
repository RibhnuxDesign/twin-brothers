(function () {
'use strict';

var navbar = (function () {
  var navbar = document.querySelector('.navbar');
  var headroom = new Headroom(navbar, {
    classes: {
      initial: 'sticky',
      pinned: 'stickyPinned',
      unpinned: 'stickyUnpinned',
      top: 'stickyTop',
      notTop: 'stickyNotTop'
    }
  });
  headroom.init();
});

(function ($) {
  $(document).ready(function () {
    navbar();
  });
})(jQuery);

}());
