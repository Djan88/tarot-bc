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
              <div class="pages_close">X</div>
              <div class="col-xs-12 col-sm-10 col-sm-offset-1 pages_inner">
                <a href="https://tarot-bc.ru/book/1/" class="pages_link"><span class="pages_text">Intro</span><div class="pages_dots"></div><span class="pages_num pull-right">1</span></a>
                <a href="https://tarot-bc.ru/book/5/" class="pages_link"><span class="pages_text">Благодарности</span><div class="pages_dots"></div><span class="pages_num pull-right">5</span></a>
                <a href="https://tarot-bc.ru/book/7/" class="pages_link"><span class="pages_text">О памяти тела и телесном подсознании</span><div class="pages_dots"></div><span class="pages_num pull-right">7</span></a>
                <a href="https://tarot-bc.ru/book/9/" class="pages_link"><span class="pages_text">Tarot и зоны телесного подсознания</span><div class="pages_dots"></div><span class="pages_num pull-right">9</span></a>
                <a href="https://tarot-bc.ru/book/13/" class="pages_link"><span class="pages_text">Свойства старших арканов Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">13</span></a>
                <a href="https://tarot-bc.ru/book/15/" class="pages_link"><span class="pages_text">Карта "Маг"</span><div class="pages_dots"></div><span class="pages_num pull-right">15</span></a>
                <a href="https://tarot-bc.ru/book/23/" class="pages_link"><span class="pages_text">Карта "Жрец"</span><div class="pages_dots"></div><span class="pages_num pull-right">23</span></a>
                <a href="https://tarot-bc.ru/book/29/" class="pages_link"><span class="pages_text">Карта "Отшельник"</span><div class="pages_dots"></div><span class="pages_num pull-right">29</span></a>
                <a href="https://tarot-bc.ru/book/35/" class="pages_link"><span class="pages_text">Карта "Повешенный"</span><div class="pages_dots"></div><span class="pages_num pull-right">35</span></a>
                <a href="https://tarot-bc.ru/book/40/" class="pages_link"><span class="pages_text">Карта "Император"</span><div class="pages_dots"></div><span class="pages_num pull-right">40</span></a>
                <a href="https://tarot-bc.ru/book/45/" class="pages_link"><span class="pages_text">Карта "Императрица"</span><div class="pages_dots"></div><span class="pages_num pull-right">45</span></a>
                <a href="https://tarot-bc.ru/book/52/" class="pages_link"><span class="pages_text">Карта "Умеренность"</span><div class="pages_dots"></div><span class="pages_num pull-right">52</span></a>
                <a href="https://tarot-bc.ru/book/56/" class="pages_link"><span class="pages_text">Фрейма Tarot</span><div class="pages_dots"></div><span class="pages_num pull-right">56</span></a>
                <a href="https://tarot-bc.ru/book/59/" class="pages_link"><span class="pages_text">Карта "The Devil"</span><div class="pages_dots"></div><span class="pages_num pull-right">59</span></a>
                <a href="https://tarot-bc.ru/book/88/" class="pages_link"><span class="pages_text">Динамика XIX Solis на фрейме рогов The Devil</span><div class="pages_dots"></div><span class="pages_num pull-right">88</span></a>
                <a href="https://tarot-bc.ru/book/90/" class="pages_link"><span class="pages_text">Таблица приоритетности крайних карт фреймы выглядит следующим образом:</span><div class="pages_dots"></div><span class="pages_num pull-right">90</span></a>
                <a href="https://tarot-bc.ru/book/91/" class="pages_link"><span class="pages_text">Карта "Сила"</span><div class="pages_dots"></div><span class="pages_num pull-right">91</span></a>
                <a href="https://tarot-bc.ru/book/101/" class="pages_link"><span class="pages_text">Карта "Дурак"</span><div class="pages_dots"></div><span class="pages_num pull-right">101</span></a>
                <a href="https://tarot-bc.ru/book/114/" class="pages_link"><span class="pages_text">Карта "Смерть"</span><div class="pages_dots"></div><span class="pages_num pull-right">114</span></a>
                <a href="https://tarot-bc.ru/book/117/" class="pages_link"><span class="pages_text">Несколько слов про Карму</span><div class="pages_dots"></div><span class="pages_num pull-right">117</span></a>
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
            <a href="/book/1" target="_blank" class="btn btn-primary cur_page_ridden">Читать "Лечебное Tarot"</a>
            <a href="https://tarot-bc.ru/voprosy-i-otvety/" class="btn btn-primary">Вопросы и ответы</a>
            <a href="http://school-bc.ru/" target="_blank" class="btn btn-primary">Бесплатный Онлайн Курс</a>
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
            <a href="/book/1" target="_blank" class="btn btn-primary cur_page_ridden">Читать "Лечебное Tarot"</a>
            <a href="https://tarot-bc.ru/voprosy-i-otvety/" class="btn btn-primary">Вопросы и ответы</a>
            <a href="http://school-bc.ru/" target="_blank" class="btn btn-primary">Бесплатный Онлайн Курс</a>
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
<?php } ?> 
<?php get_footer(); ?>
