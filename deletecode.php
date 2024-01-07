<?php
error_reporting(0);
if(isset($_POST['delete']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'proj';
$conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn)
{
die('could not connect:'.mysql_error());
}
$email = $_POST['email'];
$sql = "DELETE FROM from WHERE email= '$email'" ;
mysql_select_db('proj');
$retrival = mysql_query($sql, $conn);
if(! $retrival)
{
die('could not delete data: '.mysql_error());

}
header("Location:delete.php");
mysql_close($conn);

}
else
{
echo"please fill correct field to delete";

}


?>