(function () {
  var Accordion = function (el, multiple) {
    this.el = $(el); // Ensure it's a jQuery object
    this.multiple = multiple || false;

    var links = this.el.find('.link');
    links.on('click', { el: this.el, multiple: this.multiple }, this.dropdown);
  };

  Accordion.prototype.dropdown = function (e) {
    var $el = e.data.el;
    var $this = $(this);
    var $next = $this.next('.submenu');
      var $icon = $this.find('.toggle-icon');

    $next.slideToggle();
    $this.parent().toggleClass('open');
    
  // Toggle current icon
  $icon.toggleClass('fa-chevron-down fa-chevron-up');

    if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
          $el.find('.link').not($this).find('.toggle-icon')
      .removeClass('fa-chevron-up')
      .addClass('fa-chevron-down');
    }
  };

  new Accordion('#accordion', false);
})();

// for a mobile toggle

// document.getElementById('menu-toggle').addEventListener('click', function () {
 // document.getElementById('mobile-nav').classList.toggle('active');
// });




