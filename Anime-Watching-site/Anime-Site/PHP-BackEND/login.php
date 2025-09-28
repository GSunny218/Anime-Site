<?php
$password=$_POST["pass"];
$email=$_POST["uemail"];
$dbcnx=mysqli_connect("localhost","root","","anime");
if(!$dbcnx) {
    echo "Unable to Connect Database";
    exit;
}
$sql= "select * from user";
$result=mysqli_query($dbcnx,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_BOTH)) {
    if($row["email"]== $email && $row["Password"]!= $password) {
        echo "<script>alert('Login Failed :/ ! Please enter valid email and password!');</script>";
    } else if($row["email"]!= $email && $row["Password"]== $password) {
        echo "<script>alert('Login Failed :/ ! Please enter valid email and password');</script>";
    } else if($row["email"]!= $email && $row["Password"]!= $password) {
        echo "<script>alert('Login Failed :/ ! Please sign up first!');</script>";
    } else {
        echo "<script>alert('Login Succesfully!');</script>";
    }
}
?>