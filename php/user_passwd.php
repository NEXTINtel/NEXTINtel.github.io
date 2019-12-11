<?php
/**
 * 用于修改用户账户密码
 * Create by ChangXing group
 * 2019-12-08
 */

session_start();

//获取当前登录的账户名称及密码,用于查询数据库
$username=$_SESSION['UserName'];
$passwd=$_SESSION['UserPassword'];
$Uid=$_SESSION['Uid'];

//传剩余参数
$password1_temp=$_POST['password1'];
$password1=md5($password1_temp);
$password2=$_POST['password2'];
$password3_temp=$_POST['password3'];
$password3=md5($password3_temp);


//连接数据库
$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}



//更新数据
//$re1=mysqli_query($con,"UPDATE '_user' SET Upasswd='$password3' WHERE Uname='$username' AND Upasswd='$password1'");
mysqli_query($con,"UPDATE _user SET Upasswd='$password3' WHERE Uname='$username' AND Upasswd='$password1'");

$re_temp=mysqli_query($con,"SELECT Upasswd FROM `_user` WHERE Uname='$username' AND Upasswd='$password1'");
$re=mysqli_fetch_array($re_temp);
$a=mysqli_num_rows($re);
if ($re!=$password1){
    echo "<script>alert('账户密码修改成功！请妥善保管密码！');history.back();</script>";
}
else {
    echo "<script>alert('账户密码修改出错！请再次尝试或联系管理员！');history.back();</script>";
}
mysqli_close($con);