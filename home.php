<?php get_header(); ?>
<br>
<div class="main-content mt-20 ov-hidden">
  <div class="container">
    <div class="autoplay">
      <!-- <?php query_posts('showposts=5'); ?>
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
    <div><?php the_post_thumbnail(); ?></div>
    <?php endwhile; endif; ?> -->
    <?php // mostrar 1 post por cada categoria
    $categories=get_categories('orderby=name&order=ASC');
     foreach($categories as $category) {
     $posts=get_posts('showposts=1&cat='. $category->term_id);
     if ($posts) {
      foreach($posts as $post) {
       setup_postdata($post); ?>
       <div><?php the_post_thumbnail(); ?></div>
       <!-- <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p> -->
      <?php
      } // fin foreach posts
     } // fin if
    } // fin foreach categories
    ?>
  </div>
  <br>
     <div class="banner bg-white mb-10">
          <?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
      </div>
    <div class="col-md-8 sm-padding">
<section id="main-content" class="main-wrapper mb-40">
<!-- <?php // mostrar 1 post por cada categoria
$categories=get_categories('orderby=name&order=ASC');
 foreach($categories as $category) {
 $posts=get_posts('showposts=1&cat='. $category->term_id);
 if ($posts) {
  foreach($posts as $post) {
   setup_postdata($post); ?>
   <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
  <?php
  } // fin foreach posts
 } // fin if
} // fin foreach categories
?> -->
  <!-- <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
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
  </article>
</div>
  <?php endwhile; endif; ?> -->
  <div class="news-block padding-15 bg-white bd-falcon mb-40">
      <h2 class="block-falcon mb-40">FALCÓN</h2>
      <?php query_posts('category_name=regionales&showposts=4'); ?>
       <?php $count = 1;?>
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
      <div class="two-col-posts">
          <div class="col-md-6 padding-10">
              <?php if ($count == 1) : ?>
              <div class="grid">
                  <figure class="effect-marley">
                    <?php the_post_thumbnail(); ?>
                      <figcaption>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_time( get_option('date_format') ); ?> ,| <?php the_time( get_option('time') ); ?> </p>
                          <p><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </figcaption>
                  </figure>
                  <?php $count++; ?>
              </div>
                <?php else : ?>
                    <div class="sm-post-item">
        <div class="grid-mini">
            <figure class="effect-marley-mini">
                <?php the_post_thumbnail(); ?>
                  <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></p>
                    <a href="<?php the_permalink(); ?>">Ver mas</a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <?php endif; ?>
          </div>
      </div>
      <?php endwhile; endif; ?>
  </div><!-- .news-block -->
  <div class="banner-in-content bg-white bd-ads ov-hidden mb-40">
      <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
  </div>
  <div class="news-block padding-15 bg-white bd-sucesos mb-40">
      <h2 class="block-sucesos mb-40">Sucesos</h2>
      <?php query_posts('category_name=sucesos&showposts=4'); ?>
       <?php $count = 1;?>
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
      <div class="two-col-posts">
          <div class="col-md-6 padding-10">
              <?php if ($count == 1) : ?>
              <div class="grid">
                  <figure class="effect-marley">
                    <?php the_post_thumbnail(); ?>
                      <figcaption>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_time( get_option('date_format') ); ?> ,| <?php the_time( get_option('time') ); ?> </p>
                          <p><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </figcaption>
                  </figure>
                  <?php $count++; ?>
              </div>
                <?php else : ?>
                    <div class="sm-post-item">
        <div class="grid-mini">
            <figure class="effect-marley-mini">
                <?php the_post_thumbnail(); ?>
                  <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></p>
                    <a href="<?php the_permalink(); ?>">Ver mas</a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <?php endif; ?>
          </div>
      </div>
      <?php endwhile; endif; ?>
  </div><!-- .news-block -->
  <div class="sm-ads-item ov-hidden">

  </div>
  <div class="news-block padding-15 bg-white bd-nacionales mb-40">
      <h2 class="block-nacionales mb-40">Nacionales</h2>
      <?php query_posts('category_name=nacionales&showposts=4'); ?>
       <?php $count = 1;?>
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
      <div class="two-col-posts">
          <div class="col-md-6 padding-10">
              <?php if ($count == 1) : ?>
              <div class="grid">
                  <figure class="effect-marley">
                    <?php the_post_thumbnail(); ?>
                      <figcaption>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_time( get_option('date_format') ); ?> ,| <?php the_time( get_option('time') ); ?> </p>
                          <p><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </figcaption>
                  </figure>
                  <?php $count++; ?>
              </div>
                <?php else : ?>
                    <div class="sm-post-item">
        <div class="grid-mini">
            <figure class="effect-marley-mini">
                <?php the_post_thumbnail(); ?>
                  <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></p>
                    <a href="<?php the_permalink(); ?>">Ver mas</a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <?php endif; ?>
          </div>
      </div>
      <?php endwhile; endif; ?>
  </div><!-- .news-block -->
  <!-- .Mini-banner-ads -->
      <div class="two-col-posts">
                  <div class="sm-post-item">

          <div class="col-md-6 padding-1">
              <div class="small-posts">
                  <div class="sm-ads-item ov-hidden">
      <a href="#"><img src="img/minibanner.jpg" alt="Banner AD"></a>

                  </div>

              </div>
          </div>

          <div class="col-md-6 padding-1">
              <div class="small-posts">
                  <div class="sm-ads-item ov-hidden">
      <a href="#"><img src="img/minibanner.jpg" alt="Banner AD"></a>

                  </div>

              </div>
          </div>

      </div>
  </div>
  <!-- .Mini-banner-ads -->
  <div class="news-block padding-15 bg-white bd-inter mb-40">
      <h2 class="block-inter mb-40">Internacionales</h2>
      <?php query_posts('category_name=internacionales&showposts=4'); ?>
       <?php $count = 1;?>
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
      <div class="two-col-posts">
          <div class="col-md-6 padding-10">
              <?php if ($count == 1) : ?>
              <div class="grid">
                  <figure class="effect-marley">
                    <?php the_post_thumbnail(); ?>
                      <figcaption>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_time( get_option('date_format') ); ?> ,| <?php the_time( get_option('time') ); ?> </p>
                          <p><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </figcaption>
                  </figure>
                  <?php $count++; ?>
              </div>
                <?php else : ?>
                    <div class="sm-post-item">
        <div class="grid-mini">
            <figure class="effect-marley-mini">
                <?php the_post_thumbnail(); ?>
                  <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></p>
                    <a href="<?php the_permalink(); ?>">Ver mas</a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <?php endif; ?>
          </div>
      </div>
      <?php endwhile; endif; ?>
  </div><!-- .news-block -->
  <div class="news-block padding-15 bg-white bd-deportes mb-40">
      <h2 class="block-deportes mb-40">Deportes</h2>
      <?php query_posts('category_name=deportes&showposts=4'); ?>
       <?php $count = 1;?>
      <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
      <div class="two-col-posts">
          <div class="col-md-6 padding-10">
              <?php if ($count == 1) : ?>
              <div class="grid">
                  <figure class="effect-marley">
                    <?php the_post_thumbnail(); ?>
                      <figcaption>
                          <h2><?php the_title(); ?></h2>
                          <p><?php the_time( get_option('date_format') ); ?> ,| <?php the_time( get_option('time') ); ?> </p>
                          <p><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </figcaption>
                  </figure>
                  <?php $count++; ?>
              </div>
                <?php else : ?>
                    <div class="sm-post-item">
        <div class="grid-mini">
            <figure class="effect-marley-mini">
                <?php the_post_thumbnail(); ?>
                  <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></p>
                    <a href="<?php the_permalink(); ?>">Ver mas</a>
                  </figcaption>
                </figure>
              </div>
            </div>
            <?php endif; ?>
          </div>
      </div>
      <?php endwhile; endif; ?>
  </div><!-- .news-block -->
  <!-- <?php if (get_next_posts_link() || get_previous_posts_link()): ?>
  <div class="posts-nav cf">
    <?php next_posts_link(__('&larr; Previos', 'apk')); ?>
    <?php previous_posts_link(__('Recientes &rarr;', 'apk')); ?>
  </div> -->
  <?php endif; ?>

</section><!-- /#main-content -->
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
