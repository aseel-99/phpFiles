<?php
include "conndb.php";
if($_SERVER['REQUSET_METHOD']="POST")
{
	if (isset($_POST['email'])&&isset( $_POST['password']))
	{
		$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
	       $password = $_POST['password'];

	//echo($email);
    //$email = "aseel99basel@gamil.com";
    //$password="asoolaa";
	$stmt =$con->prepare("SELECT * FROM users WHERE email = ? AND
		password = ?");
	$stmt->execute(array($email,$password));
	$user = $stmt->fetch();
	$row =$stmt->rowcount();


	if($row>0)
	{
		
		$id=$user['id'];
		$firstname=$user['first_name'];
		$lastname=$user['last_name'];
		$email=$user['email'];
		$password=$user['password'];
		$type=$user['type'];
		echo json_encode(array('type'=>$type,'id'=>$id,'first_name'=>$firstname,'last_name'=>$lastname,'email'=>$email,'password'=>$password,'status'=>"success"));


	}
	else{
		
		echo json_encode(array('status'=>"fail",'email'=>$email,'password'=>$password));
	}
}
}

?>