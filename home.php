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
                    <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                    $url = wp_get_attachment_url( $post_thumbnail_id);
                    ?>
                    <div class="slider-img" style="background-image: url(<?php echo $url; ?>);">

                    </div>
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
    <div class="banner bg-white separacion">
      <?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
    </div>
    <div class="home">
      <div class="section sm-padding">
        <section id="main-content" class="main-wrapper mb-20">
          <div class="news-block padding-15 bg-white bd-falcon separacion">
            <h2 class="block-falcon mb-20">FALCÓN</h2>
            <?php query_posts('category_name=falcon&showposts=3'); ?>
            <?php $count = 1;?>
            <div class="section-falcon">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <?php if ($count == 1) : ?>
                  <div class="section-falcon-one grid">
                    <figure class="effect-marley">
                      <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                      $url = wp_get_attachment_url( $post_thumbnail_id);
                      ?>
                      <div class="img-post-falcon-one" style="background-image: url(<?php echo $url; ?>);">
                        <figcaption>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <h3><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </figcaption>
                      </div>
                    </figure>
                    <?php $count++; ?>
                  </div>
                  <div class="section-falcon-two">
                  <?php else : ?>
                    <figure class="">
                      <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                      $url = wp_get_attachment_url( $post_thumbnail_id);
                      ?>
                      <div class="img-post-falcon-two" style="background-image: url(<?php echo $url; ?>);">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
                        <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </div>
                    </figure>
                  <?php endif; ?>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div><!-- .news-block -->
          <div class="banner-in-content bg-white bd-ads ov-hidden separacion">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="news-block padding-15 bg-white bd-sucesos separacion">
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
                          <h3><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></h3>
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
                            <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
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
          <div class="two-col-posts separacion">
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
          <div class="news-block padding-15 bg-white bd-nacionales separacion">
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
                          <h3><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></h3>
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
                            <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
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
          <div class="banner-in-content bg-white bd-ads ov-hidden separacion">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="news-block padding-15 bg-white bd-inter separacion">
            <div class="btn-inter-next" style="height: 100%;">
              <a class="next-btn-inter">
                <i class="fa fa-chevron-right fa-2x"></i>
              </a>
            </div>
            <div class="btn-inter-prev" style="height: 100%;">
              <a class="prev-btn-inter">
                <i class="fa fa-chevron-left fa-2x"></i>
              </a>
            </div>
            <h2 class="block-inter mb-40">INTERNACIONALES</h2>
            <?php query_posts('category_name=internacionales&showposts=6'); ?>
            <div class="slider_post_inter section-inter">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <!-- <a href="<?php the_permalink(); ?>"> -->
                  <div class="section-inter-post">
                    <div class="card mp-40">
                      <a href="<?php the_permalink(); ?>">
                      <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                      $url = wp_get_attachment_url( $post_thumbnail_id);
                      ?>
                      <div class="img-post-inter" style="background-image:url(<?php echo $url; ?>);"></div>
                      </a>
                      <h4 class="text-left"><?php the_title(); ?></h4>
                      <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
                    </div>
                  </div>
                <!-- </a> -->
              <?php endwhile; endif; ?>

            </div>
          </div>
          <!-- .Mini-banner-ads -->
          <div class="minibanners separacion">
            <div class="sm-ads-item ov-hidden minibanner">
              <?php if ( function_exists( 'easingslider' ) ) { easingslider( 184 ); } ?>
            </div>
            <div class="sm-ads-item ov-hidden minibanner2">

              <?php if ( function_exists( 'easingslider' ) ) { easingslider( 186 ); } ?>

            </div>
          </div>
          <!-- .Mini-banner-ads -->
          <div class="news-block padding-15 bg-white bd-deportes separacion">
            <h2 class="block-deportes mb-20">Deportes</h2>
            <?php query_posts('category_name=deportes&showposts=4'); ?>
            <?php $count = 1;?>
            <div class="section-deportes">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <?php if ($count == 1) : ?>
                  <div class="section-deportes-one">
                    <figure class="">
                      <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                      $url = wp_get_attachment_url( $post_thumbnail_id);
                      ?>
                      <div class="img-post-deportes" style="background-image: url(<?php echo $url; ?>);">

                      </div>
                      <figcaption>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <h3><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Ver mas</a>
                      </figcaption>
                    </figure>
                    <?php $count++; ?>
                  </div>
                  <div class="section-deportes-two">
                  <?php else : ?>
                      <a href="<?php the_permalink(); ?>">
                      <div class="section-deportes-two-content">
                        <h2 class=""><?php the_title(); ?></h2>
                        <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
                      </div>
                      </a>
                  <?php endif; ?>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
          <div class="banner-in-content bg-white bd-ads ov-hidden separacion">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="esp separacion">
            <div class="news-block bd-espectaculos padding-15 ml-5">
              <h2 class="block-espectaculos mb-40">ESPECTÁCULOS</h2>
              <?php $count = 1;?>
              <?php query_posts('category_name=espectaculos&showposts=3'); ?>
              <div class="three-col-post">
                <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                    <div class="">
                      <div class="card mp-40">
                        <?php if ($count == 1) : ?>
                          <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                          $url = wp_get_attachment_url( $post_thumbnail_id);
                          ?>
                          <div class="img-post-espectaculos" style="background-image: url(<?php echo $url ?>);"></div>
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
            <div class="news-block bd-ciencia padding-15 md-5">
              <h2 class="block-ciencia mb-40">CIENCIA Y TECNOLOGÍA</h2>
              <?php $count = 1;?>
              <?php query_posts('category_name=ciencia-y-tecnologia&showposts=3'); ?>
              <div class="three-col-post">
                <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                  <a href="<?php the_permalink(); ?>">
                    <div class="">
                      <div class="card mp-40">
                        <?php if ($count == 1) : ?>
                          <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                          $url = wp_get_attachment_url( $post_thumbnail_id);
                          ?>
                          <div class="img-post-ciencia" style="background-image: url(<?php echo $url ?>);"></div>
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
          <div class="minibanners separacion">
            <div class="sm-ads-item ov-hidden minibanner">
              <?php if ( function_exists( 'easingslider' ) ) { easingslider( 184 ); } ?>
            </div>
            <div class="sm-ads-item ov-hidden minibanner2">

              <?php if ( function_exists( 'easingslider' ) ) { easingslider( 186 ); } ?>

            </div>
          </div>
          <!-- .Mini-banner-ads -->
          <div class="news-block padding-15 bg-white bd-opinion separacion">
            <div class="btn-opinion-next" style="height: 100%;">
              <a class="next-btn-opinion">
                <i class="fa fa-chevron-right fa-2x"></i>
              </a>
            </div>
            <div class="btn-opinion-prev" style="height: 100%;">
              <a class="prev-btn-opinion">
                <i class="fa fa-chevron-left fa-2x"></i>
              </a>
            </div>
            <h2 class="block-opinion mb-40">OPINIóN</h2>
            <?php query_posts('category_name=opinion&showposts=6'); ?>
            <div class="slider_post section-opinion">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <!-- <a href="<?php the_permalink(); ?>"> -->
                  <div class="section-opinion-post">
                    <div class="card mp-40">
                      <a href="<?php the_permalink(); ?>">
                      <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
                      $url = wp_get_attachment_url( $post_thumbnail_id);
                      ?>
                      <div class="img-post-opinion" style="background-image:url(<?php echo $url; ?>);"></div>
                    </a>
                      <h4 class="text-left"><?php the_title(); ?></h4>
                      <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
                      <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fa fa-user"></i> <?php the_author(); ?> </a>
                    </div>
                  </div>
                <!-- </a> -->
              <?php endwhile; endif; ?>

            </div>
          </div>
          <!-- banner-ads -->
          <div class="banner-in-content bg-white bd-ads ov-hidden">
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
