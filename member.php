<?php
$name=$_POST['sname'];
$pass=$_POST['spass'];
$mail=$_POST['smail'];
$number=$_POST['snum'];

$hostname="localhost";
$username="root";
$pass='';
$database="insta";

$conn=mysqli_connect($hostname,$username,$pass,$database);

if ($conn) {
    # code...
    echo "yes";
}
else{
    echo "no";
}
# checking if user in the database or not ?
$query="INSERT INTO TABLE gym(name,pswrd,mail,num) VALUES($name,$pass,$mail,$number)";
$check_user=mysqli_query($conn,$query);


?>