<?php get_header(); ?>
<?php if (is_user_logged_in()) { ?>
  <?php if (is_page(10)) { ?>
    <section class="seminars text-center reviews_wrap" id="lectors">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Отзывы</h2>
          </div>
          <div class="col-md-12">
            <?php
            // The Query
            $query_reviews = new WP_Query( array( 'category_name' => 'otzyvy') );
            $cur_month = 0;
            while ($query_reviews->have_posts()) : $query_reviews->the_post();
                echo '<div class="review col-md-3 col-sm-6 col-xs-12">';
                echo '<div class="review_inner">';
                echo '<a href="';
                if (get_field('link_review')) {
                  echo the_field('link_review');
                } else {
                  echo the_permalink();
                }
                echo '" target="_blank" title="Ссылка на источник">';
                echo '<img src="';
                echo the_field('img_review');
                echo '" alt="">';
                echo '</a>';
                echo '<p>';
                echo the_content(__('(читать полностью)'));
                echo '</p>';
                echo '<a href="';
                if (get_field('link_review')) {
                  echo the_field('link_review');
                } else {
                  echo the_permalink();
                }
                echo '" target="_blank" title="Ссылка на источник">';
                echo the_field('name_review');
                echo '</a>';
                echo '</div>';
                echo '</div>';
            endwhile;
            wp_reset_postdata();
            ?>
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
          <h2><?php the_title(); ?></h2>
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

<?php } ?> 

<?php get_footer(); ?>
