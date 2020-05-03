<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body  >

<?php
include("Header.php");
$con=mysql_connect("localhost","root","");
mysql_select_db("db_matsayafed",$con);
if(isset($_POST['btnsave']))
{
    $a=$_POST['txtvname'];
    $b=$_POST['txtnum'];
    $c=$_POST['txtemail'];

    $d=$_POST['txtusername'];
    $e=$_POST['txtpassword'];
    $f=$_POST['txtdate'];
    $g=$_POST['txtaddress'];


    $editid=$_GET['Editid'];
    if($editid=="")
    {
        $insert="insert into tbl_customer(customer_name,vendor_contactno,customer_email,vendor_username,customer_password,customer_regdate,vendor_address)values('".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."')";
    //echo $insert;
    mysql_query($insert);
    }
}

?>

<form id="form1" name="form1" method="post" action="" style="background-image: url(images/Fishing-Wallpaper-and-Backgrounds-for-Mobile-and-Desktop.jpg)"  >
<br/>
<br/>
<br/><br/>
<br/>   
  <table  align="center" style="width:50%"   >
    <tr>
      <th width="153" > Name</th>

      <th width="211"><input type="text"  style="background-color: transparent" name="txtvname" id="txtcname" value="<?php echo $name;?>"/></th>
    </tr>

    <tr>
      <th>Contact Number</th>
      <th><input type="text" style="background-color: transparent" name="txtnum" id="txtnum" value="<?php echo $name2;?>"/></th>
    </tr>
    <tr>
      <th>Email ID</th>
      <td><input type="text" style="background-color: transparent" name="txtemail" id="txtemail" value="<?php echo $name3;?>"/></td>
    </tr>

    <tr>
      <th>User Name</th>
      <td><input type="text" style="background-color: transparent"  name="txtusername" id="txtusername" value="<?php echo $name4;?>"/></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input type="password"  style="background-color: transparent" name="txtpassword" id="txtpassword" value="<?php echo $name5;?>"/></td>
    </tr>
    <tr>
      <th>Registration Date</th>
      <td><input type="date" style="background-color: transparent"  name="txtdate" id="txtdate"  value="<?php echo $name6;?>"/></td>
    </tr>
    <tr>
      <th>Address</th>
      <td><textarea name="txtaddress" style="background-color: transparent"  id="txtaddress" value="<?php echo $name7;?>" cols="45" rows="5"></textarea></td>

    </tr>


    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btnsave" id="btnsave" value="Submit" />

      </div></td>
    
    </tr>
  </table>

</form>
</body>
</html>
    <?php
    include("footer.php");
    ?>