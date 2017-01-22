<?php
  /*
  * Utilities used within the project
  */
  require_once('color_converter.php');

  function redirect($location) {
    header('Location: ' . $location);
    exit;
  }

  function randomColor() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
  }
?>
