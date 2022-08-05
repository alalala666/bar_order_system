<?php
include_once 'dbconfig.php';

if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM bbb WHERE A =".$_GET['delete_id'];
 mysqli_query($link, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>C107193232 顏劭宇 </title>
<link rel="stylesheet" href="new.css" type="text/css" />
<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data2.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='main2.php?delete_id='+id;
 }
}
</script>
</head>


<body>
<center>

<div id="body">
 <div id="content ">
    <table align="center"  bgcolor="fffffe" >
    <tr>
    <th colspan="6"><a href="add_data2.php">點酒按這~~</a></th>
    </tr>
    <th>調酒代號</th>
    <th>杯數</th>
    <th>桌號</th>
	
    <th colspan="2">新增修改</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM bbb";
 $result_set = mysqli_query($link, $sql_query);
 while ($row = mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		
		<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>
<a href="logout.php" ><img src="out.png"width="70"  height="60" ></a>
<a href="30.html"><img src="find.png"width="70"  height="60" ></a>
</center>
</body>
</html>