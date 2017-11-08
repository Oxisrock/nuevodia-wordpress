			<?php get_header(); ?>
			<div class="main-content mt-20 ov-hidden">
					<div class="col-md-8 sm-padding">
			<section id="main-content" class="main-wrapper mb-40">
				<?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
					<div class="news-block padding-15 bg-white bd-grey mb-40">
				<article class="post resume">
					<header class="post-title">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<small class="meta"><?php the_time( get_option('date_format') ); ?> &bull; <a href=""><?php the_category(', '); ?></a></small>
					</header>
					<div class="post-content">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir Leyendo', 'apk');?> &rarr;</a>
					</div>
				</article>	<!-- article -->
			</div>
				<?php endwhile; endif; ?>
				<?php if (get_next_posts_link() || get_previous_posts_link()): ?>
				<div class="posts-nav cf">
					<?php next_posts_link(__('&larr; Previos', 'apk')); ?>
					<?php previous_posts_link(__('Recientes &rarr;', 'apk')); ?>
				</div>
				<?php endif; ?>

			</section><!-- /#main-content -->
		</div>
			<?php get_sidebar(); ?>

			<?php get_footer(); ?>
