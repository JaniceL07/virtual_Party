<?php
/**
 * using mysqli_connect for database connection
 */

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpassword = '';
  $dbdb = 'virtualparty';
  $dbport = 3306;

// Create connection
$mysqli = new mysqli ($dbhost, $dbuser, $dbpassword, $dbdb);
?>