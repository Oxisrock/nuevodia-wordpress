<?php if (have_comments()) { ?>
    <h3><?php comments_number(
      __('No hay comentarios aun', 'apk'),
      __('Hay un comentario publicado', 'apk'),
      __('Hay % comentarios', 'apk')
    )?><h3>
    <ol id="comments-list">
      <?php wp_list_comments(); ?>
    </ol>
    <?php paginate_comments_links();?>
    <?php } ?>
  <?php comment_form() ?>
