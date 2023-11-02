<?php
function buyProduct($idproduct, $namecus, $address, $phone)
{
    $db = connectDB();
    $stmt = $db->prepare("INSERT INTO oder (idproduct, namecus, address, phone) VALUES (:idproduct, :namecus, :address, :phone)");
    $stmt->execute(["idproduct" => $idproduct, "namecus" => $namecus, "address" => $address, "phone" => $phone]);
    return true;
}
?>