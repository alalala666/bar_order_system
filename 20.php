<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>會員管理系統</title>
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.account.value.length == 0)
          alert("帳號欄位不可以空白哦！");
        else if (document.myForm.password.value.length == 0)
          alert("密碼欄位不可以空白哦！");
        else 
          myForm.submit();
      }
    </script>
  </head>
  <body>
    <p align="center"><img src="30.jpg"></p>  
   
	<table width="1400" height="80">
　		<tr><td align="center">歡迎來到本站，上班囉各位~~</td></tr>
	</table>
	
    <form action="checkpwd2.php" method="post" name="myForm">
      <table width="40%" align="center">
        <tr> 
          <td align="center"> 
            <font color="#000000">帳號：</font> 
            <input name="account" type="text" size="20">
          </td>
        </tr>
        <tr> 
          <td align="center"> 
            <font color="#000000">密碼：</font> 
            <input name="password" type="password" size="20">
          </td>
        </tr>
        <tr>
          <td align="center"> 
            <input type="button" value="登入" onClick="check_data()">      　 
            <input type="reset" value="重填">
          </td>
        </tr>
      </table>
    </form>
    <p align="center">
           
  </body>
</html>