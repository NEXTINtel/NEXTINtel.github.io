<?php
session_start();

//include 'search.php';
$UserName=$_SESSION['UserName'];
$UserPassword=$_SESSION['UserPassword'];

$TrainID_=$_SESSION['TrainID'];
$StartStation_=$_SESSION['StartStation'];
$StartTime_=$_SESSION['StartTime'];
$ArriveStation_=$_SESSION['ArriveStation'];
$ArriveTime_=$_SESSION['ArriveTime'];
$Passenger=$_POST['passenger'];
$SeatType=$_SESSION['XseatsType'];
$SeatPrice=$_SESSION['Price'];
//处理车厢号，并分配座位，应该在result.php中也有声明
$CompartmentID=4;
$SeatID=96;
$SeatAllID='4车厢96号';

//连接数据库
$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}

//向火车票订单表中添加信息
$sql1 = "INSERT INTO _tickets_info (OrderID, TrainID, StartStation, StartTime, ArriveStation, ArriveTime, Passenger, SeatType, CompartmentID, SeatID, SeatAllID, Price, CreateTime) VALUES (RAND()*10^6,'$TrainID_','$StartStation_','$StartTime_','$ArriveStation_','$ArriveTime_','$Passenger','$SeatType','$CompartmentID','$SeatID','$SeatAllID','$SeatPrice',NOW())";

//向火车票旅客用户表中添加记录，以便进行内连接
$sql2="INSERT INTO _tpu (TrainID, Passenger, UserName, UserPassword) VALUES ('$TrainID_','$Passenger','$UserName','$UserPassword')";

$result1 = mysqli_query($con, $sql1);
$result2=mysqli_query($con,$sql2);

if ($result1&&$result2) {
    echo "<script>alert('订单提交成功，请留意乘车时间哦！');window.location.href='../order/admin/index/rbac-admin.php'</script>";
}
else {
    echo "<script>alert('订单提交失败！请检查网络或联系管理员后再次尝试！');history.back();</script>";
}