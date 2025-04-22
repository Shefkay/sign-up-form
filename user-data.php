<?php
  $host_name = "localhost";
  $db_name = "db_signupform";
  $db_username = "root";
  $db_password = "";

  $php_class = mysqli_connect($host_name, $db_username, $db_password, $db_name) or die(mysqli_error($php_class));
?>