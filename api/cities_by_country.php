<?php

require '../file_functions.php';

$country_id = $_GET['country_id'];

$citiesList = getCitiesFromFile();
var_dump($citiesList);
exit;

$cityArr = [];

foreach($citiesList as $city) {
  if($city['country_id'] === $country_id) {
    $cityArr[] = $city;
  }
};

echo json_encode($cityArr);

?>