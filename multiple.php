<?php
$servername="121.200.55.60:3307";
$username="2019UIT1098";
$password="2019UIT1098";
$dbname="2019UIT1098";
$conn=new mysqli($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:".mysqli_connect_error());
}
echo "connected successful";
for($i=1;$i<=30;$i++)
{
$result=$i*5;
$sql="insert into multiplication_table(mulitiplicant,multiplier,result)values('$i',5,'$result')";
mysqli_query($conn,$sql);
echo "Success $i <br />";
}
?>







