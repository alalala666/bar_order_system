<?php
	include_once 'dbconfig.php';
	if(isset($_POST['btn-save']))
	{
		// variables for input data
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city_name = $_POST['city_name'];
		$id = $_COOKIE["id"];
		// variables for input data
 
		// sql query for inserting data into database
 
        $sql_query = "INSERT INTO bbb(Name,count,number,id) VALUES('$first_name','$last_name','$city_name','$id')";
		mysqli_query($link, $sql_query);
        
        // sql query for inserting data into database
 
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>C107193232 顏劭宇</title>
<link rel="stylesheet" href="new.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center"  bgcolor="fffffe" >
    <tr>
    <td align="center"><a href="main2.php">回到首頁~~</a></td>
    </tr>
    <tr>
    <td><input type="text" name="first_name" placeholder="調酒代號" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="last_name" placeholder="杯數" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="city_name" placeholder="桌號" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="id" placeholder="id" required /></td>
    </tr>
	
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
	
    </table>
    </form>
    </div>
</div>

</center>
</body>