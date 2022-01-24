<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$dbServer =  "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "db";

$mysqli = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

//main page text
$sql = "select * from langs;";
  $result = mysqli_query($mysqli, $sql);
  $resultCheck = mysqli_num_rows($result);
  $text = [];
  if($resultCheck){
    while($row = mysqli_fetch_assoc($result)){
      $text[$row['id']] = $row['ar'];
    }
  }
//countries
$sql = "select * from countries";
$result = mysqli_query($mysqli, $sql);
$resultCheck = mysqli_num_rows($result);
$countries = [];
if($resultCheck){
  while($row = mysqli_fetch_assoc($result)){
    $countries[$row['country_code']] = $row['country_arName'];
  }
}
?>


