  <footer class="footer clearfix">
    <div class="container">
      <div class="row footer-area">
        <div class="col-xs-6 footer-para">
          <p>&copy; Юрий Чикуров <?php echo date('Y'); ?></p>
        </div>
        <div class="col-xs-6 col-sm-3 pull-right text-right footer-social">
          <a target="_blank" href="https://vk.com/id139677998"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100012253260685&pnref"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.youtube.com/user/ThePractik01/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.instagram.com/dr.chikurov/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="clearfix"></div>

        <div class="menu_footer">
          <a href="/voprosy-i-otvety/">Вопросы и ответы</a>
          <?php if (is_user_logged_in()) { ?>
            <a href="/logout/?_wpnonce=1fd8ce03de"> | Выйти</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <!-- script tags
  ============================================================= -->
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <!-- <script src="<?php //bloginfo('template_url'); ?>/js/loadmore.js"></script> -->
  <!-- <script src="<?php //bloginfo('template_url'); ?>/js/conversation.js"></script>   -->
  <!-- <script src="<?php //bloginfo('template_url'); ?>/js/peekobot.js"></script> -->
  <!-- <script src="<?php //bloginfo('template_url'); ?>/js/slick.min.js"></script> -->
  <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
  <?php if (!is_user_logged_in() && is_front_page()) { ?>
    <script>
      jQuery(document).ready(function () {
        // jQuery('#login').modal('show');
      });
    </script>
  <?php } ?>
  <?php if (is_user_logged_in() && in_category(2)) { ?>
    <script>
      jQuery(document).ready(function () {
        
      });
    </script>
  <?php } ?>
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Вход</h4>
              </div>
              <div class="modal-body">
                <?php if (!dynamic_sidebar("popup-widget-area") ) : ?>
                <?php endif; ?>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="massage" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Заявка на консультацию</h4>
              </div>
              <div class="modal-body">
                <div>
                  Коррекция кармы и ситуационных рядов - индивидуальная очная консультация у профессора Чикурова
                </div>
                <?php echo do_shortcode('[contact-form-7 id="2470" title="Заявка Коррекция кармы"]')?>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
