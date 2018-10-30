<!-- Posts Theme (ACF: Blog Posts) -->



<?php 

get_header(); ?>

<div class="width-60 margin-top-bottom-70">



<?php if ( have_posts() ) : while ( have_posts () ) : the_post(); ?>

<?php $image = get_field('slika_oglasa'); ?>
	<div class="blog-full-container">
		<article>

			<div class="blog-glavne-inf">

			<?php	if( have_rows('slika_tekst')) { ?>
   				<?php while ( have_rows('slika_tekst') ) : the_row(); ?>


				<?php $slika = get_sub_field('slika'); ?>
					
				<div class="single-post-picture">
					<img src="<?php echo $slika['sizes']['og_size'] ?>" alt="<?php echo $slika['alt']; ?>" />
					<span><?php the_sub_field('titl_slike'); ?></span>
				</div>

				<div class="blog-post-info">
					<?php the_date( '<p>j F Y</p>' ); ?>
				</div>
			
				<div class="title-blog-post a-link-style">
					<h4>
						<a href="<?php the_permalink() ?>">
							<?php the_title(); ?></a>
					</h4>
				</div>

				<div class="single-post-tekst">
					<?php the_sub_field('text_post'); ?>
				</div>
					

			</div>	
		</article>					
	</div>
				<?php endwhile; ?>
			<?php } ?>
	


	<?php endwhile; ?>
<?php endif; ?>	


		<div id="sidebar-primary" class="blog-sidebar-container">

			<?php dynamic_sidebar( 'unique-sidebar-id' ); ?>

		</div>

</div>



<?php get_footer();?>
