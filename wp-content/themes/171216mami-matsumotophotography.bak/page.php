
<?php get_header(); ?>

<div id="contacts">
<h2 id="contact"><?php the_title(); ?></h2>


<?php while ( have_posts() ) : the_post(); ?>
    <p id="contact"><?php the_content();?></p>
  <?php endwhile; // end of the loop. ?>

  </div>








<?php get_footer(); ?>

