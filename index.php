<?php
  $xml = file_get_contents("http://delivery.chalk247.com/team_list/NFL.JSON?api_key=74db8efa2a6db279393b433d97c2bc843f8e32b0");
  header("Access-Control-Allow-Origin: *");
  echo $xml;
  // $array =  json_decode($xml, true);
  // echo $array['results']['data']['team'][0]['name'];
  // // print_r($array);
?>