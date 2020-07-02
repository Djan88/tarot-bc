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
          <a href="https://shop-bc.com/product/kniga-lechebnoe-tarot-chikurov-yuv" target="_blank" class="book_link btn btn-primary btn-lg">Купить бумажное издание</a>
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
          <h2 class="main_heading"><span class="blue_text">Бесплатный</span> онлайн курс</h2>
          <div class="doctor_about tarot_about">
            <h3 class="pink_text">Пять уникальных уроков, которые перевернут ваши взгляды на мир Tarot!</h3>
            <ol>
              <li>Об авторе метода; немного предыстории; какие колоды карт я использую</li>
              <li>Открытие, базовая укладка и активация колоды</li>
              <li>Цифры мастей; стратегии реальности; техники инверсии стратегий реальности</li>
              <li>Карты Двора; первоэлементы; пути спускания Духа в материю; техники коррекции первоэлементов</li>
              <li>Таблица соответствий Старших Арканов зонам тела; первоэлементные конституции; понятие грехопадения карты, позиции внетелесных карт;</li>
            </ol>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          <a href="https://school-bc.ru/#tarotstart" class="btn btn-success order-course btn-lg">Записаться<br>на онлайн курс</a>
        </div>
      </div>
    </div>
  </section>
  <section class="doctor seminars_light" id="faq">
    <div class="container chikurov_info">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="main_heading">Хотите узнать больше о Tarot?</h2>
          <div class="doctor_about">
            <p>Ответы на многие вопросы о Tarot Вы найдете в разделе <a href="/voprosy-i-otvety/">"Вопросы и ответы"</a></p>
            <p>Присоединяйтесь к обсуждению в сообществе <a target="_blank" href="https://www.facebook.com/groups/1396733250536353/">"Лечебное Tarot"</a> в Facebook. Задайте вопросы которые давно хотели задать, найдите единомышленников, или расскажите о своем опыте работы с Tarot</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
