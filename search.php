<?php get_header(); ?>

<div class="wrapper search">

<header>
	<div class="container">
		<div class="row ml-0 mr-0 header-text">
			<div class="col-12">
				<h1>
				<?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
			</div>
		</div>
	</div>
</header>



<div class="container padding">
    <div class="row ml-0 mr-0">
        <div class="col-lg-8">
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'search'); ?>
			
			<?php endwhile;
			
		endif;
				
		?>
        </div>
        <div class="col-lg-3 offset-lg-1 sidebar">
              <?php if(is_active_sidebar('sidebar')) : ?>
                  <?php dynamic_sidebar('sidebar'); ?>
              <?php endif; ?>
        </div><!-- /.blog-sidebar -->
    </div>
</div>

<?php get_footer(); ?>