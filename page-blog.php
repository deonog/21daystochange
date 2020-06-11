<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

<div class="wrapper blog">

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


<div class="container blog-content padding">
    <div class="row ml-0 mr-0">


<div class="col-lg-8">
<?php // Display blog posts on any page @ https://m0n.co/l
$temp = $wp_query; $wp_query= null;
$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	<div class="card transition">
		<a href="<?php the_permalink(); ?>">
			<div class="card-img">
				<?php if(has_post_thumbnail()) : ?>
				<?php the_post_thumbnail(); ?>
				<?php endif; ?>
			</div>
			<div class="card-body">
				<div class="blog-info">
					<div class="date">
						<p><i class="far fa-clock"></i> <?php the_time('F j, Y'); ?></p>
					</div>
					<div class="author">
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><i class="fas fa-user"></i> <?php  the_author(); ?></a>
					</div>
				</div>
				<a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
				<p class="card-text">
                    <?php if(is_single()) : ?>
                    <?php the_content(); ?>
                    <?php else : ?>
                    <?php the_excerpt(); ?>
                    <?php endif; ?>
                </p>
				<a href="<?php the_permalink(); ?>" class="read-more-btn">Read more</a>
			</div>
		</a>
	</div>
<?php endwhile; ?>
</div>


<div class="col-lg-3 offset-lg-1 sidebar">
        <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
</div><!-- /.blog-sidebar -->

<?php wp_reset_postdata(); ?>

</div>
</div>

</div>

<?php get_footer(); ?>