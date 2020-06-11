<?php /* Template Name: Challenge */ ?>

<?php get_header(); ?>

<div class="wrapper challenge">

<!-- Header -->

<header>
	<div class="container">
		<div class="row ml-0 mr-0 header-text">
			<div class="col-12">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	</div>
</header>


<!-- Info section -->

<section id="info">
    <div class="container padding">
        <div class="row ml-0 mr-0">
            <div class="col-lg-6 text-center text-lg-left">
                <h2><?php echo get_theme_mod('rules_heading', 'How to participate'); ?></h2>
                <p><?php echo get_theme_mod('rules_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
            </div>
            <div class="col-lg-6">
                <div class="accordion">
                    <div class="accordion-heading" id="accordion-heading">
                        <h5><?php echo get_theme_mod('accordion_heading_one', 'Week 1: Refill your day'); ?></h5>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="accordion-content" id="accordion-content">
						<h5><?php echo get_theme_mod('accordion_content_heading_one', 'Rules'); ?></h5>
						<p><?php echo get_theme_mod('accordion_content_text_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-heading" id="accordion-heading">
                        <h5><?php echo get_theme_mod('accordion_heading_two', 'Week 2: Bring your own bag'); ?></h5>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="accordion-content" id="accordion-content">
						<h5><?php echo get_theme_mod('accordion_content_heading_two', 'Rules'); ?></h5>
						<p><?php echo get_theme_mod('accordion_content_text_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-heading" id="accordion-heading">
                        <h5><?php echo get_theme_mod('accordion_heading_three', 'Week 3: Pack your own lunch'); ?></h5>
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <div class="accordion-content" id="accordion-content">
						<h5><?php echo get_theme_mod('accordion_content_heading_three', 'Rules'); ?></h5>
						<p><?php echo get_theme_mod('accordion_content_text_three', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<!-- Main section -->

<section id="main">
    <div class="container-fluid">
        <div class="row ml-0 mr-0">
            <div class="col-lg-6">
                <img class="img-fluid" src="<?php echo get_theme_mod('row_one_img', get_bloginfo('template_url').'/assets/img/blog-img.png'); ?>" alt="challenge img">
            </div>
            <div class="col-lg-6 text-center text-lg-left text">
				<div>
					<h2><?php echo get_theme_mod('row_one_heading', 'How to participate'); ?></h2>
					<p><?php echo get_theme_mod('row_one_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
				</div>
            </div>
		</div>
		<div class="row ml-0 mr-0">
			<div class="col-lg-6 text-center text-lg-left text2">
				<div>
				<p><?php echo get_theme_mod('row_two_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
				</div>
			</div>
            <div class="col-lg-6">
			<img class="img-fluid" src="<?php echo get_theme_mod('row_two_img', get_bloginfo('template_url').'/assets/img/blog-img.png'); ?>" alt="challenge img">
            </div>
        </div>
    </div>
</section>

<!-- CTA section -->

<section id="cta">
	<div class="container padding">
		<div class="row ml-0 mr-0">
			<div class="col-12 text-center">
				<h3><?php echo get_theme_mod('cta_text_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.'); ?></h3>
			</div>
			<div class="col-12 text-center">
				<a href="https://eia-international.org/" target="_blank" class="btn btn-default btn-lg"><?php echo get_theme_mod('cta_btn_text_one', 'Visit EIA'); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Main section -->

<section id="main">
		<div class="container-fluid">
			<div class="row ml-0 mr-0">
				<div class="col-lg-6">
					<img class="img-fluid" src="<?php echo get_theme_mod('row_three_img', get_bloginfo('template_url').'/assets/img/blog-img.png'); ?>" alt="challenge img">
				</div>
				<div class="col-lg-6 text-center text-lg-left text">
					<div>
						<h2><?php echo get_theme_mod('row_three_heading', 'How to participate'); ?></h2>
						<p><?php echo get_theme_mod('row_three_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
					</div>
				</div>
			</div>
			<div class="row ml-0 mr-0">
				<div class="col-lg-6 text-center text-lg-left text2">
					<div>
					<p><?php echo get_theme_mod('row_four_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
					</div>
				</div>
				<div class="col-lg-6">
					<img class="img-fluid" src="<?php echo get_theme_mod('row_four_img', get_bloginfo('template_url').'/assets/img/blog-img.png'); ?>" alt="challenge img">
				</div>
			</div>
		</div>
	</section>

<!-- CTA section -->

<section id="cta-2">
	<div class="container padding">
		<div class="row ml-0 mr-0">
			<div class="col-12 text-center">
				<h3><?php echo get_theme_mod('cta_text_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.'); ?></h3>
			</div>
			<div class="col-12 text-center">
				<a href="<?php echo get_page_link( get_page_by_title( Blog )->ID ); ?>" class="btn btn-default btn-lg"><?php echo get_theme_mod('cta_btn_text_two', 'Visit EIA'); ?></a>
			</div>
		</div>
	</div>
</section>

</div>

<?php get_footer(); ?>