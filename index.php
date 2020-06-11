<?php get_header(); ?>

<header class="container-fluid" id="home">
	<div class="row ml-0 mr-0  header-home">
		<div class="col-12">
			<h1>
			<?php echo get_theme_mod('header_heading', '<strong>Together</strong><br>we can <strong>stop</strong><br>using <strong>plastic</strong>'); ?>
			</h1>
			<a href="<?php echo get_page_link( get_page_by_title( Challenge )->ID ); ?>" class="btn btn-lg header-btn">Join the challenge</a>
		</div>
	</div>
	<div class="row justify-content-center box bounce scroll-indicator">
		<a id="scroll-down-btn"><img src="<?php bloginfo('template_url'); ?>/assets/icons/scroll-down.svg"><a>
	</div>
</header>

<!-- Challenges section-->

<section class="container-fluid" id="challenges">
	<div class="row ml-0 mr-0">
		<div class="col-sm-12 col-md-4 text-center">
    <img src="<?php echo get_theme_mod('icon_one', get_bloginfo('template_url').'/assets/icons/bottle.svg'); ?>" alt="refill your bottle icon">
			<h4><?php echo get_theme_mod('heading_one', 'Refill your day'); ?></h4>
			<p><?php echo get_theme_mod('paragraph_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.'); ?></p>
		</div>
		<div class="col-md-4 text-center">
	<img src="<?php echo get_theme_mod('icon_two', get_bloginfo('template_url').'/assets/icons/plastic-bag.svg'); ?>" alt="bring your back icon">
			<h4><?php echo get_theme_mod('heading_two', 'Refill your day'); ?></h4>
			<p><?php echo get_theme_mod('paragraph_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.'); ?></p>
		</div>
		<div class="col-md-4 text-center">
	<img src="<?php echo get_theme_mod('icon_three', get_bloginfo('template_url').'/assets/icons/lunch-box.svg'); ?>" alt="pack your lunch icon">
			<h4><?php echo get_theme_mod('heading_three', 'Refill your day'); ?></h4>
			<p><?php echo get_theme_mod('paragraph_three', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat.'); ?></p>
		</div>
	</div>
</section>

<!-- Introduction section-->

<section id="introduction">
	<div class="container padding">
		<div class="row ml-0 mr-0 justify-content-lg-center">
			<div class="col-lg-6 text-center text-lg-left content">
				<h2><?php echo get_theme_mod('intro_heading_one', '21 Days to Change'); ?></h2>
				<hr>
				<h4><?php echo get_theme_mod('intro_subheading_one', 'Join the Challenge'); ?></h4>
				<p><?php echo get_theme_mod('intro_paragraph_one', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit'); ?></p>
				<a href="<?php echo get_page_link( get_page_by_title( Challenge )->ID ); ?>" class="btn btn-default btn-lg"><?php echo get_theme_mod('intro_btn_text_one', 'Find out more'); ?></a>
			</div>
			<div class="col-lg-6 text-center text-lg-left content">
				<h2><?php echo get_theme_mod('intro_heading_two', 'Meet EIA'); ?></h2>
				<hr>
				<h4><?php echo get_theme_mod('intro_subheading_two', 'Our partner against plastic pollution'); ?></h4>
				<p><?php echo get_theme_mod('intro_paragraph_two', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit'); ?></p>
				<a href="https://eia-international.org/" target="_blank" class="btn btn-default btn-lg"><?php echo get_theme_mod('intro_btn_text_two', 'Visit EIA'); ?></a>
			</div>
		</div>
	</div>
</section>

<!-- Video section -->

<section id="video">
	<div class="container padding">
		<div class="row justify-content-md-center ml-0 mr-0">
			<div class="col-md-10 col-lg-6 text-center text-lg-left">
				<h2><?php echo get_theme_mod('video_heading', 'Our Videoblog'); ?></h2>
				<hr>
				<h4><?php echo get_theme_mod('video_subheading', 'Follow the official series'); ?></h4>
				<p><?php echo get_theme_mod('video_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor.'); ?></p>
				<a href="<?php echo get_theme_mod('video_btn_url', 'https://www.youtube.com/'); ?>" target="_blank" class="btn btn-default btn-lg"><?php echo get_theme_mod('video_btn_text', 'Find out more'); ?></a>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<iframe width="560" height="315" src="<?php echo get_theme_mod('video_link', 'https://www.youtube.com/embed/cTtc90jCULU'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<!-- Statistics section-->

<section id="statistics">
	<div class="container padding">
		<div class="row justify-content-md-center ml-0 mr-0">
			<div class="col-md-10 col-lg-6 text-center heading">
				<h2><?php echo get_theme_mod('stats_heading', 'Statistics on <span class="orange">plastic pollution</span>'); ?></h2>
				<p><?php echo get_theme_mod('stats_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor.'); ?></p>
			</div>
		</div>
		<div class="row justify-content-lg-center ml-0 mr-0">
			<div class="col-md-3 col-lg-2 text-center">
      			<img src="<?php echo get_theme_mod('stats_icon_one', get_bloginfo('template_url').'/assets/icons/bottle-empty.svg'); ?>" alt="stat icon">
				<h4><?php echo get_theme_mod('stat_heading_one', '<span class="orange">One</span> million'); ?></h4>
				<h6><?php echo get_theme_mod('stat_paragraph_one', 'plastic bottles are purchased every minute'); ?></h6>
			</div>
			<div class="col-md-3 col-lg-2 text-center offset-lg-1">
      			<img src="<?php echo get_theme_mod('stats_icon_two', get_bloginfo('template_url').'/assets/icons/umbrella.svg'); ?>" alt="stat icon">
				<h4><?php echo get_theme_mod('stat_heading_two', '<span class="orange">One</span> million'); ?></h4>
				<h6><?php echo get_theme_mod('stat_paragraph_two', 'plastic bottles are purchased every minute'); ?></h6>
			</div>
			<div class="col-md-3 col-lg-2 text-center offset-lg-1">
      			<img src="<?php echo get_theme_mod('stats_icon_three', get_bloginfo('template_url').'/assets/icons/smoothie.svg'); ?>" alt="stat icon">
				<h4><?php echo get_theme_mod('stat_heading_three', '<span class="orange">One</span> million'); ?></h4>
				<h6><?php echo get_theme_mod('stat_paragraph_three', 'plastic bottles are purchased every minute'); ?></h6>
			</div>
			<div class="col-md-3 col-lg-2 text-center offset-lg-1">
				<img src="<?php echo get_theme_mod('stats_icon_four', get_bloginfo('template_url').'/assets/icons/turtle.svg'); ?>" alt="stat icon">
				<h4><?php echo get_theme_mod('stat_heading_four', '<span class="orange">One</span> million'); ?></h4>
				<h6><?php echo get_theme_mod('stat_paragraph_four', 'plastic bottles are purchased every minute'); ?></h6>
			</div>
		</div>
	</div>
</section>

<!-- Blog section-->



<section id="blog">
	<div class="container padding">
		<div class="row ml-0 mr-0">
			<div class="col-12 text-center text-lg-left heading">
				<h2><?php echo get_theme_mod('blog_heading', 'Blog'); ?></h2>
				<hr>
				<h4><?php echo get_theme_mod('blog_subheading', 'Latest news and stories'); ?></h4>
			  </div>
			  
			<?php 
			// the query
			$the_query = new WP_Query( array(
				'posts_per_page' => 3,
			)); 
			?>

			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<?php else : ?>
			<p><?php __('No Blog Posts found'); ?></p>
			<?php endif; ?>
      
		</div>
		<div class="row ml-0 mr-0">
			<div class="col-12 text-center all-posts-btn">
				<a href="<?php echo get_page_link( get_page_by_title( Blog )->ID ); ?>" class="read-more-btn">See all blog posts</a>
			</div>
		</div>
	</div>
</section>

<!-- Team section -->

<section id="team">
		<div class="container padding">
			<div class="row justify-content-center ml-0 mr-0">
				<div class="col-12 text-center text-lg-left heading">
					<h2><?php echo get_theme_mod('team_heading', 'We are Concept 4 Digital!'); ?></h2>
					<hr>
					<h4><?php echo get_theme_mod('team_subheading', 'A start-up against plastic'); ?></h4>
				</div>
			<div class="col-md-10 col-lg-8 text-center team-introduction">
					<p>
						<?php echo get_theme_mod('team_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?>
					</p>
			</div>
			</div>
			<div class="row justify-content-center ml-0 mr-0 team-member">
				<div class="col-md-2 text-center">
					<img src="<?php echo get_theme_mod('member_one_img', get_bloginfo('template_url').'/assets/img/dom-img.png'); ?>" alt="teammember img">
					<p><?php echo get_theme_mod('member_one_name', 'John Doe'); ?> <br>
					<span><?php echo get_theme_mod('member_one_title', 'Project Manager'); ?></span>
					</p>
				</div>
				<div class="col-md-2 text-center offset-md-1">
        			<img src="<?php echo get_theme_mod('member_two_img', get_bloginfo('template_url').'/assets/img/can-img.png'); ?>" alt="teammember img">
					<p><?php echo get_theme_mod('member_two_name', 'John Doe'); ?> <br>
					<span><?php echo get_theme_mod('member_two_title', 'Project Manager'); ?></span>
					</p>
				</div>
				<div class="col-md-2 text-center offset-md-1">
        			<img src="<?php echo get_theme_mod('member_three_img', get_bloginfo('template_url').'/assets/img/margarita-img.png'); ?>" alt="teammember img">
					<p><?php echo get_theme_mod('member_three_name', 'John Doe'); ?> <br>
					<span><?php echo get_theme_mod('member_three_title', 'Project Manager'); ?></span>
					</p>
				</div>
			</div>
			<div class="row justify-content-center ml-0 mr-0 team-member">
				<div class="col-md-2 text-center">
        			<img src="<?php echo get_theme_mod('member_four_img', get_bloginfo('template_url').'/assets/img/jenny-img.png'); ?>" alt="teammember img">
					<p><?php echo get_theme_mod('member_four_name', 'John Doe'); ?> <br>
					<span><?php echo get_theme_mod('member_four_title', 'Project Manager'); ?></span>
					</p>
				</div>
				<div class="col-md-2 text-center offset-md-1 last">
        			<img src="<?php echo get_theme_mod('member_five_img', get_bloginfo('template_url').'/assets/img/deon-img.png'); ?>" alt="teammember img">
					<p><?php echo get_theme_mod('member_five_name', 'John Doe'); ?> <br>
					<span><?php echo get_theme_mod('member_five_title', 'Project Manager'); ?></span>
					</p>
				</div>
			</div>
	</div>
</section>



<!-- Contact section -->

<section id="contact">
	<div class="container padding">
		<div class="col-12 text-center text-lg-left heading">
			<h2><?php echo get_theme_mod('contact_heading', 'Contact'); ?></h2>
			<hr>
			<h4><?php echo get_theme_mod('contact_subheading', 'Send us a message!'); ?></h4>
		</div>
        <!--Grid column-->
        <div class="col-md-12 mb-md-0 mb-5">
		
		<?php echo do_shortcode( '[contact-form-7 id="59" title="Contact form 1"]' ); ?>

	</div>
</section>



<?php get_footer(); ?>