<?php
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("could not connect".mysql_error());
}
$db=mysql_select_db("theatremanagementsystem");    
$id=$_POST['rid'];

$qry="update registration set status='0' where regid='$id'"; 
$result=mysql_query($qry); 
//mysql_query($qry,$con)or die(mysql_error());
if(mysql_affected_rows()>0)
{
header("location:View_users.php");
}
else
{
header("location:View_users.php");
}
?>