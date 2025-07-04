<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 *
 */

get_header();
?>

		<section class="category-archive">
				<h1><?php
					printf( __( 'カテゴリ: %s', 'twentyten' ), single_cat_title( '', false ) );
				?></h1>
				<ul class="article">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php 
                    $cat = get_the_category();
                    $cat_slug = $cat[0]->slug;
                    $cat_name = $cat[0]->name;
                ?>
					<li><p class="<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></p><a href="<?php the_permalink(); ?>"><span><?php the_time('Y.n.d'); ?></span>
                      <?php the_title(); ?></a></li>
                  <?php endwhile; ?>

				</ul>
		</section>

<?php 
get_footer(); ?>
