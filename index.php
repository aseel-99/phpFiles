
<?php 

 include "conndb.php";
$sql ="SELECT * FROM restaurants";
$stmt = $con -> prepare($sql);
$stmt ->execute();
$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);


?>