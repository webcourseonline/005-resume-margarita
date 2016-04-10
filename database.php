<?php

/*$host = "127.0.0.1";
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
$statement = $pdo->query("UPDATE HomeWork First = Name");

$statement->execute();
foreach ($statement as $row)
{
    echo print_r($row). "\n";
}

$pdo = new PDO($dsn, $user, $pass, $opt);
$sql = "INSERT INTO HomeWork (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
$statement->execute();
foreach ($statement as $row)
{
    echo print_r($row). "\n";
}

$pdo = new PDO($dsn, $user, $pass, $opt);
$statement = $pdo->query("DELETE FROM HomeWork First = Name");

$statement->execute();
foreach ($statement as $row)
{
    echo print_r($row). "\n";
}*/

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
$statement = $pdo->query("SELECT * FROM `HomeWork`");

/*$statement = $pdo->prepare("INSERT INTO HomeWork(userName,
            userEmail,
            userAddress)
            VALUES (
            :userName,
            :userEmail,
            :filmImage,
            :userAddress
            )");

//$statement = $pdo->prepare("INSERT INTO `questbook`.`HomeWork` (`First`) VALUES ('Name')");
*/

$statement->execute();
foreach ($statement as $row)
{
    echo print_r($row). "\n";
}





