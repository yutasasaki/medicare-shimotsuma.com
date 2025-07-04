<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 *
 */

get_header();
?>

<section class="category-archive">
		<h1>お知らせ</h1>
		<ul class="article">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php 
            $cat = get_the_category();
            $cat_slug = $cat[0]->slug;
            $cat_name = $cat[0]->name;
        ?>
			<li><p class="<?php echo $cat_slug; ?>"><a href="<?php echo home_url(); ?>/category/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a></p><a href="<?php the_permalink(); ?>"><span><?php the_time('Y.n.d'); ?></span>
              <?php the_title(); ?></a></li>
          <?php endwhile; ?>

		</ul>
</section>



<?php 
get_footer(); ?>
