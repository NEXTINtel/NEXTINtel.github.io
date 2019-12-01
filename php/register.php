<?php
include "connect.php";

$username = $_POST["registerUsername"];   //调用注册时提交的用户名称

$email=$_POST["registerEmail"];

$passwd_temp=$_POST["registerPassword"];
$passwd=md5($passwd_temp);

$query="INSERT INTO `user`(`Uid`, `Uname`, `Uemail`, `Upasswd`, `Ucreatime`) VALUES (RAND()*10^6,'$username','$email','$passwd',NOW())";
//$query="INSERT INTO User(`Uid`, `Uname`, `Uemail`, `Upasswd`, `Ucreatetime`) VALUES (RAND()*10^6,'$username','$email',MD5($passwd),NOW())";
$result=mysqli_query($link,$query);

if ($result) {
    echo "<script>alert('注册成功，开始购票吧！');window.location.href='../index.html'</script>";
}
else {
    echo "<script>alert('注册失败！请再次尝试一次！');history.back();</script>";
}
