<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "conenction successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con,'yc creator data');

$Name = $_POST['Name'];
$Mobile = $_POST['Mobile'];
$Email= $_POST['Email'];
$Invitation=$_POST['Invitaion'];
$Comment = $_POST['Comment'];

$query = " insert into sahildata (Name,Mobile,Email,Invitation,Comment) values ('$Name','$Mobile','$Email','$Invitation','$Comment')";


mysqli_query($con, $query);

?>
