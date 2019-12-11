<?php
session_start();


$ii=$_POST['store']-1;

//-echo $ii;

$arr_=$_SESSION['arr'];


$_SESSION['TrainID']=$arr_[$ii*8];
$_SESSION['StartStation']=$arr_[$ii*8+1];
$_SESSION['StartTime']=$arr_[$ii*8+2];
$_SESSION['ArriveStation']=$arr_[$ii*8+3];
$_SESSION['ArriveTime']=$arr_[$ii*8+4];
$_SESSION['XseatsType']=$arr_[$ii*8+5];
$_SESSION['XseatsNum']=$arr_[$ii*8+6];
$_SESSION['Price']=$arr_[$ii*8+7];

/*echo $arr_[$ii*7];
echo $arr_[$ii*7+1];
echo $arr_[$ii*7+2];
echo $arr_[$ii*7+3];
echo $arr_[$ii*7+4];
echo $arr_[$ii*7+5];
echo $arr_[$ii*7+6];
echo $arr_[$ii*7+7];*/



echo "<script>window.location.href='../order/admin/index/menu-add2.php'</script>";