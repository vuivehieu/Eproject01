<?php 
require_once("../../Config/utility.php");

$username = $email = $phone = $address = $password = $confirmpass = "";

if(!empty($_POST)){
	$username = getPost('username');
	$email = getPost('email');
	$phone = getPost('phone');
	$address = getPost('address');
	$password = getPost('password');
	$confirmpass = getPost('passwordconfirm');
	if($password == $confirmpass){
			$password = getMD5Security($password);
		$sql = "INSERT INTO customer(ID, EMAIL, PASSWORD, NAME, PHONE, ADDRESS) VALUES (NULL,'$email','$password','$username','$phone','$address')";
		execute($sql);

		$msg="Đăng kí thành công";
        echo "<script type='text/javascript'>alert('$msg');</script>";
		header("location: ../../index.php");
			die();
	}else{
        $msg="Mật khẩu không trùng khớp";
        echo "<script type='text/javascript'>alert('$msg');</script>";
		header("location: ../../index.php");
			die();
	}
}
?>