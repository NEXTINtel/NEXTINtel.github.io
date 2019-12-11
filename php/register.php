<?php
/**
 * 用于用户账户注册
 * Create by ChangXing group
 * 2019-11-24
 */

include "connect.php";

session_start();

$username = $_POST["registerUsername"];   //调用注册时提交的用户名称

$email=$_POST["registerEmail"];

$passwd_temp=$_POST["registerPassword"];
$passwd=md5($passwd_temp);

//启用session存储用户信息
$_SESSION['UserName']=$username;
$_SESSION['UserPassword']=$passwd;

//向数据库添加用户
$query="INSERT INTO `_user`(`Uid`, `Uname`, `Uemail`, `Upasswd`, `Ucreatime`) VALUES (RAND()*10^6,'$username','$email','$passwd',NOW())";
//$query="INSERT INTO User(`Uid`, `Uname`, `Uemail`, `Upasswd`, `Ucreatetime`) VALUES (RAND()*10^6,'$username','$email',MD5($passwd),NOW())";
$result=mysqli_query($link,$query);
//$a=mysqli_num_rows($result);

//查询账户ID,并存入session
$ID_temp=mysqli_query($con,"SELECT Uid FROM '_user' WHERE Uname='$uers' AND Upasswd='$password'");
$ID=mysqli_fetch_array($ID_temp);
$_SESSION['Uid']=$ID[0];

if ($result) {
    echo "<script>alert('注册成功，请填写详细信息，开始购票吧！');window.location.href='../order/admin/index/admin-info.php#first'</script>";
}
else {
    echo "<script>alert('注册失败！请再次尝试一次！');history.back();</script>";
}
