<?php get_header(); ?>

<div class="wrapper blog">

<header>
	<div class="container">
		<div class="row ml-0 mr-0 header-text">
			<div class="col-12">
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle">Author Archive</h1>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle">Blog Archives</h1>
				<?php } ?>
			</div>
		</div>
	</div>
</header>


<div class="container padding">
    <div class="row ml-0 mr-0">


<div class="col-lg-8 blog-content">
<?php // Display blog posts on any page 
$temp = $wp_query; $wp_query= null;
$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5' . '&paged='.$paged);
while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	<div class="card transition">
		<a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
            <?php endif; ?>
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