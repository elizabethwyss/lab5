<?php
  $username = $_POST["username"];
  $content = $_POST["content"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "b040w377", "Uefai3Ai", "b040w377");
  $userFound = false;

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT user_id FROM Users WHERE user_id='" . $username . "'";

if ($result = $mysqli->query($query))
{
    /* fetch associative array */
    if($row = $result->fetch_assoc())
    {
      $userFound = true;
    }
    else
    {
      printf("Error: user " . $username . " not found.");
    }

    /* free result set */
    $result->free();
}

if ($userFound)
{
  if ($content == "")
  {
    printf("Error: cannot create a blank post.");
  }
  else
  {
    $query = "INSERT INTO Posts (content, author_id) VALUES ('" . $content . "', '" . $username . "')";

    if ($result = $mysqli->query($query))
    {
          printf("Post successfully created!");

        /* free result set */
        $result->free();
    }
  }
}

/* close connection */
$mysqli->close();

?>
