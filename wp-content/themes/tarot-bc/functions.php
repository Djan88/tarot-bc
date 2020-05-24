<?php add_theme_support('post-thumbnails'); ?>
<?php
//fix for cookie error while login.
setcookie(TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN); 
if ( SITECOOKIEPATH != COOKIEPATH ) 
setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);
?>
<?php
    if (function_exists('add_theme_support')) {
        add_theme_support('menus');
    }
?>
<?php
    register_sidebar(array(
        'name' => __('Виджет зона 1'),
        'id' => 'popup-widget-area',
        'description' => __('Виджеты во всплывающем окне'),
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
?>
