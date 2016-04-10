<?php


$host = "127.0.0.1";
$db = "questbook";
$charset = "utf8";
$user ="root";
$pass ="vvv333";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$pdo = new PDO($dsn, $user, $pass, $opt);

//$statement = $pdo->prepare("INSERT INTO `questbook`.`HomeWork` (`First`) VALUES ('Name')");
//$statement = $pdo->query("DELETE FROM `HomeWork` WHERE `First` = 'Name'");
$statement = $pdo->query("SELECT * FROM `Customers`");


$statement->execute();
foreach ($statement as $row)
{
    echo print_r($row). "\n";
}





include_once('model.php');

if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['email']) ) {
    $data = array();
    $data['name'] = htmlspecialchars( $_POST['name'] );
    $data['email'] = htmlspecialchars( $_POST['email'] );
    $data['massage'] = htmlspecialchars( $_POST['massage']);
    $data['time'] = date('Y-m-d H:i:s');
    saveMassage($data);
}

$savedMassages = readMassage();

include_once('template.php');