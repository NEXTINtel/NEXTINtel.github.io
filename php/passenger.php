<?php
/**
 * 用于添加常用联系人
 * Create by ChangXing group
 * 2019-12-09
 */

session_start();

$username_=$_SESSION['UserName'];
$userpassword_=$_SESSION['UserPassword'];

$tourist_name=$_POST['name'];
$tourist_ID=$_POST['IDnumber'];
$tourist_sex=$_POST['sex'];
$tourist_email=$_POST['email'];
$tourist_phone=$_POST['phone'];
$tourist_type=$_POST['type'];
$tourist_content=$_POST['content'];
$tourist_file=$_POST['file'];

/*echo $tourist_name;
echo $tourist_ID;
echo $tourist_sex;
echo $tourist_email;
echo $tourist_phone;
echo $tourist_content;
echo $tourist_type;
echo $tourist_file;*/

$servername = "localhost";
$username = "root";
$password = "19990420";
$dbname = "ticket";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO _tourist (Tourist_ID, Tourist_name, Tourist_sex,Tourist_email,Tourist_phone) VALUES ('$tourist_ID', '$tourist_name', '$tourist_sex','$tourist_email','$tourist_phone')";
$sql1="INSERT INTO _TU(tourist_id,tourist_name,user_name,user_password) VALUES ('$tourist_ID','$tourist_name','$username_','$userpassword_')";

if (mysqli_query($conn, $sql)&&mysqli_query($conn,$sql1)) {
    echo "<script>alert('添加常用联系人成功，开始购票吧！');window.location.href='../result.php';</script>";
} else {
    echo "<script>alert('添加常用联系人失败！请再次尝试一次！');history.back();</script>";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);