<?php
  $username = $_POST["username"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "b040w377", "Uefai3Ai", "b040w377");

  /* check connection */
  if ($mysqli->connect_errno)
  {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  echo "<h1>List of all Posts Written by " . $username . "</h1><hr>";
  echo "<table><tr><th align='left'>Posted Content:</th></tr>";

 $query = "SELECT * FROM Posts WHERE author_id='" . $username . "'";

 if ($result = $mysqli->query($query))
 {
     /* fetch associative array */
     while ($row = $result->fetch_assoc())
     {
       echo "<tr><td>&nbsp</td></tr> <tr><td>" . $row["content"] . "</td></tr>";
     }

     /* free result set */
     $result->free();
 }

  echo "</table>";

?>
