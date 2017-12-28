<?php
/*
Template Name: portfolio
*/
?>


<?php get_header(); ?>

<?php get_sidebar(); ?>




<!--写真一覧ここから-->

<div id="posts">
	
     <div class="gallery">
     
     
     <!-- 目的画像の配列取得
     	http://accelboon.com/tn/?p=1512 参照-->
<?php
     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$terms = get_terms( 'tenant-category', '' );
	$the_query = new WP_Query( 
  	  array(
        'post_status' => 'any',
        'post_type' => 'attachment' ,
        'post_mime_type' => 'image' ,
        'posts_per_page' => 100 ,
        'nopaging' => false, 
        'paged' => $paged,       
        )
    );
    ?>

<?php 
	if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
	$loopcounter++;
	$thumbnail_id = get_post_thumbnail_id();
	$eye_img = wp_get_attachment_image_src( $thumbnail_id , 'large' );
?>
<!-- ループの中身 -->
		<div class="post <?php ?>">
			<div class="gallery-item">
				<a href="<?php echo wp_get_attachment_url( $the_query->post->ID ); ?>" class="popup-image"><img src="<?php echo $eye_img[0];  ?>" alt="<?php echo $loopcounter; ?> " class="lazy">
				</a>
			</div>
		</div>
<!-- ループここまで -->

<?php endwhile; ?>

<!-- pagenationなどの設置 -->

<?php else: ?>

<!-- 記事がない場合に表示 -->
  <?php _e('画像が見つかりません'); ?>

<?php endif; ?>







	</div><!--gallery-->
</div><!--posts-->

<!--写真一覧ここまで-->

<?php get_footer(); ?>

