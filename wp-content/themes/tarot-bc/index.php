<?php get_header(); ?>
<?php if (is_user_logged_in()) { ?>
  <?php if (in_category(2)) { ?>
    <section class="seminars text-center reviews_wrap" id="lectors">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-12">
            <h2>«Лечебное Tarot»</h2>
          </div> -->
          <div class="col-xs-1 page-nav">
            <?php previous_post_link('%link', '<', true); ?>
          </div>
          <div class="col-xs-10 page-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php $cur_page = get_the_ID(); ?>
            <div class="row">
              <div class="col-md-12 page-heading">
                Страница <?php the_title(); ?>
                <div class="pull-right"></div>
              </div>
              <div class="col-md-12 seminar_content">
                <?php
                the_content(__('(more...)'));
                edit_post_link(__('Edit This'));
                ?>
              </div>
              <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-12"><?php the_posts_pagination(); ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; else: ?>
              <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>
          </div>
          <div class="col-xs-1 page-nav">
            <?php next_post_link('%link', '>', true); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 pages">
            <h2>Оглавление</h2>
            <div class="row">
              <div class="col-md-12">
                <?php
                // The Query
                $query_reviews = new WP_Query( array( 'category_name' => 'book', 'order' => 'ASC') );
                while ($query_reviews->have_posts()) : $query_reviews->the_post();
                    $cur_pages_item = get_the_ID();
                    echo '<a class="pages_item';
                    if ($cur_pages_item == $cur_page) {
                      echo ' pages_item-active';
                    }
                    echo '" href="';
                    echo the_permalink();
                    echo '">';
                    echo the_title();
                    echo '</a>';
                endwhile;
                wp_reset_postdata();
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php } else if (in_category(3)) { ?>
      <section class="seminar text-center" id="seminar">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if (is_category()) { ?>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php } else { ?>
              <h2><?php the_title(); ?></h2>
            <?php } ?>
          </div>
          <div class="col-md-12 seminar_content">
            <?php
            the_content(__('(more...)'));
            edit_post_link(__('Edit This'));
            ?>
          </div>
          <div class="col-md-12 more_links">
            <a href="" class="btn"></a>
          </div>
        </div>
      </div>
      <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
      <?php endif; ?>
    </section>
  <?php } else { ?>
    <section class="seminar text-center" id="seminar">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if (is_category()) { ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php } else { ?>
            <h2><?php the_title(); ?></h2>
          <?php } ?>
        </div>
        <div class="col-md-12 seminar_content">
          <?php
          the_content(__('(more...)'));
          edit_post_link(__('Edit This'));
          ?>
        </div>
      </div>
    </div>
    <?php endwhile; else: ?>
      <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>
  </section>
  <?php } ?> 
<?php } else { ?> 
  <?php if (in_category(2)) { ?>
      <section class="seminar text-center" id="seminar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>«Лечебное Tarot»</h2>
          </div>
          <div class="col-md-12 seminar_content">
            Материал книги доступен только зарегистрированным пользователям.
            <button class="btn btn-primary" id="register">Войдите</button> для продолжения или <a href="/registration/" class="btn btn-primary" id="register">зарегистрируйтесь</a> и получите полный доступ к материалам сайта.
            Это бесплатно!
          </div>
        </div>
      </div>
    </section>
  <?php } else { ?> 
      <section class="seminar text-center" id="seminar">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if (is_category()) { ?>
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php } else { ?>
              <h2><?php the_title(); ?></h2>
            <?php } ?>
          </div>
          <div class="col-md-12 seminar_content">
            <?php
            the_content(__('(more...)'));
            edit_post_link(__('Edit This'));
            ?>
          </div>
        </div>
      </div>
      <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
      <?php endif; ?>
    </section>
  <?php } ?> 
<?php } ?> 
<?php get_footer(); ?>
