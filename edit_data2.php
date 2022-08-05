<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM bbb WHERE A=".$_GET['edit_id'];
 $result_set=mysqli_query($link, $sql_query);
  $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $first_name = $_POST['Name'];
 $last_name = $_POST['count'];
 $city_name = $_POST['number'];

 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE bbb SET Name='$first_name',count='$last_name',number='$city_name' WHERE A=".$_GET['edit_id'];
        
 // sql query for update data into database 
 // sql query execution function
 if(mysqli_query($link, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='main2.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
 if(isset($_POST['btn-cancel']))
 {
	header("Location: index.php");
 }
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By C107193249</title>
<link rel="stylesheet" href="new.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center"  bgcolor="fffffe" >
    <tr>
    <td><input type="text" name="Name" placeholder="Name" value="<?php echo $fetched_row['Name']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="count" placeholder="count" value="<?php echo $fetched_row['count']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="number" placeholder="number" value="<?php echo $fetched_row['number']; ?>" required /></td>
    </tr>
	
    <tr>
    <td>
    <button type="submit" name="btn-update" color="000000"><strong>UPDATE</strong></button>
	
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>