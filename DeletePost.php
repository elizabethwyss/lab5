<?php

$toDelete = $_POST['postid'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "b040w377", "Uefai3Ai", "b040w377");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

foreach($toDelete as $id)
{
  echo "<p>" . $id . "</p>";
}

$query = "SELECT * FROM Posts";

if ($mysqli->query($query))
{

}


?>
