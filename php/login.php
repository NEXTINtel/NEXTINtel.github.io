<?php
    include "connect.php";

    $username = $_REQUEST["loginUsername"];   //调用注册时提交的用户名称
    $passwd=$_REQUEST["loginPassword"];  //调用密码

    if(empty($username)){
        echo "<script>alert('登录失败！原因：用户名不得为空。请再次尝试一次！';history.back();</script>)";
    }
    if(mb_strlen($username)>32){
        echo "<script>alert('登录失败！原因：用户名过长，超过32位。请再次尝试一次！';history.back();</script>)";
    }
    if(empty($passwd)){
        echo "<script>alert('登录失败！原因：密码不得为空。请再次尝试一次！';history.back();</script>)";
    }

    //查询账户是否存在、密码是否正确
    $query="SELECT  * FROM `tb_user_information` WHERE user='$username' AND passwd=MD5($passwd)";
    $result=mysqli_query($link,$query);

    if(!mysqli_num_rows($result)){
        echo "<script>alert('登录成功！欢迎！');window.location.href='../index.html'</script>";
    }
    else{
        echo "<script>alert('登录失败！原因：用户不存在。请再次尝试一次！';history.back();</script>)";
    }


    /*$search = SELECT * FROM `tb_user_information` WHERE user='$username';    //查询用户表中已注册用户的名称是否与当前提交的用户名相同
    $info=mysqli_query($link,$search);
    if ($info) {
        echo "<script>alert('对不起，你的用户名已被占用！');history.back();</script>";    //相同的给出提示
        exit;
    }*/


    /*$query="INSERT INTO `tb_user_information`(`id`, `user`, `email`, `passwd`, `createtime`) VALUES (RAND()*10^6,'$username','$email',MD5($passwd),NOW())";
    $result=mysqli_query($link,$query);
    if ($result) {
        echo "<script>alert('注册成功，快来探索深度学习的缤纷世界吧！');window.location.href='../index.html'</script>";
    }
    else {
        echo "<script>alert('注册失败！请再次尝试一次！';history.back();</script>)";
    }*/

