<?php
$username= "root";
$password = "";
$server = 'localhost';
$database = 'youtubedata';
$con = mysqli_connect($server,$username, $password);
$db = mysqli_select_db($con,$database);
if($con){
    echo " Connection Successful";
}else{
    //  each " NO Connection";
    die(" NO connection" .mysqli_connect_error());
}
 
// $con = mysqli_connect('localhost','root');
// if($con){
//     echo " Connection Successful";
// }else{
//   echo "No Connection";
// }
mysqli_select_db($con,'youtubedata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile =$_POST['mobile'];
$comments= $_POST['comments'];


$insertquery = "insert into userinfodata1 (user, email,mobile,comments) 
values('$user','$email','$mobile','$comments')";
echo "$query";
mysqli_query($con,$insertquery);
 header('location:index.php');
 ?>