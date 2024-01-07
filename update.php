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
	.im{
    position: absolute;
    top: 65px;
    left: 554px;
    color: aliceblue;
    background-color: mediumaquamarine;
    padding-right: 20px;
    padding-left: 20px;
    font-size: 60px;
    width: 352px;
    height: 101px;
	}
</style>
</head>
<body>
<table width="1277" height="543" border="1">
  <tr>
	
    <td height="168" colspan="6"><img src="img/bhu.jpg" width="1265" height="164" alt=""/></td>
  </tr>
  <tr>
    <td width="216" height="46"><a href="home.php">  Home </a></td>
    <td width="216"><a href="selec.php">Select</a></td>
    <td width="216"> <a href="search.php">Search</a></td>
    <td width="216"><a href="reg.php">Register</a></td>
    <td width="216"><a href="delete.php" >Delete</a></td>
    <td width="400"><a href="update.php">Update</a></td>
  </tr>
  <tr>
    <td rowspan="2"></td>
    <td height="254" colspan="4">
	  <table>

	<tr>
		<td>First name :</td>
		<td><input type="text" name="fname" class="form-control"/></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="lname" class="form-control"/></td>
	</tr>
	<tr>
		<td>User Name</td>
		<td><input type="text" name="username" class="form-control"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" class="form-control"/></td>
	</tr>
		  <tr>
		<td>Password</td>
		<td><input type="text" name="password" class="form-control"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="update" value="update" class="btn btn-success btn-lg"/></td>
	</tr>
</table></td>
	  
    <td rowspan="2">&nbsp;</td>
	  
  </tr>
  <tr>
    <td height="63" colspan="4">Home | About Us | Contact Us | Copy right@2023CSE</td>
  </tr>
</table>
<?php
	if(isset($_POST['update'])){
		mysql_query($conn,"update from update where fname ='$_POST['lname'] where fname ='$_POST['fname']'")or die(mysql_error($conn));
	}
	?>
</body>
</html>