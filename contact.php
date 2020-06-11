<?php 
/*
	Template Name: Contact
*/
?>
<?php get_header(); ?>

<div class="wrapper blog contact">

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

<section id="head">
<div class="container">
<div class="row justify-content-center ml-0 mr-0">
			<div class="col-md-10 text-center">
				<p><?php echo get_theme_mod('contact_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?>
				</p>
			</div>
		</div>

</div>


</section>


<!-- Contact section -->

<section id="contact">
    <div class="container padding">
		<div class="row ml-0 mr-0">
			<div class="col-md-12 mb-md-0 mb-5">
				<?php echo do_shortcode( '[contact-form-7 id="59" title="Contact form 1"]' ); ?>
			</div>
		</div>
    </div>
</section>

</div>


<?php get_footer(); ?>