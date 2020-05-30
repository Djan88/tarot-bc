jQuery(document).ready(function () {
  
  var page_ridden,
      $page = jQuery('html, body');

  jQuery('a[href*="#"]').click(function() {
      $page.animate({
          scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
      }, 600);
      return false;
  });

  // console.log('status');
  // jQuery('.seminar_title').val(jQuery('.title_info').text());
  // jQuery('.seminar_url').val(jQuery('.page_url').text());
  // jQuery('.seminar_date').val(jQuery('.date_info').text());
  // jQuery('.seminar_time').val(jQuery('.time_info').text());
  // jQuery('.seminar_place').val(jQuery('.place_info').text());
  // jQuery('.seminar_price').val(jQuery('.price_info').text());
  // jQuery('.seminar_email').val(jQuery('.email_info').text());
  // jQuery('.seminar_phone').val(jQuery('.phone_info').text());
  // console.log(jQuery('.page_title').text());
  // console.log(jQuery('.page_url').text());
  jQuery('.speed_closed').popover({
    delay: {hide: 2000 }
  })
  var supportsStorage = function(){
    try {
      return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
      return false;
    }
  };
  jQuery('#login_btn, #register').on('click', function(event) {
    jQuery('#login').modal('show');
  });

  jQuery('.pages_item').on('click', function(event) {
    localStorage.setItem('page_ridden', jQuery(this).attr('href'));
    console.log(jQuery(this).attr('href'));
  });
  //Получение данных из локального хранилища
  if(supportsStorage && localStorage.getItem('page_ridden')){
    page_ridden = localStorage.getItem('page_ridden');
  }
  if (page_ridden) {
    jQuery('.cur_page_ridden').attr('href', page_ridden).text('Продолжить чтение');
    jQuery('.seminars_link').text('Продолжить чтение книги');
  }

  jQuery('.nav a, .close_menu').on('click', function(event) {
    jQuery('.navbar-collapse.collapse').removeClass('in');
  });
});
