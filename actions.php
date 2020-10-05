<?php
session_start();
include "db_connect.php";

if(isset($_GET["approve"])){
$sql = "UPDATE  position set  `new`=`current` where `new`='0'";
	$result = $conn->query($sql);

	$sql = "UPDATE position set  `current`=`new`, `new`='0' where `gameid`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);

	$sql = "UPDATE position set  `current`='0', `old`='0' where `old` > '0' AND `gameid`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);


	$sql = "UPDATE games set  `status`='0' where `id`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);

}
if(isset($_GET["reject"])){
	$sql = "UPDATE position set `new`='0' where `gameid`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);
	$sql = "UPDATE games set `who`='".$_SESSION["opp"]."' , `status`='1' where `id`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);
}

if(isset($_GET["move_from"])){
	$sql = "UPDATE position set `old`='0' where `gameid`='".$_SESSION["game"]."'";
	echo $sql;
	$result = $conn->query($sql);
	$sql = "UPDATE position set `old`=`current` where  `location`='".$_GET["move_from"]."' AND `gameid`='".$_SESSION["game"]."'";
	echo $sql;
	$result = $conn->query($sql);
	$sql = "UPDATE games set `status`='1' where `id`='".$_SESSION["game"]."'";
	echo $sql;
	$result = $conn->query($sql);

}

if(isset($_GET["move_to"]) ){
	$new="";
	$sql="SELECT `old` from position WHERE `old`>0 AND `gameid`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);
	$new=$result->fetch_assoc();
	$sql = "UPDATE position set `new`='".$new["old"]."' where `gameid`='".$_SESSION["game"]."' AND `location`='".$_GET["move_to"]."'";
	$result = $conn->query($sql);
	//echo $sql;
	//die();
	//$sql = "UPDATE position set `old`='0' where `gameid`='".$_SESSION["game"]."'";
	//echo $sql;
	//$result = $conn->query($sql);
	$sql = "UPDATE games set `status`='2' where `id`='".$_SESSION["game"]."'";
	echo $sql;
	$result = $conn->query($sql);	

}

if(isset($_GET["cancel"]) ){
	$sql = "UPDATE position set `old`='0' , `new`='0' where `gameid`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);
	$sql = "UPDATE games set `status`='0' where `id`='".$_SESSION["game"]."'";

	$result = $conn->query($sql);
	//echo $sql;
	//die();
}

if(isset($_GET["cancel2"]) ){
	$sql = "UPDATE position set  `new`='0' where `gameid`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);
	$sql = "UPDATE games set `status`='1' where `id`='".$_SESSION["game"]."'";

	$result = $conn->query($sql);
	//echo $sql;
	//die();
}

if(isset($_GET["submit"]) ){
	//$sql = "UPDATE position set `new`=`old` where `gameid`='".$_SESSION["game"]."'";
	//$result = $conn->query($sql);
	//$sql = "UPDATE games set `new`=`old` where `id`='".$_SESSION["game"]."'";
	//$result = $conn->query($sql);
	$sql = "UPDATE games set `who`='".$_SESSION["opp"]."', `status`='3' where `id`='".$_SESSION["game"]."'";

	$result = $conn->query($sql);
}

if(isset($_GET["switch"]) ){
	$sql = "SELECT  `opp1`, `opp2` FROM games where `id`='".$_SESSION["game"]."'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	if($row["opp2"]==$row["who"]){
		$row["who"]=$row["opp1"];
	}
	else{
		$row["who"]=$row["opp2"];
	}

	$sql = "UPDATE games set `opp1`='".$row["opp2"]."', `opp2`='".$row["opp1"]."', `switch`='0', `who`='".$row["who"]."' where `id`='".$_SESSION["game"]."'";

	$result = $conn->query($sql);


}

if(isset($_GET["switchreq"]) ){
	$sql = "UPDATE games set `switch`='".$_SESSION["user"]."' where `id`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);

}

if(isset($_GET["cancelswitch"]) ){
	$sql = "UPDATE games set `switch`='0' where `id`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);

}

if(isset($_GET["newgame"]) ){
	include "renew.php";
}

if(isset($_GET["newgamereq"]) ){
	$sql = "UPDATE games set `newgame`='".$_SESSION["user"]."' where `id`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);

}

if(isset($_GET["cancelnewgame"]) ){
	$sql = "UPDATE games set `newgame`='0' where `id`='".$_SESSION["game"]."'";
	$result = $conn->query($sql);

}


header('Location: choosegame.php?game='.$_SESSION["game"]);

?>