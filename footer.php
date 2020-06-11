<!-- Footer -->

<footer>
	<div class="container first">
		<div class="row justify-content-md-center ml-0 mr-0">
			<div class="col-md-10 col-lg-4 text-center text-lg-left">
				<div class="logos">
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-small.svg" alt="21daystochange logo"></a>
					<a class="eia" href="https://eia-international.org/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/eia-logo.svg" alt="eia logo"></a>
					<p><?php echo get_theme_mod('footer_paragraph', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id lacus a enim lobortis'); ?></p>
				</div>
				<div class="social-media">
					<a href="https://www.instagram.com/21daystochangeuk/" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://twitter.com/21daystochange_" target="_blank"><i class="fab fa-twitter"></i></a>
					<a href="https://www.youtube.com/channel/UCkehI07akNB0hMyEnCJagqg?view_as=subscriber" target="_blank"><i class="fab fa-youtube" target="_blank"></i></a>
				</div>
			</div>
			<div class="col-lg-3 text-center footer-links offset-md-1">
        <?php wp_nav_menu( array(
              'theme_location' => 'header-menu'
          ) ); ?>
			</div>
			<div class="col-sm-6 col-md-8 col-lg-4 text-center offset-md-1 newsletter">
				<h4 class="text-lg-left newsletter-heading">Subscribe to our newsletter</h4>
				<?php echo get_theme_mod('mailchimp_footer_script', '<!-- Begin Mailchimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                #mc_embed_signup{background:none; clear:left; font:14px Helvetica,Arial,sans-serif; }
                /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
            </style>
            <div id="mc_embed_signup">
            <form action="https://gmail.us4.list-manage.com/subscribe/post?u=a7eda82c4d9503d494b8ff1c3&amp;id=79432588e1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                <label for="mce-EMAIL">Subscribe</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a7eda82c4d9503d494b8ff1c3_79432588e1" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>'); ?>
			</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="container second">
		<div class="row ml-0 mr-0">
			<div class="col-12 text-center text-lg-right">
				<p>©2020 Concept 4 Digital. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>

    <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
	<script>
</script>

</body>
</html>

