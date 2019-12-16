<?php

session_start();

$arr_temp=$_SESSION['delete_ticket'];

$username_2=$_SESSION['UserName'];
$password_2=$_SESSION['UserPassword'];

//echo $arr_temp[0];

//连接数据库
$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}

//删除指定账户下指定乘车人订单
$re1_temp1=mysqli_query($con,"DELETE FROM _tickets_info WHERE OrderID='$arr_temp[0]'");
$re11=mysqli_fetch_array($re1_temp1);

$re1_temp2=mysqli_query($con,"DELETE FROM _tpu WHERE UserName='$username_2' AND UserPassword='$password_2' AND Passenger='$arr_temp[6]'");
$re12=mysqli_fetch_array($re1_temp2);

//向删除订单数据表中添加删除的订单信息
$sql1 = "INSERT INTO delete_ticket (OrderID, TrainID, StartStation, StartTime, ArriveStation, ArriveTime, Passenger, SeatType, CompartmentID, SeatID, SeatAllID, Price, DeleteTime,Username,Password) VALUES ('$arr_temp[0]','$arr_temp[1]','$arr_temp[2]','$arr_temp[3]','$arr_temp[4]','$arr_temp[5]','$arr_temp[6]','$arr_temp[7]','$arr_temp[8]','$arr_temp[9]','$arr_temp[10]','$arr_temp[11]',NOW(),'$username_2','$password_2')";
$result22=mysqli_query($con,$sql1);
$result2=mysqli_fetch_array($result22);

if ($re11&&$re12&&$result2){
    echo "<script>alert('退票成功！请重新开始购票吧！');window.location.href='../../result.php';</script>";
}
else {
    echo "<script>alert('退票成功！请重新开始购票吧！');window.location.href='../../result.php';</script>";
}
mysqli_close($con);