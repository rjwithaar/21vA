<pre>
<?php
require_once('settings.php');
try {
  $conn = new PDO("mysql:host=$servername;dbname=site_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$rows = [];
$query = "SELECT * FROM `user`;";
$sth = $conn->prepare($query);
$sth->execute();
while ($row = $sth->fetch(PDO::FETCH_OBJ)) {
  $rows[] = $row;
}
var_dump($rows);
?>
</pre>