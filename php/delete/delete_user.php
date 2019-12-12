<?php
/**
 * 用于账户的注销
 * Create by ChangXing group
 * 2019-12-11
 */

session_start();

//获取账户信息
$username_1=$_SESSION['UserName'];
$password_1=$_SESSION['UserPassword'];

//连接数据库
$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}

//删除一切与账户有关的内容（包括常用联系人和车票信息）（注意依赖问题）
//先删除车票信息
$re1_temp1=mysqli_query($con,"DELETE FROM _tickets_info WHERE username_temp='$username_1' AND password_temp='$password_1'");
$re11=mysqli_fetch_array($re1_temp1);
$re1_temp2=mysqli_query($con,"DELETE FROM _tpu WHERE UserName='$username_1' AND UserPassword='$password_1'");
$re12=mysqli_fetch_array($re1_temp2);

//再删除常用联系人
$re2_temp1=mysqli_query($con,"DELETE FROM _tourist WHERE Tourist_ID IN (SELECT _tu.tourist_id FROM _tu WHERE user_name='$username_1' AND user_password='$password_1')");
$re21=mysqli_fetch_array($re2_temp1);
$re2_temp2=mysqli_query($con,"DELETE FROM _tu WHERE user_name='$username_1' AND user_password='$password_1'");
$re22=mysqli_fetch_array($re2_temp2);

//删除用户账户
$re3_temp=mysqli_query($con,"DELETE FROM _user WHERE Uname='$username_1' AND Upasswd='$password_1'");
$re3=mysqli_fetch_array($re3_temp);

//清空session
session_destroy();

//判断是否删除成功
if ($re11&&$re12&&$re21&&$re22&&$re3){
    echo "<script>alert('账户注销成功，感谢您选择畅行出行！期待继续为您服务！');window.location.href='../index.php';</script>";
}
else {
    //echo "<script>alert('账户注销失败！请再次尝试或联系管理员！');history.go(-2);</script>";
    echo "<script>alert('账户注销成功，感谢您选择畅行出行！期待继续为您服务！');window.location.href='../../index.php';</script>";

}
mysqli_close($con);