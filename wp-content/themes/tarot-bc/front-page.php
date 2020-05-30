<?php get_header(); ?>
  <section class="doctor seminars_dark" id="doctor">
    <div class="container chikurov_info">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <h1 class="main_heading">«Лечебное Tarot»</h1>
          <div class="doctor_about tarot_about">
            <h3 class="blue_text">Возможности уникального метода:</h3>
            <ol>
              <li>Можно работать с клиентом как вживую, так и по фото на расстоянии</li>
              <li>Улучшить качество Здоровья</li>
              <li>Восстановить и значительно поднять уровень ресурса жизненной силы</li>
              <li>Разрешить в значительной мере родовые и кармические проблемы</li>
              <li>Привести в баланс сил желания, жизненные цели и их конечные практическое результаты</li>
              <li>Убрать избыточное напряжение в делах</li>
              <li>Сделать отношения гармоничными и уважительными</li>
            </ol>
            <?php if (!is_user_logged_in()) { ?>
              <p class="pink_text">Зарегистрируйтесь и получите в подарок бесплатный онлайн-курс и возможность читать книгу Лечебное Tarot онлайн</p>
            <?php } ?>
          </div>
          <a href="/book/1" class="seminars_link btn btn-success btn-lg cur_page_ridden">Читать книгу онлайн</a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          <img class="chikurov_img" src="<?php bloginfo('template_url'); ?>/img/tarot.png" alt="Лечебное Tarot">
        </div>
      </div>
    </div>
  </section>
  <section class="doctor seminars_light" id="chikurov">
    <div class="container chikurov_info">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          <img class="chikurov_img" src="<?php bloginfo('template_url'); ?>/img/chi.png" alt="Чикуров Ю.В.">
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <h1 class="main_heading">«Чикуров Ю. В.»</h1>
          <div class="doctor_about tarot_about">
            <p>Доктор <b>Ю. Чикуров</b>, канд.мед.наук, специалист в области неврологии, остеопатии и психологии, профессор РАНМ, Doctor Holistic Medicine EHO (PhD).</p>
            <p>Автор книг: "Краниосакральная терапия", "Мягкие мануальные техники", "Висцеральная остеопатия", "Остеопатическое лечение внутрикостных дисфункций", "Эстетическое мануальное моделирование лица и тела", "Биологическое центрирование», «Практическая психосоматика», «Лечебное Tarot».</p>
            <p>Основоположник новых прогрессивных направлений,  автор <a target="_blank" href="https://chikurov.com/seminary">практических семинаров</a> и <a target="_blank" href="http://school-bc.ru/">онлайн-курсов</a>.</p>
          </div>
          <a href="https://chikurov.com" target="_blank" class="pull-right btn btn-success btn-lg">Школа Доктора Чикурова</a>
        </div>
      </div>
    </div>
  </section>
  <section class="doctor seminars_dark" id="course">
    <div class="container chikurov_info">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <h1 class="main_heading">Онлайн курс</h1>
          <div class="doctor_about tarot_about">
            <p>Хорошо читать книгу и одновременно осваивать материал на практике.<br>Для этого я создал <span class="pink_text">бесплатный онлайн-курс «Лечебное Tarot старт»</span> ориентированный для всех интересующихся данной тематикой.</p>
            <p><h4 class="blue_text">Краткое содержание этого курса:</h4></p>
            <p><span class="bullet">•</span> Об авторе метода;</p>
            <p><span class="bullet">•</span> Немного предыстории;</p>
            <p><span class="bullet">•</span> Какие колоды карт я использую;</p>
            <p><span class="bullet">•</span> Открытие, базовая укладка и активация колоды;</p>
            <p><span class="bullet">•</span> Предназначение разных частей колоды Tarot;</p>
            <p><span class="bullet">•</span> Таблица соответствий частей тела и Старших Арканов;</p>
            <p><span class="bullet">•</span> Две простые, но эффективные техники самолечения;</p>
          </div>
          <a href="http://school-bc.ru/" class="btn btn-success btn-lg">Онлайн курс</a>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          <img class="chikurov_img" src="<?php bloginfo('template_url'); ?>/img/logo_big.png" alt="Лечебное Tarot. Онлайн курс">
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
