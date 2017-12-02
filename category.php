<?php get_header(); ?>
<div class="container">
  <div class="banner bg-white separacion separacion-top">
		<?php if ( function_exists( 'easingslider' ) ) { easingslider( 180 ); } ?>
	</div>
  <span class="separacion-top"><?php the_category(); ?></span>
  <div class="category">
    <div class="category-one separacion-top">
      <div class="slider-nav">
        <a class="next-btn" style="height: 100%;">
        </a>
        <a class="prev-btn" style="height: 100%;">
        </a>
        <div id="carrusel">
          <?php $count = 1;?>
          <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
            <?php $post_views = get_post_views(get_the_ID());?>
            <?php if ($count <= 3) : ?>
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
              <?php $count++; ?>
            <?php endif; ?>
          <?php endwhile; endif; ?>
          <?wp_reset_query();?>
          <!-- <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p> -->

        </div>
      </div>
      <div class="category-post-others separacion-top">
        <div class="category-section-one separacion-top">
          <?php $counts = 1;?>
        <?php if (have_posts()) : while( have_posts() ) : the_post(); ?>
          <?php $post_views = get_post_views(get_the_ID());?>
          <?php $post_thumbnail_id = get_post_thumbnail_id( $post_id );
          $url = wp_get_attachment_url( $post_thumbnail_id);
          ?>
          <?php $counts++; ?>
          <?php if ($counts >= 5): ?>
              <div class="col-md-3 post-relationship">
                <a target="_blank" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                  <?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                  }else{
                    ?>
                    <img src="<?php bloginfo('template_url'); ?>/img/nombre-imagen-defecto.png" />
                    <?php
                  }
                  ?>
                  <div class="post-relationship-content">
                    <p class="titlelast"><?php the_title(); ?></p>
                    <p><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php the_time( get_option('date_format') ); ?></p>
                  </div>
                </a>
              </div>
              <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
      </div>
    </div>

    <div class="category-two separacion-top">
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
