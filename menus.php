<?php 

 include "conndb.php";
$id = $_POST['id'];
$sql ="SELECT * FROM menus WHERE Res_id = ?";
$stmt = $con -> prepare($sql);
$stmt ->execute(array($id));
$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);


?>