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
  $query = "DELETE FROM Posts WHERE post_id='" . $id . "'";

  if ($mysqli->query($query))
  {
    printf("Post with id " . $id . " deleted successfully.");
    printf("\n");
  }
  else
  {
    printf("Unexpected Error: Post with id" . $id . " could not be deleted. Terminating process.");
    exit();
  }
}

printf("All Posts deleted successfully!");

?>
