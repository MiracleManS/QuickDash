<?php

include ('lib/functions.php');


if (!empty($_GET) && !empty($_GET['id'])) {
  
  header('Content-Type: application/json');
  header("access-control-allow-origin: *");
  echo return_item_json($_GET['id']);
  
} else {
  echo  '{"error": "You didn\'t provide an id"}';
}
?>