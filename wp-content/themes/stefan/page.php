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

get_header();
?>
	
		



<?php if (have_rows('content')): ?>
    <?php while (have_rows('content')): the_row(); ?>


	<?php if (get_row_layout() == "top_big_image") { ?> 

	<?php $image = get_sub_field('big_image'); ?>

		<div class="top-image-cont">
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		</div>

	<?php } ?><!--END SINGLE IMAGE --> 







	<?php if (get_row_layout() == "goals") { ?> 
		<div class="goals-cont">
			<div class="width-80 goals">

				<?php if( have_rows('repeater_field_name') ): ?>
				    <?php while ( have_rows('repeater_field_name') ) : the_row(); ?>

						<?php $title_goals = get_sub_field('goals_title_h1'); ?>
						<?php $goals_icon = get_sub_field('goals_icon'); ?>

							<div data-aos="fade-up" class="goals-text-cont arrow-down hover panel">

								<div class="front">
									
									<div class="goals-height box1">
										
										<div class="goals-icon">
											<img class="" src="<?php echo $goals_icon['url']; ?>" alt="<?php echo $goals_icon['alt']; ?>" />
										</div>

										<h2 class="h2-goals"><?php the_sub_field('goals_title_h1'); ?></h2>
										<p class="p-goals">
											<?php the_sub_field('goals_paragraph'); ?>
										</p>
									</div>
								</div>

								<!-- <h1 class=""><?php the_sub_field('goals_title_h1'); ?></h1> -->

								<div class="back">
									<div class="panel box2 p-goals">
											<?php the_sub_field('goals_panel'); ?>
									</div>
								</div>

							</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="goals-image">
			<h1>MI SMO VI, SAMO STARIJI VI!</h1>

		</div>

	<?php } ?>

	






	<?php if (get_row_layout() == "team") { ?> 

		<div class="width-100 team-full-cont">
			<div class="team-cont width-80">

				<?php if( have_rows('team_content') ): ?>
				    <?php while ( have_rows('team_content') ) : the_row(); ?>

						<?php $single_img_team = get_sub_field('single_img_team'); ?>

							<div class="team-info-cont">

								<div class="team-img">
									<img class="" src="<?php echo $single_img_team['sizes']['ucesnici']; ?>" alt="<?php echo $single_img_team['alt']; ?>" />
								</div>

								<div class="team-self-info">
									<h3 class="team-h3"><?php the_sub_field('name_team'); ?></h3>
									<h4 class="team-h4"><?php the_sub_field('job_team'); ?></h4>
									<!-- <p class="team-p"><?php the_sub_field('job_work_place_team'); ?></p> -->
								</div>
							</div>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
		
	<?php } ?>




	<?php if (get_row_layout() == "partners") { ?>

		<div class="partners-cont width-80 margin-top-bottom-70">

			<h1 class="partners-h1">SARADNICI:</h1>

			<div class="owl-carousel"  id="partners">

				<?php if( have_rows('repeater_partners') ): ?>
				    <?php while ( have_rows('repeater_partners') ) : the_row(); ?>


					<?php $img_partners = get_sub_field('img_partners'); ?>
				
					<div class="partners-img">
						<img class="" src="<?php echo $img_partners['sizes']['oglasi']; ?>" alt="<?php echo $img_partners['alt']; ?>" />
					</div>
				

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	<?php } ?>






	<?php if (get_row_layout() == "donation") { ?>

		<div class="donation-home-page">

		 	<div class="width-50">
				<h1 class="donation-h1">NASLOV TEKSTA</h1>

				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
			</div>
			


		 	<div class="donation-home-imgs-cont width-80">

			 	<div class="donation-img-width events" data-aos="fade-right">
			 		<img src="<?php echo get_template_directory_uri(); ?>/img/dogadjaji.svg" width="" height="" alt="" />

			 		<div class="events-hover">
				 			<img src="<?php echo get_template_directory_uri(); ?>/img/dogadjaji-hover.svg" width="" height="" alt="" />
			 		</div>
			 		<h3 class="donation-h3 count">500</h3>
			 		<h5 class="donation-h5">Dogadjaja</h5>
			 	</div>



			 	<div class="donation-img-width donation" data-aos="fade-up">
			 		<img src="<?php echo get_template_directory_uri(); ?>/img/donacije.svg" width="" height="" alt="" />

			 		<div class="donation-hover">
			 			<img src="<?php echo get_template_directory_uri(); ?>/img/donacije-hover.svg" width="" height="" alt="" />
			 		</div>
			 		<h2 class="donation-h3 count">20000</h2>
			 		<h4 class="donation-h4">Prikupljenih donacija</h4>
			 	</div>



			 	<div class="donation-img-width volunteers" data-aos="fade-left">
			 		<img src="<?php echo get_template_directory_uri(); ?>/img/volonteri.svg" width="" height="" alt="" />

			 		<div class="volunteers-hover">
			 			<img src="<?php echo get_template_directory_uri(); ?>/img/volonteri-hover.svg" width="" height="" alt="" />
		 			</div>
		 			<h3 class="donation-h3 count">20000</h3>
		 			<h5 class="donation-h5">Volontera</h5>
			 	</div>

		 	</div>

		 	<div class="donation-button-cont width-80">
		 		<a href="">DONIRAJTE</a>
		 	</div>

		</div>

	<?php } ?>








	<?php if (get_row_layout() == "contact_form") { ?>

		<div class="form-full">


			<div class="form-full-container">

				

					<div class="form-inf-cont">

							<div class="form-h3">
								<h3>Ostanimo u kontaktu</h3>
							</div>

						<?php if( have_rows('title_contact') ): ?>
						    <?php while ( have_rows('title_contact') ) : the_row(); ?>

								<div class="font-inf">
									<?php the_sub_field('contact_info'); ?>
								</div>
								
							<?php endwhile; ?>
						<?php endif; ?>	
					</div>



				<div class="form-container">

					<?php the_sub_field('form'); ?>

				</div>

			</div>

		
	<?php } ?>







	<?php if (get_row_layout() == "images_gallery") { ?>

		<?php $img_gallery = get_sub_field('img_gallery'); ?>

		<div class="gallery-container width-80 margin-top-bottom-70" >
			<ul class=" owl-carousel" id="gallery">
			<?php if( $img_gallery ): ?>
			    

			        <?php foreach( $img_gallery as $image ): ?>

			            <li>
			                <a href="<?php echo $image['url']; ?>">
			                     <img src="<?php echo $image['sizes']['oglasi']; ?>" alt="<?php echo $image['alt']; ?>" />
			                </a>
			            </li>

			        <?php endforeach; ?>

			   
			<?php endif; ?>
 </ul>
		</div>
	<?php } ?>








	<?php if (get_row_layout() == "google_maps") { ?>

		<?php if( have_rows('google') ): ?>

			<div class="acf-map">

				<?php while ( have_rows('google') ) : the_row(); ?> 

					<?php $google = the_sub_field('google'); ?>

					
					<div class="marker" data-lat="<?php echo $google['lat']; ?>" data-lng="<?php echo $google['lng']; ?>">
						<h4><?php the_sub_field('title'); ?></h4>
						<p class="address"><?php echo $google['address']; ?></p>
						<p><?php the_sub_field('description'); ?></p>
					</div>

				<?php endwhile; ?>

			</div>

		<?php endif; ?>

	</div>
	
	<?php } ?>






	<?php if (get_row_layout() == "paragraph") { ?>

		<div class="paragraph-container">

			<div class="width-70 margin-70">

				<?php the_sub_field('text_p'); ?>
				
			</div>

		</div>

	<?php } ?>






	<?php if (get_row_layout() == "video") { ?>

		<div class="video-container">

			<div class="width-70 margin-70">

				<?php the_sub_field('video_link'); ?>
				
			</div>
			
		</div>

	<?php } ?>



	<?php endwhile; ?>
<?php endif; ?>	

	
</main>

<a href="#" class="scrollToTop" style="display: block;"></a>



<?php

get_footer();



