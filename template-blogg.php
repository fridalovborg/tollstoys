<?php
/**
 * Template Name: Blogg
 */

global $post;
$name = $post->post_name;

//Kategori
$taxonomy     = 'category';
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
// Arkiv year and month
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
							YEAR( post_date ) AS year,
							COUNT( id ) as post_count FROM $wpdb->posts
							WHERE post_status = 'publish' and post_date <= now( )
							and post_type = 'post'
							GROUP BY month , year
							ORDER BY post_date DESC");
?>
<?php wp_nav_menu( array( 'menu' => 'Blogg') ); ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="archive-content">
		<?php if( $name === 'arkiv' ): ?>
			<?php foreach( $months as $month ) : ?>
				<?php $year_current = $month->year; ?>
				<?php if ( $year_current != $year_prev ) : ?>
					<?php if ( $year_prev != null ) : ?>
						</ul>
					<?php endif; ?>
					<h6><?php echo $month->year; ?></h6>
					<ul class="archive-list">
				<?php endif; ?>
					<li>
						<a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
							<span class="archive-month"><?php echo date("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span>
							<span class="archive-count"><?php echo $month->post_count; ?></span>
						</a>
					</li>
				<?php $year_prev = $year_current; ?>
			<?php endforeach; ?>
			</ul>
		<?php else: ?>

			<ul>
			    <?php wp_list_categories( $args ); ?>
			</ul>
		<?php endif; ?>
	</div>

<?php endwhile; ?>