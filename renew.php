<?php

session_start();
include "db_connect.php";
$gameid=$_SESSION["game"];


$sql = "UPDATE `position` SET  `current` = '1' WHERE `gameid`='".$gameid."' AND  `location`= 'a1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '2' WHERE `gameid`='".$gameid."' AND  `location`= 'a2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '3' WHERE `gameid`='".$gameid."' AND  `location`= 'a3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '4' WHERE `gameid`='".$gameid."' AND  `location`= 'a4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '5' WHERE `gameid`='".$gameid."' AND  `location`= 'a5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '3' WHERE `gameid`='".$gameid."' AND  `location`= 'a6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '2' WHERE `gameid`='".$gameid."' AND  `location`= 'a7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '1' WHERE `gameid`='".$gameid."' AND  `location`= 'a8' "; $conn->query($sql);

$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '6' WHERE `gameid`='".$gameid."' AND  `location`= 'b8' "; $conn->query($sql);

$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'c8' "; $conn->query($sql);

$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'd8' "; $conn->query($sql);

$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'e8' "; $conn->query($sql);

$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '0' WHERE `gameid`='".$gameid."' AND  `location`= 'f8' "; $conn->query($sql);

$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '16' WHERE `gameid`='".$gameid."' AND  `location`= 'g8' "; $conn->query($sql);

$sql = "UPDATE `position` SET  `current` = '11' WHERE `gameid`='".$gameid."' AND  `location`= 'h1' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '12' WHERE `gameid`='".$gameid."' AND  `location`= 'h2' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '13' WHERE `gameid`='".$gameid."' AND  `location`= 'h3' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '14' WHERE `gameid`='".$gameid."' AND  `location`= 'h4' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '15' WHERE `gameid`='".$gameid."' AND  `location`= 'h5' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '13' WHERE `gameid`='".$gameid."' AND  `location`= 'h6' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '12' WHERE `gameid`='".$gameid."' AND  `location`= 'h7' "; $conn->query($sql);
$sql = "UPDATE `position` SET  `current` = '11' WHERE `gameid`='".$gameid."' AND  `location`= 'h8' "; $conn->query($sql);


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$sql = "UPDATE `position` SET  `new` = '0', `old`='0' WHERE `gameid`='".$gameid."'"; $conn->query($sql);
$sql = "UPDATE `games` SET  `newgame` = '0' WHERE `id`='".$gameid."'"; $conn->query($sql);

$conn->close();


?>