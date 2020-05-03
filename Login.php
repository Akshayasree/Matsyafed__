<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRM::Login</title>
</head>

<body>
<?php
		$con=mysql_connect("localhost","root","");
		mysql_select_db("db_crm",$con);
		
if(isset($_POST['btnsave']))
{
	
	session_start();
	
	$username=$_POST['txtusername'];
	$password=$_POST['txtpassword'];
	
	$select="select * from tbl_admin where admin_username='".$username."' and admin_password='".$password."'";
	$exe=mysql_query($select);
    $count=mysql_num_rows($exe);
	
	$sele="select * from tbl_customer where customer_username='".$username."' and customer_password='".$password."'";
	$execute=mysql_query($sele);
    $count1=mysql_num_rows($execute);
	$data=mysql_fetch_array($execute);
	$custid=$data['customer_id'];
	$_SESSION['custid']=$custid;
	
	
	$sel="select * from tbl_department where dept_username='".$username."' and dept_password='".$password."'";
	$ex=mysql_query($sel);
    $count2=mysql_num_rows($ex);
	
	
	
if($count>0)
{
	$_SESSION['username']=$username;
	header("location:../../Admin/index.html");
}
else if($count1>0)
{
	$_SESSION['username']=$username;
	$_SESSION['logid']=$username;
	header("location:../Customer/HomePage.php");
}
else if($count2>0)
{
	$_SESSION['username']=$username;
	$_SESSION['lgid']=$username;
	header("location:../Department/index.html");
}

}
?>

<form id="frmLogin" name="frmLogin" method="post" action="">
<br /><br /><br /><br /><br /><br />
  <table width="200" border="0" align="center">
    <tr>
      <td>UserName</td>
      <td><input type="text" name="txtusername" id="txtusername" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="txtpassword" id="txtpassword" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btnsave" id="btnsave" value="Login" />
        
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>