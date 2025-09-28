<?php
$name=$_POST["username"];
$password=$_POST["pass"];
$email=$_POST["uemail"];
$dbcnx=mysqli_connect("localhost","root","","anime");
if(!$dbcnx) {
    echo "Unable to Connect Database";
    exit;
}
$sql= "insert into user values ('".$name."','".$email."','".$password."')";
$result=mysqli_query($dbcnx,$sql);
echo "Sign Up Successfully";
?>