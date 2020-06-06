<!DOCTYPE html>
<html class="html" lang="en"> 
<head>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(64684591, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true
     });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/64684591" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="yandex-verification" content="8bf323184bf04b23" />
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?php //bloginfo('template_url'); ?>/css/slick.css"> -->
  <!-- <link rel="stylesheet" href="<?php //bloginfo('template_url'); ?>/css/slick-theme.css"> -->
  
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <?php if(is_user_logged_in() && !current_user_can('administrator')){ ?>
    <style>
      html.html
      {
          margin-top: 0!important;
      }
      #wpadminbar
      {
          display: none!important;
      }
    </style>
  <?php } ?>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/fav180.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/fav32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/fav16.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1517810708340892');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1517810708340892&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>
  
  <!-- ====================================================
  header section -->
  <header class="top-header">
    <div class="container">
      <div class="row contacts_wrap">
        <div class="col-xs-2 col-sm-1 col-md-1 header-logo pull-left">
          <br>
          <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/fav180.png" alt="" class="img-responsive logo"></a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2 header_contacts pull-right">
        <a class="menu menu_tel" href="tel:+74951352548">+7 (495) 135-25-48</a>
        <a class="menu menu_email" href="mailto:info@chikurov.com">info@chikurov.com</a>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12 main-menu">
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-default">
                <div class="container-fluid nav-bar">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="close_menu">×</div>
                    <a class="menu_logo" href="/"><img src="<?php bloginfo('template_url'); ?>/img/fav180.png" alt="" class="img-responsive logo"></a>
                  <!-- <div id="bs-example-navbar-collapse-1"> -->
                    
                    <ul class="nav navbar-nav navbar-left">
                      <li><a class="menu cur_page_ridden" href="/book/1">«Лечебное Tarot»</a></li>
                      <li><a class="menu" href="http://school-bc.ru/" target="_blank">Бесплатный Онлайн Курс</a></li>
                      <?php if (is_user_logged_in()) { ?>
                        <?php $cur_user = wp_get_current_user(); ?>
                        <?php if ($cur_user->user_firstname) { ?>
                        <li><span class="menu pink_text">Привет, <?php echo $cur_user->user_firstname; ?></span></li>
                      <?php } else { ?>
                        <li><span class="menu pink_text">Привет, <?php echo $cur_user->user_login; ?></span></li>
                      <?php } ?>
                        <li><a class="menu blue_text" href="/logout/?_wpnonce=1fd8ce03de">Выйти</a></li>
                      <?php } else { ?>
                        <li><span class="menu blue_text" id="login_btn">Вход</span></li>
                      <?php } ?>
                    </ul>
                  </div><!-- /navbar-collapse -->
                </div><!-- / .container-fluid -->
              </nav>
            </div>     
          </div>
        </div>
      </div>
    </div>
  </header> 
  <!-- end of header area -->
