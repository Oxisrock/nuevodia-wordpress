

<footer class="footer-wrapper bg-dark">
    <div class="container">
      <div class="footer-items">
      <div class="footer-wd-20">

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
        <div class="footer-wd-20">
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
          <div class="footer-wd-20 footer-face">
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
            <div class="footer-wd-20 footer-mr-0">
              <a href="index.php" class="footer-logo"><img src="http://localhost/nuevodia/wp-content/uploads/2017/11/logo-light.png" alt="NuevoDia"></a>
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
            <div class="logos_footer">
              <img src="http://localhost/nuevodia/wp-content/uploads/2017/11/client-1.png" class="img-responsive letraviva"></img><img src="http://localhost/nuevodia/wp-content/uploads/2017/11/client-2.png" class="img-responsive fundacion"></img>
            </div>
            <div class="derechos">
              <a class="text-light">© Derechos Reservados EDITORIAL NUEVO DÍA C.A.Desarrollado por Slice Group </a>
            </div>
          </div>
        </div>
        </footer><!-- footer -->
      </div>

      <?php wp_footer(); ?> <!-- funcion de footer para traer los cambios en el footer -->

    </body>
    </html>
