<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/css?family=Baloo+2|Catamaran:800&display=swap" rel="stylesheet">
  </head>
</html>
<body <?php body_class();?>>

<header class="sticky-top">
  <div class="container">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'top-menu',
        'menu_class' => 'navigation',
      )
    );?>
  </div>

</header>
