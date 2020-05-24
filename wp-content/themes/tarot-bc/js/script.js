jQuery(document).ready(function () {
  
  var $page = jQuery('html, body');
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
  // var online_block_h = parseFloat(jQuery('.online_school_text').css('height'));
  // jQuery('.online .col-md-4').css('height', jQuery('.online').css('height'));
  // jQuery('.online_school_logo').css('height', online_block_h+'px');
  // jQuery('.online_school').css('height', online_block_h/4+'px');
  // jQuery('.online_school').css('marginTop', online_block_h/4+'px');
  // Фильтрация по городам
  // jQuery('.btn_siminar_filter').on('click', function(event) {
  //   jQuery('.btn_siminar_filter').removeClass('active');
  //   jQuery(this).addClass('active');
  //   var filter_param_city = jQuery(this).data('filter');

  //   if (filter_param_city == 'all') {
  //     jQuery('.seminar_in').removeClass('hidden');
  //   } else if (filter_param_city == 'msk') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__msk').removeClass('hidden');
  //   } else if (filter_param_city == 'spb') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__spb').removeClass('hidden');
  //   } else if (filter_param_city == 'kiev') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__kiev').removeClass('hidden');
  //   } else if (filter_param_city == 'riga') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__riga').removeClass('hidden');
  //   }
  // });


  //Получение данных из локального хранилища
  if(supportsStorage && localStorage.getItem('popupStatus')){
    popupStatus1 = localStorage.getItem('popupStatus1');
  }

  jQuery('.nav a, .close_menu').on('click', function(event) {
    jQuery('.navbar-collapse.collapse').removeClass('in');
  });
});
