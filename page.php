<?php get_header(); ?>
<div class="banner clearfix">
         <?php  echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
      </div><!-- banner -->
    <div class="main_content clearfix">
        <?php get_sidebar(); ?>
      	 	<?php 
      			while( have_posts() ): the_post();
      				the_content('');
      			endwhile;
      		?>

  	</div><!-- main_content -->
 </div><!-- wrapper !-->
<?php get_footer(); ?>