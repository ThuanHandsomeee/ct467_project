<?php 


require_once __DIR__ ."/../model/product.php";

$id= $_GET["id"];

$result = deleteProduct($id);

if($result){ 
    header("Location: /public/product.php");
}
echo "Delete faile"
?>