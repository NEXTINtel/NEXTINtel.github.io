<?php
header("Content-Type: text/html;charset=utf-8");
$uers=$_POST['loginUsername'];
//php和mysql加密后的结果不一样
$password_temp=$_POST['loginPassword'];
$password=md5($password_temp);

$con=mysqli_connect("localhost","root","19990420",ticket);
if(!$con){
    echo "数据库连接失败！请检查网络重新连接或联系管理员";
}

$re=mysqli_query($con,"SELECT * FROM `user` WHERE Uname='$uers' AND Upasswd='$password'");
$a=mysqli_num_rows($re);
if ($a>0){
    echo "<script>alert('登录成功，开始购票吧！');window.location.href='../index.html'</script>";
}
else {
    echo "<script>alert('登录失败！请再次尝试一次！');history.back();</script>";
}
mysqli_close($con);
?>