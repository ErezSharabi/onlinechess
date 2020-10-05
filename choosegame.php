<?php

session_start();
if(isset($_GET["game"])){
$_SESSION["game"]=$_GET["game"];
include "db_connect.php";
$result=$conn->query("SELECT * from `games` where id='".$_SESSION["game"]."'");
$conn->close();
$row=$result->fetch_assoc();
$_SESSION["status"]=$row["status"];
$_SESSION["who"]=$row["who"];
$_SESSION["time"]=$row["time"];
$_SESSION["opp1"]=$row["opp1"];
$_SESSION["opp2"]=$row["opp2"];
$_SESSION["newgame"]=$row["newgame"];
$_SESSION["switch"]=$row["switch"];
if ($row["opp1"]==$_SESSION["user"]) {
	$_SESSION["opp"]=$row["opp2"];
}
else{
	$_SESSION["opp"]=$row["opp1"];
}
}
header('Location: index.php');


?>