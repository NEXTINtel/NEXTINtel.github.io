<?php
/**
 *用于用户登录
 *Create by ChangXing group
 *2019-11-24
 */
session_start();

header("Content-Type: text/html;charset=utf-8");
$uers=$_POST['loginUsername'];
//php和mysql加密后的结果不一样
$password_temp=$_POST['loginPassword'];
$password=md5($password_temp);

//用session存储注册信息
$_SESSION['UserName']=$uers;
$_SESSION['UserPassword']=$password;    //采用加密措施，确保安全

//连接数据库
$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}

$re=mysqli_query($con,"SELECT * FROM `_user` WHERE Uname='$uers' AND Upasswd='$password'");

//查询账户ID,并存入session
$ID_temp=mysqli_query($con,"SELECT Uid FROM '_user' WHERE Uname='$uers' AND Upasswd='$password'");
$ID=mysqli_fetch_array($ID_temp);
$_SESSION['Uid']=$ID[0];

$a=mysqli_num_rows($re);
if ($a>0){
    echo "<script>alert('登录成功，开始购票吧！');history.go(-2);</script>";
}
else {
    echo "<script>alert('登录失败！请再次尝试一次！');history.back();</script>";
}
mysqli_close($con);
?>