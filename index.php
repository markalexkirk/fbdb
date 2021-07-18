<?php

$servername = "localhost";
$username = "fbdb";
$password = "LE6yidLViEjjwQY1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=fbdb", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connected successfully";
}
catch (PDOException $e)
{
  echo "Connection failed: " . $e->getMessage();
}
 ?>
<html>
<home>
  <title>Index</title>
</home>
<body>
  <h1>Index Page</h1>
</body>
</html>
