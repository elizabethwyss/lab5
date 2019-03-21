<?php
  $username = $_POST["username"];
  $content = $_POST["content"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "b040w377", "Uefai3Ai", "b040w377");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

  $query = "";

/* close connection */
$mysqli->close();

?>
