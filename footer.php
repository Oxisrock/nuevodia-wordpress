

<footer class="footer-wrapper bg-dark">
    <div class="footer-widgets padding">
        <div class="container">
          <div class="col-md-3 col-xs-6 sm-padding">

          <?php
            if (is_active_sidebar('main_footer')) {
              dynamic_sidebar('main_footer');
            }else { ?>
              <div class="single-sidebar">
                <h3 class="fw-8 fz-18 tt-u mb-30"><?php _e('Buscar', 'apk'); ?></h3>
                <?php get_search_form(); ?>
              </div>
          <?php  }?>
        </div>
        <div class="col-md-3 col-xs-6 sm-padding">
          <?php
            if (is_active_sidebar('main_footer_home')) {
              dynamic_sidebar('main_footer_home');
            }else { ?>
              <div class="single-sidebar">
                <h3 class="fw-8 fz-18 tt-u mb-30"><?php _e('Buscar', 'apk'); ?></h3>
                <?php get_search_form(); ?>
              </div>
          <?php  }?>
        </div><!-- widget 2 -->
        <div class="col-md-3 col-xs-6 sm-padding">
          <?php
            if (is_active_sidebar('main_footer_face')) {
              dynamic_sidebar('main_footer_face');
            }else { ?>
              <div class="single-sidebar">
                <h3 class="fw-8 fz-18 tt-u mb-30"><?php _e('Buscar', 'apk'); ?></h3>
                <?php get_search_form(); ?>
              </div>
          <?php  }?>
        </div><!-- widget 2 -->
        <div class="col-md-3 col-xs-6 sm-padding">
          <?php
            if (is_active_sidebar('main_footer_home')) {
              dynamic_sidebar('main_footer_data');
            }else { ?>
              <div class="single-sidebar">
                <h3 class="fw-8 fz-18 tt-u mb-30"><?php _e('Buscar', 'apk'); ?></h3>
                <?php get_search_form(); ?>
              </div>
          <?php  }?>
        </div><!-- widget 2 -->
</div>
<div class="footer-copyright ptb-40">
    <div class="container">
        <div class="col-xs-7 xs-padding xs-text-center">
            <p class="no-margin fz-13 text-light">© Derechos Reservados EDITORIAL NUEVO DÍA C.A.Desarrollado por Slice Group</p>
        </div>
        <div class="col-xs-5 xs-padding">
            <ul class="footer-social text-right xs-text-center">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</div>
</footer><!-- footer -->
</div>

  <?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->

</body>
</html>
