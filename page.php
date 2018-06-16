<?php
$taxonomy     = 'product_cat';
$orderby	  = 'ASC';
$show_count   = false;
$pad_counts   = false;
$hierarchical = true;
$title        = '';
 
$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title
);
  
global $post;
$name = $post->post_name;
?>
<?php if($name === 'kontakt' || $name === 'galleri' || $name === 'arkiv' || $name === 'kategorier' || $name === 'cart' || $name === 'checkout'): ?>
	<!-- Do nothing -->
<?php else: ?>
	<div class="header">
		<div data-toggle="collapse" data-target="#demo">
		    <p class="mobile-cat-menu">Kategorier</p>
		</div>
	</div>
	<div class="cat-menu">
		<nav>
			<ul>
			    <?php wp_list_categories( $args ); ?>
			</ul>
		</nav>
	</div>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; ?>