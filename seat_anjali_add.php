<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$seats=$_POST['anj1'];
$time=$_POST['time'];
//$theatreid=$_POST['theatreid'];
$filmid=$_POST['film_name'];
$show=$_POST['shows'];
$date=$_POST['date'];
$showid=$_POST['showid'];
$bookingdate=$_POST['bookingdate'];
print_r($seats);
foreach($seats as $val)
{
$seats1=$val.",".$seats1;
}
$seats1=trim($seats1,',');
$amo=count($seats);
$amount=$amo*50;

$con=mysql_connect("localhost","root","");
if(!$con )
{
die ("could not connect".mysql_error());
}
$db=mysql_select_db('theatremanagementsystem');
$qry="insert into tickets(seats,amount,theatreid,showid,date,bookingdate)values('$seats1','$amount',1,'$showid','$date',now())";
echo $qry;
mysql_query($qry) or die(mysql_error());

if(mysql_affected_rows()>0)
{
header("location:Ticket_Print1.php?bid=$bookingdate&showdate=$date&theatre=Anjali&seats=$seats1&amount=$amount&time=$time&no=$amo&fn=$filmid&sn=$show");
//header("location:seat_anjali.php");
}
else
{
header("location:seat_anjali.php");
}
?>
</body>
</html>
