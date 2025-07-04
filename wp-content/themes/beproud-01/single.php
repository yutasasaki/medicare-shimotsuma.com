<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 *
 */

get_header();
?>

<section class="category-archive">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="h2_area nopl">

					

					

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
					

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<div id="entry-author-info">
						<div id="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						</div><!-- #author-avatar -->
						<div id="author-description">
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<div id="author-link">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							</div><!-- #author-link	-->
						</div><!-- #author-description -->
					</div><!-- #entry-author-info -->
<?php endif; ?>
					

<p style="padding-top: 50px;"><?php the_time('Y.n.d'); ?>&nbsp;
					
					
						<?php twentyten_posted_in(); ?></p>

					
				</div>

				</div><!-- #post-## -->

				
				<div id="nav-below" class="navigation">
					<div style="align: center;"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '<<', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?> | <?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '>>', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-below -->
				

				



<?php endwhile; // end of the loop. ?>
</section>

<?php 
get_footer(); ?>
