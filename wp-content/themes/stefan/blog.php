<div class="grid-70 fl main-container"> 
	
	<?php while ( have_posts() ) :
			the_post();?>

		
		<div class="grid-100 figure">

			<p class="date-of-post"><?php the_date('m.d.Y / ') . the_author(); ?></p
			><h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
	

				<?php $image = get_field('_thumbnail_id'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php the_field('excerpt'); ?>


				<div class="permalink"><!-- start permalink -->
					<a href="<?php echo get_permalink(); ?>"><?php the_field('link','option'); ?></a>
			</div><!-- end permalink -->
	
 		</div>		

	<?php endwhile; // End of the loop.?>
     <?php the_posts_pagination() ?>
</div>



<!-- Side Bar -->
<div class="grid-30 fl right-sidebar">

<?php dynamic_sidebar( 'unique-sidebar-id' ); ?>

</div><!-- END: Side Bar -->
