<?php get_header(); ?>
<div class="container">
  <div class="header-author">
    <div class="title-author">
      <h1><?php the_author(); ?></h1>
    </div>
  </div>
    <div class="one-post-author">
      <?php query_posts('showposts=1'); ?>
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
        <?php $post_views = get_post_views(get_the_ID());?>
      <article class="">
        <div class="img-post-author">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="content-post">
        <header class="post-title">
          <h2 class="mb-40"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <small class="meta"><i class="fa fa-user"></i> <a><?php the_author(); ?></a> <?php the_time( get_option('date_format') ); ?>  </small>
        </header>
        <div class="post-content">
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir Leyendo', 'apk');?> &rarr;</a>
        </div>

        <p>Este post ha sido visto <?php  echo sprintf( _n( '%s vez', '%s veces', $post_views, 'your_textdomain' ), $post_views );?></p>
      </div>
      </article>	<!-- article -->
      <?php endwhile; endif; ?>
      <?wp_reset_query();?>
    </div>
    <div class="bottom-author">
    </div>
  <div class="author-container separacion-top">
  <div class="author">
    <div>
        <?php query_posts('posts_per_page=5'); ?>
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
            <?php $post_views = get_post_views(get_the_ID());?>
          <article class="separacion separacion-top">
            <div class="img-post-author">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="content-post">
            <header class="post-title">
              <h2 class="mb-40"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <small class="meta"><i class="fa fa-user"></i> <a><?php the_author(); ?></a> <?php the_time( get_option('date_format') ); ?>  </small>
            </header>
            <div class="post-content">
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir Leyendo', 'apk');?> &rarr;</a>
            </div>

            <p>Este post ha sido visto <?php  echo sprintf( _n( '%s vez', '%s veces', $post_views, 'your_textdomain' ), $post_views );?></p>
          </div>
          </article>	<!-- article -->
          <?php endwhile; endif; ?>
          <?wp_reset_query();?>
    </div>
    <?php if (get_next_posts_link() || get_previous_posts_link()): ?>
    <div class="posts-nav cf">
      <?php next_posts_link(__('&larr; Previos', 'apk')); ?>
      <?php previous_posts_link(__('Recientes &rarr;', 'apk')); ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="asidebar-author">
    <aside id="sidebar" class="sidebar-widgets m-padding">
		  <div class="sidebar-wrap">
		  <?php
		    if (is_active_sidebar('sidebar_post_page')) {
		      dynamic_sidebar('sidebar_post_page');
		    }else { ?>
		      <div class="single-sidebar">
		        <h3 class="fw-8 fz-18 tt-u mb-30"><?php _e('Buscar', 'apk'); ?></h3>
		        <?php get_search_form(); ?>
		      </div>
		  <?php  }?>
		</div>
		</aside><!-- /#sidebar -->
  </div>
</div>
</div>
<?php get_footer(); ?>
