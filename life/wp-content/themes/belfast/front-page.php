<?php get_header();?>

<div id="home" class="container">
  <div class="row">
    <div class="col-md-12">

      <h1 align="center"><?php the_title();?></h1>

      <?php if (have_posts()) : while(have_posts()) : the_post();?>
        <?php the_content();?>
        <hr />
      <?php endwhile; endif;?>

    </div>
  </div>
</div>






<?php get_footer();?>
