<?php 
require_once('../../Config/utility.php');
$email = $password = "";

if(!empty($_POST)){
	$email = getPost('email');
	$password = getMD5Security(getPost('password'));
	$sql = "SELECT customer.ID, customer.NAME FROM customer where EMAIL ='$email' AND PASSWORD = '$password'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user']['id']=$row['ID'];
		$_SESSION['user']['name']=$row['NAME'];
		header("location: ../../index.php");
	}else{
		alert("Tài khoản hoặc mật khẩu không đúng! Vui lòng thử lại");
		header("location: ../../index.php");
	}
}


?>