<?php while (have_posts()) : the_post(); ?>
	<?php wp_nav_menu( array( 'menu' => 'Blogg') ); ?>
	<div class="row justify-content-center">
		<div class="col-12 col-md-10">
			<h1><?php the_title(); ?></h1>
			<h6><?php the_date(); ?></h6>

			<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
			<?php if($img): ?>
	    		<div class="img" style="background-image: url('<?php echo $img[0];?>');"></div>
	    	<?php endif; ?>
	    	<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>