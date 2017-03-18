<?
function conx(){

$hostname = "localhost";
$dbname = "upec";
$username = "root";
$password = "";

$dsn = "mysql:host=$hostname;dbname=$dbname;charset=utf8";

	$bdd = new PDO($dsn,$username,$password);
	return $bdd;
}

$bd = conx();

?>