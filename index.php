<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php wp_nav_menu( array( 'menu' => 'Blogg') ); ?>
<?php while (have_posts()) : the_post(); ?>

	<div class="row justify-content-center">
		<div class="col-12 col-md-8">
			<a href="<?php echo the_permalink(); ?>" class="blog-link">
				<h1><?php the_title(); ?></h1>
				<h6><?php the_date(); ?></h6>

				<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
				<?php if($img): ?>
		    		<div class="img" style="background-image: url('<?php echo $img[0];?>');"></div>
		    	<?php endif; ?>
		    	<?php the_excerpt(); ?>
			</a>
		</div>
	</div>

<?php endwhile; ?>

<?php the_posts_navigation(); ?>
