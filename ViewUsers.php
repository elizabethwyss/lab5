<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "b040w377", "Uefai3Ai", "b040w377");

  /* check connection */
  if ($mysqli->connect_errno)
  {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

 echo "<h1>List of all users:</h1><hr>"
 echo "<table><tr><th>Username</th></tr>"

  $query = "SELECT * FROM Users";

  if ($result = $mysqli->query($query))
  {
      /* fetch associative array */
      while ($row = $result->fetch_assoc())
      {
        echo "<tr><td>" . $row["user_id"] . "</td></tr>";
      }
      else
      {
        printf("Error: user " . $username . " not found.");
      }

      /* free result set */
      $result->free();
  }

  echo "</table>";

?>
