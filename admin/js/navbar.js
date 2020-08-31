$(document).ready(function () {
    $('[data-toggle="offcanvas"]').on("click", function () {
      $('.sidebar-offcanvas').toggleClass('active')
    });
  })
  
  $(document).ready(function () {
    var body = $('body');
    var sidebar = $('.sidebar');
    //Close other submenu in sidebar on opening any
  
    sidebar.on('show.bs.collapse', '.collapse', function () {
      sidebar.find('.collapse.show').collapse('hide');
    });
  
  
    //Change sidebar
  
    $('[data-toggle="minimize"]').on("click", function () {
      body.toggleClass('sidebar-icon-only');
    });
  
    //checkbox and radios
    $(".form-check label,.form-radio label").append('<i class="input-helper"></i>');
  });
  
  //active navbar coding
  (function($) {
    $(document).ready(function() {
       // get current URL path and assign 'active' class
       var pathname = window.location.pathname;
       $('a[href^="'+pathname+'"]').addClass('text-danger');
       $('a[href^="'+pathname+'"]').parent().parent().parent().addClass('show');
   });
  })(jQuery);