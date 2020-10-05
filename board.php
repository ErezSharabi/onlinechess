<?php 
session_start();



if (!isset($_SESSION["user"])){
    header('Location: index.php');
}

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


include "db_connect.php";



$sql = "SELECT * FROM `tools` where '1'";

$result = $conn->query($sql);
$tools=[];


while ($row1=$result->fetch_assoc()) {
    
    array_push($tools, $row1);
}
    array_unshift($tools, $row1);



echo '<section class="gallery1 cid-sbBRzPNBc6" id="gallery1-m">

    <div class="container" align="center">';

echo '<table><tr>';


$sql = "SELECT * FROM `position` where `gameid`='1'";

$result = $conn->query($sql);


$i=0;
$j=1;
if ($result->num_rows > 0) {
  // output data of each row
$functional=0;
while ($row=$result->fetch_assoc()) {
   
   echo '<td';
   if($i==0 && $j<9){
    echo ' style="background-color: grey;">';
    $i++;
   }
   else{
    echo ">";
    $i=0;
   }

    if($row["new"]>0){
       echo "<img src=\"images/".$tools[$row["new"]]["image_move"]."\" data-slide-to=\"1\">";
       echo '</td>';
    }
    elseif ($row["current"]>0 && $row["old"]>0) {
    echo "<img src=\"images/".$tools[$row["current"]]["image_choose"]."\" data-slide-to=\"1\">";
    echo '</td>';
    } 

    elseif ($row["current"]>0 && $row["old"]==0) {
        if ($_SESSION["status"]==0 && $_SESSION["user"]==$_SESSION["who"] && (($_SESSION["user"]==$_SESSION["opp1"]&& $row["current"]<7) || ($_SESSION["user"]==$_SESSION["opp2"]&& $row["current"]>10) )) {
            echo '<a href="actions.php?move_from='.$row["location"].'"> <img src="images/'.$tools[$row["current"]]["image"].'" data-slide-to="1"></a>';
        }elseif ($_SESSION["status"]==1 && $_SESSION["user"]==$_SESSION["who"] && (($_SESSION["user"]==$_SESSION["opp1"]&& $row["current"]>7) || ($_SESSION["user"]==$_SESSION["opp2"]&& $row["current"]<10) )) {
            echo '<a href="actions.php?move_to='.$row["location"]."\" >";
            echo "<img src=\"images/".$tools[$row["current"]]["image"]."\" data-slide-to=\"1\"></a>";
        }else{
            
            echo "<img src=\"images/".$tools[$row["current"]]["image"]."\" data-slide-to=\"1\">";
        } 
        echo '</td>';
    }else{
        if ($_SESSION["user"]==$_SESSION["who"] && $_SESSION["status"]==1) {
            echo '<a href="actions.php?move_to='.$row["location"]."\" ><img src=\"images/white.svg\" data-slide-to=\"1\">";
            echo '</td>';            
        }else{
            echo "<img src=\"images/white.svg\" data-slide-to=\"1\">";

        }
        echo '</a></td>';
    }
    if($row["location"]=="a8" || $row["location"]=="b8" ||$row["location"]=="c8" ||$row["location"]=="d8" ||$row["location"]=="e8" ||$row["location"]=="f8" ||$row["location"]=="g8" || $row["location"]=="h8"){
        echo '</tr><tr>';
        if($i==0){
            $i=1;
        }
        else{
            $i=0;
 
        }
    }
}
}

$conn ->close();

echo '


</table>';

if($_SESSION["who"]==$_SESSION["user"] && $_SESSION["status"]==1){
echo '<a href="actions.php?cancel=1"><button class="btn btn-primary display-4">cancel</button></a>';

}

if($_SESSION["who"]==$_SESSION["user"] && $_SESSION["status"]==3){
echo '<a href="actions.php?approve=1"><button  class="btn btn-primary display-4">approve</button></a>';
echo '<a href="actions.php?reject=1"><button class="btn btn-primary display-4">reject</button></a>';

}

if($_SESSION["who"]==$_SESSION["user"] && $_SESSION["status"]==2){
echo '<a href="actions.php?submit=1"><button class="btn btn-primary display-4">submit</button></a>';
echo '<a href="actions.php?cancel2=1"><button class="btn btn-primary display-4">cancel</button></a>';
}
echo '<br>';

if($_SESSION["switch"]==$_SESSION["user"] && $_SESSION["switch"]>0){
echo '<a href="actions.php?cancelswitch=1"><button class="btn btn-primary display-4">cancel switch request</button></a>';
}elseif($_SESSION["switch"]!=$_SESSION["user"] && $_SESSION["switch"]>0){
echo '<a href="actions.php?switch=1"><button class="btn btn-primary display-4">Accept seitch request</button></a>';
}else{
echo '<a href="actions.php?switchreq=1"><button class="btn btn-primary display-4">Ask to switch sides</button></a>';
}

if($_SESSION["newgame"]==$_SESSION["user"] && $_SESSION["newgame"]>0){
echo '<a href="actions.php?cancelnewgame=1"><button class="btn btn-primary display-4">cancel new game request</button></a>';
}elseif($_SESSION["newgame"]!=$_SESSION["user"] && $_SESSION["newgame"]>0){
echo '<a href="actions.php?newgame=1"><button class="btn btn-primary display-4">Accept new game request</button></a>';
}else{
echo '<a href="actions.php?newgamereq=1"><button class="btn btn-primary display-4">Request a new game</button></a>';
}


echo '</section>';




?>
