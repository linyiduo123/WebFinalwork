<?php
  define('DB_HOST', '127.0.0.1');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'departmentinfo');
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  mysqli_query($dbc, 'SET NAMES UTF8');
?>
