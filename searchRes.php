<?php 

 include "conndb.php";
 if (isset($_POST['search_resturant']))
 {
$resturant= $_POST['search_resturant'];
 $where ="WHERE name Like '$resturant%' ";
$sql ="SELECT * FROM restaurants $where  ";
$stmt = $con -> prepare($sql);
$stmt ->execute();
$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($res);
}

?>