<?php
Session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password)
{
$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
mysql_select_db("proj")or die("couldn't find database");
$query=mysql_query("SELECT*FROM aaa WHERE username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername=$row['username'];
$dbpassword=$row['password'];
}
if($username==$dbusername&&$password==$dbpassword)
{
header('Location:home.php');
$_SESSION['username']=$username;
}
else{
echo"incorrect password";
}
}
else{
echo"sorry this user is not Register so we have go to registeration page";
}
}
else
echo "you entered incorrect passowrd<br> <b>Warnning:</b><br> please admin dont forget your user name as well as password since you are handling big system
!";
echo "<br>";
echo "<br>";
echo '<a href="login.php"/>Check to Login</a>';
?>