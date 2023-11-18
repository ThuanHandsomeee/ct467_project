<?php
class Order
{
    function buyProduct($product_id, $namecus, $address, $phone)
    {
        $db = connectDB();
        $stmt = $db->prepare("INSERT INTO `order` (product_id, namecus, address, phone) VALUES (:product_id, :namecus, :address, :phone)");
        $stmt->execute(["product_id" => $product_id, "namecus" => $namecus, "address" => $address, "phone" => $phone]);
        return true;
    }
}

?>