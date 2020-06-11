<?php get_header(); ?>
<?php
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );
?>

<div class="wrapper single">
<div class="post-img">
    <div class="overlay">
    <div class="container">
        <div class="row ml-0 mr-0">
            <div class="col-12">
                <h1 class="post-title-heading">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
    </div>
    <?php if(has_post_thumbnail()) : ?>
    <?php the_post_thumbnail(); ?>
    <?php endif; ?>
</div>

<div class="container padding">
    <div class="row ml-0 mr-0">
        <div class="col-lg-8 blog-main">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="blog-post">
                <div class="blog-post-meta">
                     <p>By <a class="author"><?php  the_author(); ?></a></p>
                     <hr>
                     <div class="post-meta-second">
                        <p>Posted on <?php the_time('F j, Y'); ?></p>
                        <div class="post-social-media">
                                <a class="twitter-share-button"
                                href="https://twitter.com/share?url=<?php $current_url ?>">
                                <i class="fab fa-twitter"></i></a>
                            </div>
                    </div>
                     <hr>
                </div>
                <p><?php the_content(); ?></p>
            </div><!-- /.blog-post -->
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Page Found'); ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-3 offset-lg-1 text-center text-lg-left sidebar">
              <?php if(is_active_sidebar('sidebar')) : ?>
                  <?php dynamic_sidebar('sidebar'); ?>
              <?php endif; ?>
        </div><!-- /.blog-sidebar -->
    </div>
    <div class="row ml-0 mr-0">
        <div class="col-lg-8">
            <?php if(is_single()) : ?>
            <?php comments_template(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

</div>


<?php get_footer(); ?>