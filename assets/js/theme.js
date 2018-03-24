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

var searchbar = (function () {
  var $ = jQuery;
  $(document).on('click', '.searchbar-toggler', function (e) {
    e.preventDefault();
    $('.searchbar').toggleClass('searchbar--show');
    var isHide = !$('.navbarMenu').hasClass('d-lg-flex');
    $('.navbarMenu').toggleClass('d-lg-flex', isHide);
    if (!isHide) {
      $('input#s').focus();
    }
  });
});

(function ($) {
  $(document).ready(function () {
    navbar();
    searchbar();
  });
})(jQuery);

}());
