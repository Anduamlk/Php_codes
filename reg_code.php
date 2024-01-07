<?php
include('connection.php');

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$username =$_POST['username'];
$password =$_POST['password'];
$email =$_POST['email'];

if (is_numeric($fname) == true){
echo 'first name should be character only','</br>';
echo '<a href = "reg.php"/>back</a>';
   exit();
}

else if(is_numeric($lname)==true) {
echo 'last name shuold be character only','</br>';
echo '<a href="reg.php"/>back</a>';
  exit();  
}

$save=mysql_query("INSERT INTO aaa(fname, lname, username, password,email,date)
  VALUES ('$fname','$lname','$username','$password','$email',now())");
  if(!$save)
  {
    die(mysql_error());
    }
  echo"<script>alert('Thanks! You have registered successfully! ')</script>";
  echo"<script>window.open('login.php','_self')</script>";
  exit();
?>