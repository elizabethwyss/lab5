<?php
  $username = $_POST["username"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "b040w377", "Uefai3Ai", "b040w377");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if ($username == "")
{
  echo "Error: Cannot create user with empty username";
}
else
{
  $query = "INSERT INTO Users (user_id) VALUES ('" . $username . "')";

  if ($mysqli->query($query))
  {
      echo "New user " . $username . " created successfully.";
  }
  else
  {
    echo "Error: User " . $username . " already exists";
  }
}
/* close connection */
$mysqli->close();

?>
