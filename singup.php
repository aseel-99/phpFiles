<?php 

include "conndb.php";
if($_SERVER['REQUSET_METHOD']="POST")
{
  if (isset($_POST['email'])&&isset( $_POST['password']))

  {
          
  	$firstname=filter_var($_POST['firstname'],FILTER_SANITIZE_STRING);
  	$lastname=filter_var($_POST['lastname'],FILTER_SANITIZE_STRING);
    $type=filter_var($_POST['type'],FILTER_SANITIZE_STRING);
  	$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
      
      //echo($firstname);
      //check if the user is excist

     $stmtcheck=$con->prepare("SELECT * FROM users WHERE email = ?");
     $stmtcheck->execute(array($email));
     $row =$stmtcheck->rowcount();
     if ($row > 0)
     {
     	echo json_encode(array('status'=>"fail"));
     }
     else
     {
     	$stmt=$con->prepare("INSERT INTO users(`first_name`, `last_name`,`email`,`password`,`type`)VALUES(?,?,?,?,'customer')");
      
     	$stmt->execute(array($firstname,$lastname,$email,$password));
     	$row =$stmt->rowcount();
     	if($row > 0)
     	{
     		echo json_encode(array('type'=>$type,'first_name'=>$firstname,'email'=>$email,'password'=>$password,'status'=>"success"));
     	}
     }
  }

}
?>