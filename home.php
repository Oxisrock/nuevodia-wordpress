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
    <div class="col-md-8 sm-padding">
<section id="main-content" class="main-wrapper mb-40">
<?php // mostrar 1 post por cada categoria
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
?>
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
