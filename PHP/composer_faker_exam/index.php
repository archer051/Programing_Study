<?php
  require_once './vendor/autoload.php';
  $faker = Faker\Factory::create('ko_KR');
  for ($i = 0; $i < 10; $i++)
    echo ("{$faker->name}<br>");
?>