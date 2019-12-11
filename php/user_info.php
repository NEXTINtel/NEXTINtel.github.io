<?php
/**
 * 用于用户注册信息的完善，补充user表（用于修改基本信息，但不修改密码）
 * Create by ChangXing group
 * 2019-12-08
 */

session_start();

//获取当前登录的账户名称及密码,用于查询数据库
$username=$_SESSION['UserName'];
$password=$_SESSION['UserPassword'];
$Uid=$_SESSION['Uid'];

//传剩余参数
$name=$_POST['name'];
$phone=$_POST['phone'];
$IDcard=$_POST['IDcard'];
$email=$_POST['email'];
$desc=$_POST['desc'];


//连接数据库
$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}

//更新数据
mysqli_query($con,"UPDATE _user SET Name='$name' WHERE Uname='$username' AND Upasswd='$password'");
mysqli_query($con,"UPDATE _user SET Phone='$phone' WHERE Uname='$username' AND Upasswd='$password'");
mysqli_query($con,"UPDATE _user SET IDnumber='$IDcard' WHERE Uname='$username' AND Upasswd='$password'");
mysqli_query($con,"UPDATE _user SET Uemail='$email' WHERE Uname='$username' AND Upasswd='$password'");
mysqli_query($con,"UPDATE _user SET Remarks='$desc' WHERE Uname='$username' AND Upasswd='$password'");

$re_temp=mysqli_query($con,"SELECT Upasswd FROM `_user` WHERE Uname='$username' AND Upasswd='$password'");
$re=mysqli_fetch_array($re_temp);
$a=mysqli_num_rows($re);
if ($re){
    echo "<script>alert('账户基本信息修改成功！请妥善保管个人信息！');history.back();</script>";
}
else {
    echo "<script>alert('账户基本信息修改出错！请再次尝试或联系管理员！');history.back();</script>";
}
mysqli_close($con);