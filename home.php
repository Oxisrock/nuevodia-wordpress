<?php get_header(); ?>
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
                      <h2 class="margin-top-5 margin-bottom-5 font-weight-200 titleslider"><?php the_title(); ?></h2>
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
        <section id="main-content" class="main-wrapper">
          <div class="news-block padding-15 bg-white bd-falcon separacion">
            <a href="/wp_nuevodia/index.php/category/falcon/"><h2 class="block-falcon mb-20">FALCÓN</h2></a>
            <?php query_posts('category_name=falcon&showposts=3'); ?>
            <?php $count = 1;?>
            <div class="section-falcon">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <?php if ($count == 1) : ?>
                  <div class="section-falcon-one">
                    <div class="grid">
                      <figure class="effect-marley">
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                          <h2 class="text-left title"><?php the_title(); ?></h2>
                          <h3 class="text-left"><?php the_time( get_option('date_format') ); ?></h3>
                          <p class="text-left"><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                        </figcaption>
                      </figure>
                      <?php $count++; ?>
                    </div>
                  </div>
                  <div class="section-falcon-two visible-md visible-lg">
                  <?php else : ?>
                    <div class="sm-post-item">
                      <div class="grid-mini">
                        <figure class="effect-marley-mini">
                          <?php the_post_thumbnail(); ?>
                          <figcaption>
                            <h2 class="text-left title"><?php the_title(); ?></h2>
                            <p class="text-left mg-fecha"><?php the_time( get_option('date_format') ); ?></p>
                            <a href="<?php the_permalink(); ?>">Ver mas</a>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div><!-- .news-block -->
          <div class="banner-in-content bg-white bd-ads ov-hidden separacion">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="news-block padding-15 bg-white bd-sucesos separacion">
            <a href="/wp_nuevodia/index.php/category/sucesos"><h2 class="block-sucesos mb-20">Sucesos</h2></a>
            <?php query_posts('category_name=sucesos&showposts=4'); ?>
            <?php $count = 1;?>
            <div class="section-sucesos">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <?php if ($count == 1) : ?>
                  <div class="section-sucesos-one">
                    <div class="grid">
                      <figure class="effect-marley">
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                          <h2 class="text-left title"><?php the_title(); ?></h2>
                          <h3 class="text-left"><?php the_time( get_option('date_format') ); ?></h3>
                          <p class="text-left"><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                        </figcaption>
                      </figure>
                      <?php $count++; ?>
                    </div>
                  </div>
                  <div class="section-sucesos-two visible-md visible-lg">
                    <div class="small-posts">
                  <?php else : ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="sm-post-item">
                          <?php the_post_thumbnail(); ?>
                          <div class="sm-post-content">
                            <h4 class="titlelast fz-14 text-left"><?php the_title(); ?></h4>
                            <p class="fz-12 fw-6 tt-u no-margin text-left"><?php the_time( get_option('date_format') ); ?></p>
                          </div>
                        </div>
                    </a>
                  <?php endif; ?>
                <?php endwhile; endif; ?>
                </div>
              </div>
            </div>
          </div><!-- .news-block -->
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
          <div class="news-block padding-15 bg-white bd-nacionales separacion">
            <a href="/wp_nuevodia/index.php/category/nacionales"><h2 class="block-nacionales mb-20">NACIONALES</h2></a>
            <?php query_posts('category_name=nacionales&showposts=4'); ?>
            <?php $count = 1;?>
            <div class="section-nacionales">
              <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                <?php if ($count == 1) : ?>
                  <div class="section-nacionales-one">
                    <div class="grid">
                      <figure class="effect-marley">
                        <?php the_post_thumbnail(); ?>
                        <figcaption>
                          <h2 class="text-left title"><?php the_title(); ?></h2>
                          <h3 class="text-left"><?php the_time( get_option('date_format') ); ?></h3>
                          <p class="text-left"><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>">Ver mas</a>
                        </figcaption>
                      </figure>
                      <?php $count++; ?>
                    </div>
                  </div>
                  <div class="section-nacionales-two visible-md visible-lg">
                    <div class="small-posts">
                  <?php else : ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="sm-post-item">
                          <?php the_post_thumbnail(); ?>
                          <div class="sm-post-content">
                            <h4 class="text-left titlelast fz-14"><?php the_title(); ?></h4>
                            <p class="text-left fz-12 fw-6 tt-u no-margin"><?php the_time( get_option('date_format') ); ?></p>
                          </div>
                        </div>
                    </a>
                  <?php endif; ?>
                <?php endwhile; endif; ?>
                </div>
              </div>
            </div>
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
            <a href="/wp_nuevodia/index.php/category/internacionales"><h2 class="block-inter mb-20">INTERNACIONALES</h2></a>
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
                      <h4 class="text-left titlelast"><?php the_title(); ?></h4>
                      <p class="text-left"><?php the_time( get_option('date_format') ); ?></p>
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
              <a href="/wp_nuevodia/index.php/category/deportes"><h2 class="block-deportes mb-20">DEPORTES</h2></a>
              <?php query_posts('category_name=deportes&showposts=3'); ?>
              <?php $count = 1;?>
              <div class="section-falcon">
                <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
                  <?php if ($count == 1) : ?>
                    <div class="section-falcon-one">
                      <div class="grid">
                        <figure class="effect-marley">
                          <?php the_post_thumbnail(); ?>
                          <figcaption>
                            <h2 class="text-left title"><?php the_title(); ?></h2>
                            <h3 class="text-left"><?php the_time( get_option('date_format') ); ?></h3>
                            <p class="text-left"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>">Ver mas</a>
                          </figcaption>
                        </figure>
                        <?php $count++; ?>
                      </div>
                    </div>
                    <div class="section-falcon-two visible-md visible-lg">
                    <?php else : ?>
                      <div class="sm-post-item">
                        <div class="grid-mini">
                          <figure class="effect-marley-mini">
                            <?php the_post_thumbnail(); ?>
                            <figcaption>
                              <h2 class="text-left title"><?php the_title(); ?></h2>
                              <p class="text-left mg-fecha"><?php the_time( get_option('date_format') ); ?></p>
                              <a href="<?php the_permalink(); ?>">Ver mas</a>
                            </figcaption>
                          </figure>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endwhile; endif; ?>
                </div>
              </div>
            </div><!-- .news-block -->
          <div class="banner-in-content bg-white bd-ads ov-hidden separacion">
            <?php if ( function_exists( 'easingslider' ) ) { easingslider( 183 ); } ?>
          </div>
          <div class="esp separacion">
            <div class="news-block bd-espectaculos padding-15 ml-5">
              <a href="/wp_nuevodia/index.php/category/espectaculos"><h2 class="block-espectaculos mb-40">ESPECTÁCULOS</h2></a>
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
                          <h4 class="text-left"><?php the_title(); ?></h4>
                          <p class="text-left"><?php the_time( get_option('date_format') ); ?></p>
                          <?php $count++; ?>
                        <?php else : ?>
                          <div class="visible-md visible-lg">
                          <h4 class="text-left"><?php the_title(); ?></h4>
                          <p class="text-left"><?php the_time( get_option('date_format') ); ?></p>
                        </div>
                        <?php endif; ?>
                      </div>
                    </div>
                  </a>
                <?php endwhile; endif; ?>

              </div>
            </div>
            <div class="news-block bd-ciencia padding-15 md-5">
              <a href="/wp_nuevodia/index.php/category/ciencia-y-tecnologia"><h2 class="block-ciencia mb-40">CIENCIA Y TECNOLOGÍA</h2></a>
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
                          <h4 class="title"><?php the_title(); ?></h4>
                          <p><?php the_time( get_option('date_format') ); ?></p>
                          <?php $count++; ?>
                        <?php else : ?>
                          <div class="visible-md visible-lg">
                          <h4 class="text-left title"><?php the_title(); ?></h4>
                          <p class="text-left" ><?php the_time( get_option('date_format') ); ?></p>
                        </div>
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
            <a href="/wp_nuevodia/index.php/category/opinion"><h2 class="block-opinion mb-20">OPINIóN</h2></a>
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
                      <h4 class="text-left titlelast"><?php the_title(); ?></h4>
                      <p class="text-left"><?php the_time( get_option('date_format') ); ?></p>
                      <a class="text-left" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fa fa-user-o"></i> <?php the_author(); ?> </a>
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
