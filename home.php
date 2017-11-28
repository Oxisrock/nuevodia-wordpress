<?php get_header(); ?>
<br>
<div class="main-content ov-hidden">
  <div class="container">
    <div class="slider-nav">
      <a class="next-btn" style="height: 100%;">
      </a>
      <a class="prev-btn" style="height: 100%;">
      </a>
      <div id="carrusel">
        <?php // mostrar 1 post por cada categoria
        $categories=get_categories('orderby=name&order=ASC');
        foreach($categories as $category) {
          if ($category->term_id != 1) {
            $posts=get_posts('showposts=1&cat='. $category->term_id);
            if ($posts) {
              foreach($posts as $post) {
                setup_postdata($post); ?>
                <div class="carousel">
                  <a href="<?php the_permalink(); ?>">
                    <div class="slider-img"><?php the_post_thumbnail(); ?></div>
                    <!-- <p style="color: #000; font-size: 6em;"><?= $category->name ?></p> -->
                    <div class="picture-caption-fixed">
                      <h2 class="margin-top-5 margin-bottom-5 font-weight-200"><?php the_title(); ?></h2>
                    </div>
                    <!-- <p style="color: #000;"><?php the_time( get_option('date_format') ); ?> </p> -->
                  </a>
                </div>
                <!-- <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p> -->
                <?php
              } // fin foreach posts
            } // fin if
          } // id 1
        } // fin foreach categories
        ?>
      </div>
    </div>
    <!-- <div class="owl-nav"><div class="owl-prev-btn">prev</div><div class="owl-next-btn">next</div></div> -->
    <br>
    <div class="banner bg-white mb-10">
      <?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
    </div>
    <div class="col-md-8 sm-padding">
      <section id="main-content" class="main-wrapper mb-20">
        <div class="news-block padding-15 bg-white bd-falcon mb-20">
          <h2 class="block-falcon mb-20">FALCÓN</h2>
          <?php query_posts('category_name=falcon&showposts=4'); ?>
          <?php $count = 1;?>
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
            <div class="two-col-posts">
              <div class="col-md-6 padding-05">
                <?php if ($count == 1) : ?>
                  <div class="grid">
                    <figure class="effect-marley">
                      <?php the_post_thumbnail(); ?>
                      <figcaption>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <h3><?php the_time( get_option('date_format') ); ?> ,| <?php the_time( get_option('time') ); ?> </h3>
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
                          <h2 class="title"><?php the_title(); ?></h2>
                          <p><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></h3>
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
          <div class="banner-in-content bg-white bd-ads ov-hidden mb-20">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="news-block padding-15 bg-white bd-sucesos mb-20">
            <h2 class="block-sucesos mb-20">Sucesos</h2>
            <?php query_posts('category_name=sucesos&showposts=4'); ?>
            <?php $count = 1;?>
            <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
              <div class="two-col-posts">
                <div class="col-md-6 padding-05">
                  <?php if ($count == 1) : ?>
                    <div class="grid">
                      <figure class="effect-marley">
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                          <h2 class="title" ><?php the_title(); ?></h2>
                          <h3><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></h3>
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
                            <h2 class="title"><?php the_title(); ?></h2>
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
                    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 184 ); } ?>
                  </div>

                </div>
              </div>

              <div class="col-md-6 padding-1">
                <div class="small-posts">
                  <div class="sm-ads-item ov-hidden">

                    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 186 ); } ?>

                  </div>

                </div>
              </div>

            </div>
          </div>
          <!-- .Mini-banner-ads -->
          <div class="news-block padding-15 bg-white bd-nacionales mb-20">
            <h2 class="block-nacionales mb-20">Nacionales</h2>
            <?php query_posts('category_name=nacionales&showposts=4'); ?>
            <?php $count = 1;?>
            <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
              <div class="two-col-posts">
                <div class="col-md-6 padding-05">
                  <?php if ($count == 1) : ?>
                    <div class="grid">
                      <figure class="effect-marley">
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                          <h2 class="title"><?php the_title(); ?></h2>
                          <h3><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></h3>
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
                            <h2 class="title"><?php the_title(); ?></h2>
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
          <div class="banner-in-content bg-white bd-ads ov-hidden mb-20">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="news-block padding-15 bg-white bd-inter mb-20">
            <h2 class="block-inter mb-20">Internacionales</h2>
            <?php query_posts('category_name=internacionales&showposts=4'); ?>
            <?php $count = 1;?>
            <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
              <div class="two-col-posts">
                <div class="col-md-6 padding-05">
                  <?php if ($count == 1) : ?>
                    <div class="grid">
                      <figure class="effect-marley">
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                          <h2 class="title"><?php the_title(); ?></h2>
                          <h3><?php the_time( get_option('date_format') ); ?> | <?php the_time( get_option('time') ); ?></h3>
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
                            <h2 class="title"><?php the_title(); ?></h2>
                            <p><?php the_time( get_option('date_format') ); ?></p>
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
                    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 184 ); } ?>
                  </div>

                </div>
              </div>

              <div class="col-md-6 padding-1">
                <div class="small-posts">
                  <div class="sm-ads-item ov-hidden">

                    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 186 ); } ?>

                  </div>

                </div>
              </div>

            </div>
          </div>
          <!-- .Mini-banner-ads -->
          <div class="news-block padding-15 bg-white bd-deportes mb-20">
            <h2 class="block-deportes mb-20">Deportes</h2>
            <?php query_posts('category_name=deportes&showposts=4'); ?>
            <?php $count = 1;?>
            <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
              <div class="two-col-posts">
                <div class="col-md-6 padding-05">
                  <?php if ($count == 1) : ?>
                    <div class="grid">
                      <figure class="effect-marley">
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                          <h2 class="title"><?php the_title(); ?></h2>
                          <h3><?php the_time( get_option('date_format') ); ?></h3>
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
                            <h2 class="title"><?php the_title(); ?></h2>
                            <p class="titlelast"><?php the_time( get_option('date_format') ); ?></p>
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
          <div class="banner-in-content bg-white bd-ads ov-hidden mb-20">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="esp">
            <div class="news-block bd-espectaculos mb-40 padding-15 ml-5">
              <h2 class="block-espectaculos mb-40">ESPECTACULOS</h2>
              <?php $count = 1;?>
              <?php query_posts('category_name=espectaculos&showposts=3'); ?>
              <div class="three-col-post">
                <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                    <div class="">
                      <div class="card mp-40">
                        <?php if ($count == 1) : ?>
                          <?php the_post_thumbnail(); ?>
                          <h4><?php the_title(); ?></h4>
                          <p><i class="fa fa-calendar-o" aria-hidden="true"></i></p>
                          <?php $count++; ?>
                        <?php else : ?>
                          <h4><?php the_title(); ?></h4>
                          <p><i class="fa fa-calendar-o" aria-hidden="true"></i></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </a>
                <?php endwhile; endif; ?>

              </div>
            </div>
            <div class="news-block bd-ciencia mb-40 padding-15 md-5">
              <h2 class="block-ciencia mb-40">CIENCIA Y TECNOLOGIA</h2>
              <?php $count = 1;?>
              <?php query_posts('category_name=ciencia-y-tecnologia&showposts=3'); ?>
              <div class="three-col-post">
                <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                    <div class="">
                      <div class="card mp-40">
                        <?php if ($count == 1) : ?>
                          <?php the_post_thumbnail(); ?>
                          <h4><?php the_title(); ?></h4>
                          <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
                          <?php $count++; ?>
                        <?php else : ?>
                          <h4><?php the_title(); ?></h4>
                          <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                  </a>
                <?php endwhile; endif; ?>

              </div>
            </div>
          </div>
          <!-- .Mini-banner-ads -->
          <div class="two-col-posts">
            <div class="sm-post-item">

              <div class="col-md-6">
                <div class="small-posts">
                  <div class="sm-ads-item ov-hidden">
                    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 184 ); } ?>
                  </div>

                </div>
              </div>

              <div class="col-md-6">
                <div class="small-posts">
                  <div class="sm-ads-item ov-hidden">

                    <?php if ( function_exists( 'easingslider' ) ) { easingslider( 186 ); } ?>

                  </div>

                </div>
              </div>

            </div>
          </div>
          <!-- .Mini-banner-ads -->
          <div class="news-block padding-15 bg-white bd-opinion mb-40">
            <h2 class="block-opinion mb-40">OPINIóN</h2>
            <?php query_posts('category_name=opinion&showposts=3'); ?>
            <div class="three-col-post">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                  <div class="col-lg-4">
                    <div class="card mp-40">
                      <?php the_post_thumbnail(); ?>
                      <h4><?php the_title(); ?></h4>
                      <p><?php the_time( get_option('date_format') ); ?> </p>
                    </div>
                  </div>
                </a>
              <?php endwhile; endif; ?>
              
            </div>
          </div>
          <!-- banner-ads -->
          <div class="banner-in-content bg-white bd-ads ov-hidden mb-20">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <!-- banner-ads -->
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
