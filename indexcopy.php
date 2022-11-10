<!-- Задача №1: сформировать массив с данными для блока «Опыт работы». 
Вывести данные массива в HTML-шаблоне. -->

<?php
	$name = 'Sasha';
    $prof = 'Data Since';
    $country = 'Saint-Petersburg';
    $email = 'dora@yandex.ru';
    $telephone = '+7(937)777-00-00';
    $age = 2022 - 1997 ;
    $day = (2022 - 1997)*365;
    
    $workexperience = [
        'workplace' => [ 'Front End Developer', 'Web Developer / something.com', 
'Graphic Designer / designsomething.com'],
        'description' => ['Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel 
        in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, 
        unde doloremque repellendus iure, iste.', 'Consectetur adipisicing elit. Praesentium 
        magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora 
        soluta ea et odio, unde doloremque repellendus iure, iste.', 'Lorem ipsum dolor sit amet, 
        consectetur adipisicing elit.']
    ]    
?>

<div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $workexperience['post'][0] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><?php echo $workexperience['description'][0] ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $workexperience['post'][1] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p><?php echo $workexperience['description'][1] ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $workexperience['post'][2] ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p><?php echo $workexperience['description'][2] ?></p><br>
        </div>
      </div>