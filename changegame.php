<?php
session_start();
$_SESSION["game"]="";
$_SESSION["status"]="";
$_SESSION["who"]="";
$_SESSION["time"]="";
$_SESSION["opp"]="";
$_SESSION["opp1"]="";
$_SESSION["opp2"]="";

unset($_SESSION["game"]);
unset($_SESSION["status"]);
unset($_SESSION["who"]);
unset($_SESSION["time"]);
unset($_SESSION["opp1"]);
unset($_SESSION["opp2"]);
unset($_SESSION["opp"]);

header('Location: index.php');

?>