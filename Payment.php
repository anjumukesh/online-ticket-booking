<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript">
function f1()
{
document.frm.method="post";
document.frm.action="accountupdate.php";
document.frm.submit();
}

</script>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:100%;
	height:464px;
	z-index:1;
	left: 0px;
	top: 6px;
}
.style1 {
	font-size: xx-large;
	font-weight: bold;
	font-style: italic;
	color: #9966FF;
}
.style3 {
	color: #FFFFFF;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.style6 {color: #FFFF00; font-weight: bold; font-style: italic; }
a:link {
	color: #FFFF00;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFF00;
}
a:hover {
	text-decoration: none;
	color: #FF0000;
}
a:active {
	text-decoration: none;
}
body {
	background-image: url();
	background-color: #000000;
}
.style7 {
	color: #FFFFFF;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
.style2 {	color: #FFFF66;
	font-style: italic;
	font-weight: bold;
}
.style15 {
	font-family: "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style22 {
	font-size: 18px;
	font-weight: bold;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	color: #FF0000;
}
.style23 {font-size: 18px; font-style: italic; font-weight: bold; color: #FF0000; }
.style26 {color: #FFFF00; font-weight: bold; font-style: italic; font-family: "Times New Roman", Times, serif; }
.style27 {color: #FFFF00}
-->
</style>
</head>

<body>
<form name="frm" method="post" action="paymentprocess.php" >
<?php session_start();?>
<?php
$con=mysql_connect('localhost','root','');
if(!$con)
{
	die("could not connect".mysql_error());
}
mysql_select_db("theatremanagementsystem");
 $Email=$_SESSION['user'];
	$qry="select *from registration where Email='$Email'";
	$result=mysql_query($qry);
	  while($row=mysql_fetch_array($result))
	  {
	  $userid=$row['regid'];
	   }
	   echo $userid;
	   $chk=$_POST['chk1'];
	   ?>
<div id="Layer1">
  <table width="100%" height="92" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td background="pic/curtains08-02-22.jpg" bgcolor="#E0DFE3"><div align="center" class="style1">
        <div align="center" class="style3 style8"><ins>SL THEATRE COMPLEX </ins></div>
      </div></td>
    </tr>
  </table>
  <table width="100%" height="37" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="6%" height="37" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style2"><a href="mainpage.php">HOME</a></div></td>
      <td width="11%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="nowshowing.php">NOW SHOWING </a></div></td>
      <td width="14%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style15"><a href="terms and conditions.php">TERMS &amp; CONDITIONS </a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="comingsoon.php">COMING SOON </a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="ECoupon.php">E-COUPON</a></div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="gallery.php">GALLERY</a></div></td>
      <td width="12%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6"><a href="contactus.php">CONTACT US</a> </div></td>
      <td width="9%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center"><a href="aboutus.php"><strong>ABOUT US</strong></a></div></td>
      <td width="10%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style6">
          <div align="center"><a href="guest_aboutus.php"></a> <a href="feedback.php" class="style15">FEEDBACK</a></div>
      </div></td>
      <td width="8%" background="pic/CURTAIN.JPG" bgcolor="#E0DFE3"><div align="center" class="style27"><strong><a href="login.php">LOGOUT</a></strong></div></td>
    </tr>
  </table>
  <table width="30%" border="0" align="right" cellpadding="1" cellspacing="1">
    <tr>
      <th scope="row"><?php $name=$_SESSION['name'];echo "Hai $name";?>&nbsp;</th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="952" height="95" border="0"><input type="hidden" name="userid"  value="<?php echo $userid;?>"/>
    
	  <?php
	  $k=1;
	   foreach ($chk as $val){
	  ?><tr>
      <td height="30">&nbsp;</td>
      <td class="style22"><div align="left">Coupon No:<?php echo $k;?></div></td>
      <td colspan="3">
	    <span class="style27">
	    <input type="text" name="coupamount[]"  value="<?php echo $val;?>"/>
	    Rs</span></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	  <?php $k++;}?>
	  
    <tr>
      <td width="269" height="30">&nbsp;</td>
      <td width="194"><div align="left"><span class="style22">Credit Card No:</span></div></td>
      <td colspan="3"><span class="style27">
        <label>
        <input name="creditcardno" type="text" id="creditcardno" />
        </label>
      </span></td>
      <td width="59">&nbsp;</td>
      <td width="221">&nbsp;</td>
    </tr>
    <tr>
      <td height="33">&nbsp;</td>
      <td><div align="right" class="style22">
        <div align="left">Enter Password: </div>
      </div></td>
      <td colspan="3"><input name="pass" type="password" id="pass" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right" class="style22">
        <div align="left">Select Expiry Date: </div>
      </div></td>
      <td width="71"><div align="center">
        <select name="expirymon" >
          <?php for ($i=1;$i<=12;$i++)
	  {
	  echo "<option>$i</option>";
	  }
	   ?>
        </select>
      </div></td>
      <td width="66"><select name="expiryyear" >
        <?php for ($i=2010;$i<=2030;$i++)
	  {
	  echo "<option>$i</option>";
	  }
	   ?>
      </select></td>
      <td width="42">&nbsp;</td>
      <td><div align="center">
        <input type="submit" name="Submit" value="Go" />
      </div></td>
      <td>&nbsp;</td>
    </tr>
  </table>
   <?php
if($_GET['AccountNo'])
{
	$AccountNo=$_GET['AccountNo'];
	//echo $AccountNo;
	$conn=mysql_connect("localhost","root","")or die("check your server connection.");
	if(!$conn)
	{
	die("could not connect".mysql_error());
	}
	$db=mysql_select_db("theatremanagementsystem")or die(mysql_error());  	
	$qry="select * from account where AccountNo='$AccountNo'";
	$result=mysql_query($qry);
	  while($row=mysql_fetch_array($result))
	  {
	 ?>
  <table width="100%" border="0" cellpadding="10">
    <tr>
      <th width="2%" scope="col">&nbsp;</th>
      <th width="47%" scope="col"><div align="right" class="style23">Credit Card  No:</div></th>
      <th width="22%" scope="col"><div align="left"><strong>
          <label for="textfield"></label>
          </strong>
              <input name="a1" type="text" id="a1" value="<?php echo $row['AccountNo'];?>" />
      </div></th>
      <th width="14%" scope="col">&nbsp;</th>
      <th width="15%" scope="col">&nbsp;</th>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right" class="style23">Name:</div></td>
      <td><div align="left" class="style8"><strong>
          <label for="label"></label>
          <?php echo $row['Name'];?></strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right" class="style23">Address:</div></td>
      <td><div align="left" class="style8"><strong>
          <label for="label2"></label>
          <?php echo $row['Address']?></strong></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right" class="style23">Balance:</div></td>
      <td><div align="left"><strong>
          <label for="label3"></label>
          </strong>
              <input type="text" name="balance" value="<?php echo $row['IntialDeposit']; ?>" />
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="right" class="style23">Cash : </div></td>
      <td><div align="left">
          <label for="label4"></label>
          <input type="text" name="Cash" id="label4" />
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="right">
          <label for="Submit"></label>
          <input type="button" name="Submit2" value="Click here to Pay" id="Submit" onclick="f1();" />
      </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <?php } 
   
   }?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="pic/CURTAIN.JPG">
    <tr>
      <td><div align="center"><span class="style7">Developed By:Ashwin,Vinayak,Vyshak,Robin </span></div></td>
    </tr>
  </table>
</div>
</form>
</body>
</html>
