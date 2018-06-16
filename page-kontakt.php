<?php while (have_posts()) : the_post(); ?>

<div class="row justify-content-center">
	<div class="col-12 col-md-8">
		<div class="row">
			<div class="col-12 col-md-6">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
			<div class="col-12 col-md-6 pt-4 pt-md-0">
				<?php echo do_shortcode('[contact-form-7 id="138" title="Kontaktformulär"]'); ?>
			</div>
		</div>
		<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
		<?php if($img): ?>
    		<div class="img" style="background-image: url('<?php echo $img[0];?>');"></div>
    	<?php endif; ?>
	</div>
</div>

<?php endwhile; ?>