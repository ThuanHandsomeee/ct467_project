<?php
namespace Project\models;

require_once __DIR__ . "/../config/connectdb.php";


class ProductModel
{
    public function getAllProduct($page)
    {
        $PAGESIZE = 4;
        $skip = ($page - 1) * $PAGESIZE;
        echo $PAGESIZE;
        echo $skip;
        $db = connectDB();
        $stmt = $db->prepare("SELECT * FROM product ORDER BY id LIMIT :limit OFFSET :skip");

        $stmt->bindParam('limit', $PAGESIZE, \PDO::PARAM_INT);
        $stmt->bindParam('skip', $skip, \PDO::PARAM_INT);
        $stmt->execute();
        $products = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $products;
    }
    public function getById($id)
    {

        $db = connectDB();
        $stmt = $db->prepare("SELECT * FROM product WHERE id = :id");
        $stmt->execute(["id" => $id]);
        $product = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($product) {
            return $product;
        } else {
            return null;
        }
    }

    public function createProduct($name, $price, $description, $image)
    {
        $target_dir = getcwd() . "\\img\\";
        $uniqueId = uniqid();
        $target_file = $target_dir . 'product' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            $db = connectDB();
            $imageUrl = "img\\" . 'product' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
            $stmt = $db->prepare("INSERT INTO product (name, price, description, image) VALUES (:name,:price,:description,:image)");
            $stmt->execute(["name" => $name, "price" => $price, "description" => $description, "image" => $imageUrl]);
            return true;
        } else {
            return false;
        }
    }

    public function editProduct($id, $name, $price, $description, $image)
    {
        $db = connectDB();
        echo "Edit Product";
        try {
            if ($image !== null) {
                $target_dir = getcwd() . "\\img\\";
                $uniqueId = uniqid();
                $target_file = $target_dir . 'product' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
                if (move_uploaded_file($image["tmp_name"], $target_file)) {
                    $imageUrl = "img\\" . 'product' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
                    $stmt = $db->prepare("UPDATE product SET name = :name, price = :price, description = :description, image = :image WHERE id = :id");
                    $stmt->execute(["id" => $id, "name" => $name, "price" => $price, "description" => $description, "image" => $imageUrl]);
                    return true;
                }
                return false;
            } else {
                $stmt = $db->prepare("UPDATE product SET name = :name, price = :price, description = :description WHERE id = :id");
                $stmt->execute(["id" => $id, "name" => $name, "price" => $price, "description" => $description]);
                return true;
            }
        } catch (\PDOException $e) {
            return false;
        }
    }
    public function deleteProduct($id)
    {
        $db = connectDB();
        $product = $this->getById($id);
        if ($product) {
            $imageUrl = getcwd() . "//" . $product['image'];
            if (!file_exists($imageUrl)) {
                return false;
            }
            unlink($imageUrl);
            $stmt = $db->prepare("DELETE FROM product WHERE id =:id");
            $stmt->execute(['id' => $id]);
            return true;
        }
        return false;
    }
}
?>