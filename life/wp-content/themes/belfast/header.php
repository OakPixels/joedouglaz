<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css?family=Baloo+2|Catamaran:800&display=swap" rel="stylesheet">
  </head>
</html>
<body <?php body_class();?>>

<header class="sticky-top">
  <a href="http://life.joedouglaz.com"> <img id="logo" src="http://192.168.64.3/wordpress/wp-content/themes/belfast/img/tree.png"> </a>
  <div class="container">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'top-menu',
        'menu_class' => 'navigation',
      )
    );?>
  </div>

</header>
