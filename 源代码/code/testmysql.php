<?php
$dbh = new PDO('mysql:host=localhost;dbname=test', "root", "");
if (!$dbh)
  {
  die('Could not connect: ' . mysql_error());
  }


if ($dbh->exec("CREATE DATABASE my_db"))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

?>