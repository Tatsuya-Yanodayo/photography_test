<?php
/*
Template Name: portfolio
*/
?>



<?php get_header(); ?>

<?php get_sidebar(); ?>


<div class="progress" id="progress">
	<span class="progress-bar"></span>
	<span class="progress-text">0%</span>
</div>

<!--写真一覧ここから-->

<div id="posts">
	
    <?php echo do_shortcode('[mla_gallery attachment_category="portfolio" columns="0" size="large" mla_style="none" mla_link_class="popup-image" itemtag="div" icontag="div"]'); ?>
    
</div><!--posts-->

<!--写真一覧ここまで-->

<?php get_footer(); ?>

