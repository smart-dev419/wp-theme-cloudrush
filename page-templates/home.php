<?php
/**
 * Template Name: Home
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="banner_content">
	<div class="banner_wrapper">
		<?php
			if(have_rows('banner_list')){
		?>
				<ul class="bxslider">
		<?php
				while( have_rows('banner_list') ) : the_row();
			        $banner_image = get_sub_field('banner_image');
			        $banner_title = get_sub_field('banner_title');
			        $banner_text = get_sub_field('banner_text');
			        $banner_link = get_sub_field('banner_link');
			        $banner_thumb = get_sub_field('banner_thumb');

		?>
					<li>
						<div class="banner_wrap">
							<div class="banner_desc">
								<h2><?php echo $banner_title; ?></h2>
								<?php echo $banner_text; ?>
								<div class="banner_link">
									<a href="<?php echo $banner_link; ?>">Learn More</a>
									<img src="<?php echo $banner_thumb['url'] ?>">
									<a href="<?php echo $banner_link; ?>" class="banner_book_link">Book Appointment</a>
								</div>
							</div>
							<div class="banner_img">
								<img src="<?php echo $banner_image['url'] ?>">
							</div>
						</div>
					</li>
		<?php
			    endwhile;
		?>
				</ul>
		<?php
			}
		?>
	</div>
</div>

<div class="features_wrapper">
	<?php
		if(have_rows('features_list')){
	?>
			<ul class="features_list">
	<?php
			while( have_rows('features_list') ) : the_row();
		        $features_image = get_sub_field('features_image');
		        $features_title = get_sub_field('features_title');
		        $features_text = get_sub_field('features_text');
		        $features_link = get_sub_field('features_link');
	?>
				<li>
					<img src="<?php echo $features_image['url'] ?>">
					<div class="features_list_desc">
						<h2><?php echo $features_title; ?></h2>
						<?php echo $features_text; ?>
						<a href="<?php echo $features_link; ?>">Learn More ></a>
					</div>
				</li>
	<?php
		    endwhile;
	?>
			</ul>
	<?php
		}
	?>
</div>

<div class="hardware_wrapper">
	<?php
		$hardware_image = get_field("hardware_image");
	?>
	<img src="<?php echo $hardware_image['url'] ?>">
</div>

<div class="professional_services_wrapper">
	<?php
		$professional_services_title = get_field("professional_services_title");
		$professional_services_text = get_field("professional_services_text");
	?>
	<div class="main_container">
		<h2><?php echo $professional_services_title ?></h2>
		<?php echo $professional_services_text ?>

		<?php
			if(have_rows('professional_services_list')){
		?>
				<div class="professional_services_list">
		<?php
				while( have_rows('professional_services_list') ) : the_row();
			        $professional_services_list_icon = get_sub_field('professional_services_list_icon');
			        $professional_services_list_title = get_sub_field('professional_services_list_title');
			        $professional_services_list_text = get_sub_field('professional_services_list_text');
		?>
					<div class="professional_services">
						<div class="professional_services_icon">
							<img src="<?php echo $professional_services_list_icon['url'] ?>">
						</div>
						<h3><?php echo $professional_services_list_title; ?></h3>
						<?php echo $professional_services_list_text; ?>
					</div>
		<?php
			    endwhile;
		?>
				</div>
		<?php
			}
		?>
	</div>
</div>

<div class="solutions_wrapper">
	<div class="main_container">
		<?php
			$solutions_title = get_field("solutions_title");
			$solutions_text = get_field("solutions_text");
		?>
		<h2><?php echo $solutions_title ?></h2>
		<?php echo $solutions_text ?>

		<?php
			if(have_rows('solutions_list')){
		?>
				<div class="solutions_list">
		<?php
				while( have_rows('solutions_list') ) : the_row();
			        $solutions_list_icon = get_sub_field('solutions_list_icon');
			        $solutions_list_title = get_sub_field('solutions_list_title');
			        $solutions_list_text = get_sub_field('solutions_list_text');
			        $solutions_list_image = get_sub_field('solutions_list_image');
		?>
					<div class="solutions">
						<div class="solutions_list_wrap">
							<div class="solutions_img">
								<img src="<?php echo $solutions_list_image['url'] ?>">
							</div>
							<div class="solutions_desc">
								<div class="solutions_icon">
									<img src="<?php echo $solutions_list_icon['url'] ?>">
								</div>
								<h3><?php echo $solutions_list_title; ?></h3>
								<?php echo $solutions_list_text; ?>
							</div>
						</div>
					</div>
		<?php
			    endwhile;
		?>
				</div>
		<?php
			}
		?>
	</div>
</div>

<div class="services_wrapper">
	<?php
		$services_title = get_field("services_title");
		$services_text = get_field("services_text");
	?>
	<div class="main_container">
		<h2><?php echo $services_title ?></h2>
		<?php echo $services_text ?>

		<?php
			if(have_rows('services_list')){
		?>
				<div class="services_list">
		<?php
				while( have_rows('services_list') ) : the_row();
			        $services_list_icon = get_sub_field('services_list_icon');
			        $services_list_title = get_sub_field('services_list_title');
			        $services_list_text = get_sub_field('services_list_text');
		?>
					<div class="services">
						<div class="services_icon">
							<img src="<?php echo $services_list_icon['url'] ?>">
						</div>
						<h3><?php echo $services_list_title; ?></h3>
						<?php echo $services_list_text; ?>
					</div>
		<?php
			    endwhile;
		?>
				</div>
		<?php
			}
		?>
	</div>
</div>

<div class="premise_wrapper">
	<?php
		$premise_title = get_field("premise_title");
		$premise_text = get_field("premise_text");
	?>
	<div class="main_container">
		<h2><?php echo $premise_title ?></h2>
		<?php echo $premise_text ?>

		<?php
			if(have_rows('premise_list')){
		?>
				<div class="premise_list">
		<?php
				while( have_rows('premise_list') ) : the_row();
			        $premise_list_title = get_sub_field('premise_list_title');
			        $premise_list_text = get_sub_field('premise_list_text');
		?>
					<div class="premise">
						<h3><?php echo $premise_list_title; ?></h3>
						<?php echo $premise_list_text; ?>
					</div>
		<?php
			    endwhile;
		?>
				</div>
		<?php
			}
		?>
	</div>
</div>

<div class="cloud_solutions_wrapper">
	<?php
		$cloud_solutions_title = get_field("cloud_solutions_title");
		$cloud_solutions_text = get_field("cloud_solutions_text");
	?>
	<div class="main_container">
		<h2><?php echo $cloud_solutions_title ?></h2>
		<?php echo $cloud_solutions_text ?>

		<?php
			if(have_rows('cloud_solutions_list')){
		?>
				<div class="cloud_solutions_list">
		<?php
				while( have_rows('cloud_solutions_list') ) : the_row();
			        $cloud_solutions_list_title = get_sub_field('cloud_solutions_list_title');
			        $cloud_solutions_list_text = get_sub_field('cloud_solutions_list_text');
		?>
					<div class="cloud_solutions">
						<h3><?php echo $cloud_solutions_list_title; ?></h3>
						<?php echo $cloud_solutions_list_text; ?>
					</div>
		<?php
			    endwhile;
		?>
				</div>
		<?php
			}
		?>
	</div>
</div>

<div class="cloud_services_wrapper">
	<?php
		$cloud_services_title = get_field("cloud_services_title");
		$cloud_services_text = get_field("cloud_services_text");
	?>
	<div class="main_container">
		<h2><?php echo $cloud_services_title ?></h2>
		<?php echo $cloud_services_text ?>

		<?php
			if(have_rows('cloud_services_list')){
		?>
				<div class="cloud_services_list">
		<?php
				while( have_rows('cloud_services_list') ) : the_row();
			        $cloud_services_list_title = get_sub_field('cloud_services_list_title');
			        $cloud_services_list_text = get_sub_field('cloud_services_list_text');
		?>
					<div class="cloud_services">
						<h3><?php echo $cloud_services_list_title; ?></h3>
						<?php echo $cloud_services_list_text; ?>
					</div>
		<?php
			    endwhile;
		?>
				</div>
		<?php
			}
		?>
	</div>
</div>

<div class="work_wrapper">
	<?php
		$work_text = get_field("work_text");
		$work_link = get_field("work_link");
	?>
	<div class="main_container">
		<div class="work_wrap">
			<h2><?php echo $work_text ?></h2>
			<a href="<?php echo $work_link ?>">Let's Talk</a>
		</div>
	</div>
</div>

<?php endwhile; ?>		

<?php get_footer(); ?>