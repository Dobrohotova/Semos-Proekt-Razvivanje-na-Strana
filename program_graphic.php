﻿<?php

include('general.php');

$sql_classes = 'select * from classes';
$query_classes = $db->query($sql_classes);
$classes = $query_classes->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/timeline.css">
  <script type="text/javascript" src="scripts/timeline.js"></script>
</head>

<body>
  <div class="header">
    <?php include('header_all.html'); ?>
  </div>
  <section class="intro">
    <div class="topImage">
      <img src="media/images/programa_grafika.png" alt="Графички Дизајн">
    </div>
    <?php include('navigation_graphic.php'); ?>
    <div class="container">
      <h1>Програма</h1>
      <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis posuere lorem, venenatis condimentum mi lobortis vel. Morbi vitae ultricies quam, non vestibulum quam. Maecenas ornare metus quis venenatis hendrerit. Pellentesque pharetra, nisl id blandit ultrices, ex ipsum convallis justo, a tristique sem est at risus. Nam sit amet orci ac justo tempor aliquet. Proin et dui nisi. Aenean mattis sodales erat eu rutrum. Nulla at faucibus enim.</p>
    </div>
  </section>

  <section class="timeline">
    <div class="timelineImageTop">
      <img src="media/images/icons/programa.png" alt="">
    </div>
      <ul>
        <li>
          <!-- <div>
            <h3>Основи на Информатичка технологија</h3>
              <div class="addInfo">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis posuere lorem, venenatis condimentum mi lobortis vel. Morbi vitae ultricies quam, non vestibulum quam.</p>
                <p>Професор: Мирослав Клампфер</p>
                <p>Број на часови: 16s</p>
              </div>
          </div> -->
          <?php foreach ($classes as $class){ 
            echo '<li>';
              echo '<div>';
                echo '<div class="addInfo">';
                  echo '<p>'.$class['description'].'</p>';
                    echo '<p>'.$class['professor_id'].'</p>';
                      echo '<p>'.$class['number_of_classes'].'</p>';
                echo '</div>';
               echo '<h3>'.$class['name'].'</h3>';
              echo '</div>';
            echo '</li>';
           } ?>
        </li>
        <!-- <li>
          <div>
            <h3>Комуникација со Клиент</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Кариера и Претприемништво</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Основи на Маркетинг</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Растерска Графика</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Десктоп Издаваштво</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Векторска Графика</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Ликовни естетски принципи</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Основи на цртање</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Типографија</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Дизајн Процес</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Фотографија</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Подготовка за печатење</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Дизајн на веб страна без кодирање</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Движечка графика</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Манипулација на Фотографија</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Форми на графички дизајн</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Корпоративен идентитет</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Дигитална илустрација</tme>
          </div>
        </li>
        <li>
          <div>
            <h3>Дизајн публикации</h3>
          </div>
        </li>
        <li>
          <div>
            <h3>Портфолио</h3>
          </div>
        </li> -->
      </ul>
      <div class="timelineImageBottom">
      <img src="media/images/icons/mortarboard.png" alt="">
    </div>
    <div class="polly">
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.543239612065!2d21.451760542180995!3d41.98861559690516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xccd976215f845b88!2sSemos+Computer+Education+Center!5e0!3m2!1sen!2s!4v1491299889807" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </section>
</body>
</html>