<?php
require_once __DIR__ ."/../config/connectdb.php";

function getAllProduct() {
    
    $db=connectDB();
      
        $stmt = $db->prepare('SELECT * FROM product');
        
        
        $stmt->execute();
        $product = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $product;
    }

?>