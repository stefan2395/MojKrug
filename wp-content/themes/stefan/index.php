<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stefan
 */

get_header(); ?>



<!-- Posts Theme (ACF: Blog Posts) -->



<?php 

get_header(); ?>


<div class="full-blog width-70">


	<div class="blog-full-container  margin-top-bottom-70">


<?php
    $new_loop = new WP_Query( array(
	'offset' => 0,
	'posts_per_page' => 1, 
	'order' => 'DESC',
	'post_type' => 'post',

    ) );

?>
	<?php if ( $new_loop->have_posts() ) : while ( $new_loop->have_posts () ) : $new_loop->the_post(); ?>

	<?php $image = get_field('slika_oglasa'); ?>

		<div class="last-blog-post-container">

				<div class="">

						<div class="title-blog-post a-link-style">
							<h4>
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?></a>
							</h4>
						</div>

						<div class="blog-post-info span-last-post">
							<span class="blog-post-span">
								<?php echo get_the_date('j F Y'); ?>	
							</span>
						</div>

					<div class="last-blog-image">
						<a href="<?php the_permalink() ?>">
							<img src="<?php echo $image['sizes']['og_size'] ?>" alt="<?php echo $image['alt']; ?>" />
						</a>
					</div>
		


					<div class="last-blog-inf">

						<div class="single-blog-post-tekst">
							<?php the_field('tekst_oglasa'); ?>
						</div>

					</div>

				</div>
		
		</div>
		<?php endwhile; ?>
	<?php endif; ?>	
<?php wp_reset_query(); ?>



<?php
    $new_loop2 = new WP_Query( array(
	'offset' => 1,
	'posts_per_page' => 10, 
	'order' => 'DESC',
	'post_type' => 'post',

    ) );

?>

	<?php if ( $new_loop2->have_posts() ) : while ( $new_loop2->have_posts () ) : $new_loop2->the_post(); ?>

	<?php $image = get_field('slika_oglasa'); ?>

		<div class="blog-post-container">

				<div class="blog-inf-container shadow-hover">

					<div class="blog-image">
						<a href="<?php the_permalink() ?>">
						<img src="<?php echo $image['sizes']['oglasi'] ?>" alt="<?php echo $image['alt']; ?>" />
						</a>
					</div>
		


					<div class="blog-inf">

						<div class="title-blog-post a-link-style">
							<h4>
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h4>
						</div>

						<div class="blog-post-info">
							<span class="blog-post-span">
								<?php echo get_the_date('j F Y'); ?>
							</span>
						</div>

						<div class="single-blog-post-tekst">
							<?php the_field('tekst_oglasa'); ?>
						</div>
					</div>

				</div>
		

		</div>
		<?php endwhile; ?>
	<?php endif; ?>	
<?php wp_reset_query(); ?>

	</div>

		<div id="sidebar-primary" class="blog-sidebar-container margin-top-bottom-70">

			<?php dynamic_sidebar( 'unique-sidebar-id' ); ?>

		</div>

</div>




<?php get_footer();?>
