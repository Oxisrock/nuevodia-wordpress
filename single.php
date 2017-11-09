<?php get_header(); ?>
<div class="container">
<div class="main-content mt-20 ov-hidden">
		<div class="col-md-8 sm-padding">
			<section id="main-content">

        <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>

				<article class="post">
          <header class="post-title">
						<h1><?php the_title(); ?></h1>
						<small class="meta"><?php the_time( get_option('date_format') ); ?> &bull; <a href=""><?php the_category(', '); ?></a></small>
					</header>

					<div class="post-content">
						<?php the_content(); ?>
					</div>
				</article>	<!-- article -->
        <?php endwhile; endif; ?>

				<div id="comments-area">

          <?php comments_template(); ?>

				</div><!-- #comments-area -->


			</section><!-- /#main-content -->
		</div>
      <?php get_sidebar(); ?>
</div>
      <?php get_footer(); ?>
