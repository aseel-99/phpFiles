<?php 

 include "conndb.php";
$type = $_POST['selected_type'];
if ($type=="breakfast")
{
     $sql ="SELECT * FROM restaurants , breakfast
     WHERE restaurants.id = breakfast.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}
if($type=="shawrma")
{
     $sql ="SELECT * FROM restaurants , shawerma
     WHERE restaurants.id = shawerma.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}
 if($type=="burger")
{
     $sql ="SELECT * FROM restaurants , burger
     WHERE restaurants.id = burger.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}
 if($type=="pizza")
{
     $sql ="SELECT * FROM restaurants , pizza
     WHERE restaurants.id = pizza.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}
 if($type=="broast")
{
     $sql ="SELECT * FROM restaurants , broast
     WHERE restaurants.id = broast.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}
 if($type=="sandwish")
{
     $sql ="SELECT * FROM restaurants , sandwich
     WHERE restaurants.id = sandwich.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}
 if($type=="grill")
{
     $sql ="SELECT * FROM restaurants , grills
     WHERE restaurants.id = grills.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}
 if($type=="sweets")
{
     $sql ="SELECT * FROM restaurants ,sweets
     WHERE restaurants.id = sweets.Res_id";
     $stmt = $con -> prepare($sql);
      $stmt ->execute();
      $res=$stmt->fetchAll(PDO::FETCH_ASSOC);
       echo json_encode($res);

}



?>