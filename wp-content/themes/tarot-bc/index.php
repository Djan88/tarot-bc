<?php get_header(); ?>
<?php if (in_category(2)) { ?>
  <?php if (is_user_logged_in()) { ?>
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
              <div class="pull-right pages_show">Оглавление</div>
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
        <div class="col-xs-12 pages hidden">
          <div class="pages_paranja"></div>
          <h2>Оглавление</h2>
          <div class="row">
            <img src="<?php bloginfo('template_url'); ?>/img/fav180.png" alt="" class="img-responsive pages_ava">
            <div class="pages_close">X</div>
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 pages_inner">
              <a href="https://tarot-bc.ru/book/1/" class="pages_link"><span class="pages_text">Intro</span><div class="pages_dots"></div><span class="pages_num pull-right">1</span></a>
              <a href="https://tarot-bc.ru/book/4/" class="pages_link"><span class="pages_text">Благодарности</span><div class="pages_dots"></div><span class="pages_num pull-right">4</span></a>
              <a href="https://tarot-bc.ru/book/4/" class="pages_link"><span class="pages_text">О памяти тела и телесном подсознании</span><div class="pages_dots"></div><span class="pages_num pull-right">5</span></a>
              <a href="https://tarot-bc.ru/book/7/" class="pages_link"><span class="pages_text">Tarot и зоны телесного подсознания</span><div class="pages_dots"></div><span class="pages_num pull-right">7</span></a>
              <a href="https://tarot-bc.ru/book/10/" class="pages_link"><span class="pages_text">Свойства старших арканов Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">10</span></a>
              <a href="https://tarot-bc.ru/book/12/" class="pages_link"><span class="pages_text">Маг</span><div class="pages_dots"></div><span class="pages_num pull-right">12</span></a>
              <a href="https://tarot-bc.ru/book/20/" class="pages_link"><span class="pages_text">Жрец</span><div class="pages_dots"></div><span class="pages_num pull-right">20</span></a>
              <a href="https://tarot-bc.ru/book/26/" class="pages_link"><span class="pages_text">Отшельник</span><div class="pages_dots"></div><span class="pages_num pull-right">26</span></a>
              <a href="https://tarot-bc.ru/book/32/" class="pages_link"><span class="pages_text">Повешенный</span><div class="pages_dots"></div><span class="pages_num pull-right">32</span></a>
              <a href="https://tarot-bc.ru/book/37/" class="pages_link"><span class="pages_text">Император</span><div class="pages_dots"></div><span class="pages_num pull-right">37</span></a>
              <a href="https://tarot-bc.ru/book/43/" class="pages_link"><span class="pages_text">Императрица</span><div class="pages_dots"></div><span class="pages_num pull-right">43</span></a>
              <a href="https://tarot-bc.ru/book/49/" class="pages_link"><span class="pages_text">Умеренность</span><div class="pages_dots"></div><span class="pages_num pull-right">49</span></a>
              <a href="https://tarot-bc.ru/book/55/" class="pages_link"><span class="pages_text">Фрейма Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">55</span></a>
              <a href="https://tarot-bc.ru/book/57/" class="pages_link"><span class="pages_text">XV The Devil</span><div class="pages_dots"></div><span class="pages_num pull-right">57</span></a>
              <a href="https://tarot-bc.ru/book/85/" class="pages_link"><span class="pages_text">Техника Solis на фрейме рогов The Devil</span><div class="pages_dots"></div><span class="pages_num pull-right">85</span></a>
              <a href="https://tarot-bc.ru/book/89/" class="pages_link"><span class="pages_text">Сила</span><div class="pages_dots"></div><span class="pages_num pull-right">89</span></a>
              <a href="https://tarot-bc.ru/book/99/" class="pages_link"><span class="pages_text">Дурак (0)</span><div class="pages_dots"></div><span class="pages_num pull-right">99</span></a>
              <a href="https://tarot-bc.ru/book/110/" class="pages_link"><span class="pages_text">Смерть (XIII)</span><div class="pages_dots"></div><span class="pages_num pull-right">110</span></a>
              <a href="https://tarot-bc.ru/book/119/" class="pages_link"><span class="pages_text">Влюбленные (VI)</span><div class="pages_dots"></div><span class="pages_num pull-right">119</span></a>
              <a href="https://tarot-bc.ru/book/130/" class="pages_link"><span class="pages_text">Страшный Суд (ХХ)</span><div class="pages_dots"></div><span class="pages_num pull-right">130</span></a>
              <a href="https://tarot-bc.ru/book/141/" class="pages_link"><span class="pages_text">Колесница (VII)</span><div class="pages_dots"></div><span class="pages_num pull-right">141</span></a>
              <a href="https://tarot-bc.ru/book/157/" class="pages_link"><span class="pages_text">XXI Мир</span><div class="pages_dots"></div><span class="pages_num pull-right">157</span></a>
              <a href="https://tarot-bc.ru/book/168/" class="pages_link"><span class="pages_text">Верховная Жрица (II)</span><div class="pages_dots"></div><span class="pages_num pull-right">168</span></a>
              <a href="https://tarot-bc.ru/book/178/" class="pages_link"><span class="pages_text">Правосудие (XI)</span><div class="pages_dots"></div><span class="pages_num pull-right">178</span></a>
              <a href="https://tarot-bc.ru/book/188/" class="pages_link"><span class="pages_text">Колесо Фортуны (Х)</span><div class="pages_dots"></div><span class="pages_num pull-right">188</span></a>
              <a href="https://tarot-bc.ru/book/201/" class="pages_link"><span class="pages_text">Башня (XVI)</span><div class="pages_dots"></div><span class="pages_num pull-right">201</span></a>
              <a href="https://tarot-bc.ru/book/210/" class="pages_link"><span class="pages_text">Луна (XVIII)</span><div class="pages_dots"></div><span class="pages_num pull-right">210</span></a>
              <a href="https://tarot-bc.ru/book/222/" class="pages_link"><span class="pages_text">Звезда (XVII)</span><div class="pages_dots"></div><span class="pages_num pull-right">222</span></a>
              <a href="https://tarot-bc.ru/book/229/" class="pages_link"><span class="pages_text">The Sun (XIX)</span><div class="pages_dots"></div><span class="pages_num pull-right">229</span></a>
              <a href="https://tarot-bc.ru/book/248/" class="pages_link"><span class="pages_text">Физиологическая норма грехопадения Старших Арканов</span><div class="pages_dots"></div><span class="pages_num pull-right">248</span></a>
              <a href="https://tarot-bc.ru/book/259/" class="pages_link"><span class="pages_text">Типы отношений между людьми на примере взаимодействия карт Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">259</span></a>
              <a href="https://tarot-bc.ru/book/260/" class="pages_link"><span class="pages_text">Пересмотр личной истории Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">260</span></a>
              <a href="https://tarot-bc.ru/book/268/" class="pages_link"><span class="pages_text">Младшие Арканы (56 карт)</span><div class="pages_dots"></div><span class="pages_num pull-right">268</span></a>
              <a href="https://tarot-bc.ru/book/270/" class="pages_link"><span class="pages_text">Четыре стратегии реальности Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">270</span></a>
              <a href="https://tarot-bc.ru/book/317/" class="pages_link"><span class="pages_text">Карты Двора</span><div class="pages_dots"></div><span class="pages_num pull-right">317</span></a>
              <a href="https://tarot-bc.ru/book/320/" class="pages_link"><span class="pages_text">Техника обнуления ситуационных рядов</span><div class="pages_dots"></div><span class="pages_num pull-right">320</span></a>
              <a href="https://tarot-bc.ru/book/325/" class="pages_link"><span class="pages_text">Общий протокол Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">325</span></a>
              <a href="https://tarot-bc.ru/book/331/" class="pages_link"><span class="pages_text">Классический протокол Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">331</span></a>
              <a href="https://tarot-bc.ru/book/337/" class="pages_link"><span class="pages_text">La fin</span><div class="pages_dots"></div><span class="pages_num pull-right">337</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php } else { ?>
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
  <?php } ?>  
<?php } else if (is_category(3)) { ?>
  <section class="seminar text-center" id="seminar">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Вопросы и ответы</h2>
        </div>
        <div class="col-md-12 tarot_qestions_cat">
        <?php
        // The Query
        $query_faq = new WP_Query( array('category_name' => 'voprosy-i-otvety', 'order' => 'ASC') );
        while ($query_faq->have_posts()) : $query_faq->the_post();
            $cur_pages_item = get_the_ID();
            echo '<div class="question-item">';
            echo '<h1 class="heading_in_cat"><a class="tarot_qestions_cat_item" href="';
            echo the_permalink();
            echo '">';
            echo the_title();
            echo '</a></h1>';
            echo '<div class="qestions_text">';
            echo the_content(__('(more...)'));
            echo edit_post_link(__('Edit This'));
            echo '</div>';
            echo '</div>';
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
      </div>
    </div>  
  </section>
<?php } else if (in_category(3)) { ?>
  <section class="seminar text-center" id="seminar">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
          <div class="col-md-12">
            <h1 class="heading_in_cat"><?php the_title(); ?></h1>
          </div>
          <div class="col-md-12 seminar_content">
            <?php
            the_content(__('(more...)'));
            edit_post_link(__('Edit This'));
            ?>
          </div>
          <div class="col-md-12 more_links">
            <span></span>
            <a href="/">Что такое "Лечебное Tarot"?</a>
            <a href="/book/1" target="_blank" class="cur_page_ridden">Читать книгу "Лечебное Tarot"</a>
            <a href="https://school-bc.ru/#tarotstart" target="_blank">Бесплатный Онлайн Курс</a>
          </div>
        </div>
        <?php endwhile; else: ?>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        <?php endif; ?>
        </div>
        <div class="col-md-3 another_posts">
          <h3>Вопросы и ответы</h3>
          <?php
          // The Query
          $query_reviews = new WP_Query( array( 'category_name' => 'voprosy-i-otvety', 'posts_per_page=5') );
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
          <a class="pages_item pages_item_all" href="/voprosy-i-otvety/">Все "Вопросы и ответы"</a>
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

<?php get_footer(); ?>
