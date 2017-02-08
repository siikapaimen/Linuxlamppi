<!DOCTYPE html>
<html>

<head>
<title>Testisivu moimoi</title>
<head>

<body>
	<h1>There is no war in ba sing se</h1>

	<p> <?php print("PHP started") ?>   /<p>
<p>
<?php
// public_html/index.php - Read MySQL from PHP
// (c) 2016 Tero Karvinen http://TeroKarvinen.com

// MySQL Login
$user='mypandas';
$password='panpandapan!';

// Data Source Name i.e. connection details
$database=$user;
$dsn="mysql:host=localhost;charset=UTF8;dbname=$database";

// Open Connection, create new object of PDO class
$pdo=new PDO($dsn, $user, $password);

// Perform SQL Query
$pdoStatement=$pdo->prepare('SELECT * FROM pandas;');
$pdoStatement->execute();
$hits=$pdoStatement->fetchAll();

// Print the $hits Array
foreach($hits as $row) {
 echo "<p>".$row['id']." ".$row['name']."</p>\n";
}
print("PHP end.")
?>

</p>
</body>

</html>
