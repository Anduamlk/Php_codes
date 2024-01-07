<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
	Sam, [5/24/2023 9:11 AM]
 
body,td,th {
	font-size: 14px;
	color: #000;
}
body {
	background-color: #CCC;
	background-repeat: repeat;
	margin-left: 2px;
	margin-top: 2px;
	margin-right: 3px;
	margin-bottom: 3px;
}
</style>
</head>
<body>
<table width="1277" height="223" border="1">
  <tr>
    <td height="155" colspan="6"><img src="img/bhu.jpg" width="1271" height="164" alt=""/></td>
  </tr>
  <tr>
    <td width="216" height="46"><a href="home.php">  Home </a></td>
    <td width="216"><a href="selec.php"> Select</a></td>
	 <td width="216"><a href="search.php"> Search</a></td>
    <td width="216"> <a href="delete.php">Delete</a></td>
    <td width="216"><a href="update.php">Update</a></td>
    <td width="400"><a href="home.php">logout</a></td>
  </tr> 
  <tr>
    <td rowspan="2"></td>
    <?php
	error_reporting(0);
include('connection.php');
$sql="SELECT* FROM form ";
if(isset($_POST['search'])){
	$search_term=mysql_real_escape_string($_POST['search_box']);
	$sql.="WHERE fname='{$search_term}' ";
	$sql.="OR age='{$search_term}'";
	
}
else 
	echo 'no user exist';
$query=mysql_query($sql)or die(mysql_error());
?>
  <style type="text/css">
 
  </style>
</p>
 
 


<table width="668"border="1" align="left"cellpadding="0"cellspacing="0">
  <tr>
  <td width="79"><strong>First Name</strong></td>
  <td width="78"><strong>Last Name</strong></td>
  <td width="76"><strong>User Name</strong></td>
  <td width="90"><strong>Password</strong></td>
  <td width="72"><strong>Email</strong></td>
  <td width="72"><strong>Age</strong></td>
    <td width="72"><strong>Department</strong></td>
	 <td width="72"><strong>Gender</strong></td>
  <td width="72"><strong>comment</strong></td>
    <td width="72"><strong>Age</strong></td>
  </tr>
  <?php while($row=mysql_fetch_array($query)){?>
  <tr>
  <td><?php echo $row['fname'];?></td>
  <td><?php echo $row['lname'];?></td>
  <td><?php echo $row['username'];?></td>
  <td><?php echo $row['password'];?></td>
  <td><?php echo $row['email'];?></td>
   <td><?php echo $row['age'];?></td>
  <td><?php echo $row['dep'];?></td>
	    <td><?php echo $row['gender'];?></td>
   <td><?php echo $row['comment'];?></td>
  <td><?php echo $row['date'];?></td>
  <tr>
  
  <?php } ?>
  </tr>
  </table>
      
 
   
 
  </tr>
</table>

</body>
</html>