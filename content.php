<div class="col-lg-4">
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
						<a><i class="fas fa-user"></i> <?php  the_author(); ?></a>
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
</div>