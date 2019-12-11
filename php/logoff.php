<?php
/**
 * 用于当前用户登出
 * Create by ChangXing group
 * 2019-12-08
 */
session_start();

//将session中的值全部置空
if($_SESSION['UserName']!=NULL){
    $_SESSION['UserName']=NULL;
    $_SESSION['UserName']=NULL;
    $_SESSION['Uid']=NULL;
    echo "<script>alert('感谢选择畅行出行！期待下次为您服务！');history.back();</script>";
}
else{
    echo "<script>alert('退出登录！请再次尝试一次！');history.back();</script>";
}
