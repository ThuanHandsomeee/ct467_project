<?php
namespace Project\models;

require_once __DIR__ . "/../config/connectdb.php";


class BookModel
{
    public function getAllBook($page)
    {
        $PAGESIZE = 4;
        $skip = ($page - 1) * $PAGESIZE;
        echo $PAGESIZE;
        echo $skip;
        $db = connectDB();
        $stmt = $db->prepare("SELECT * FROM book ORDER BY id LIMIT :limit OFFSET :skip");

        $stmt->bindParam('limit', $PAGESIZE, \PDO::PARAM_INT);
        $stmt->bindParam('skip', $skip, \PDO::PARAM_INT);
        $stmt->execute();
        $books = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $books;
    }
    public function getById($id)
    {

        $db = connectDB();
        $stmt = $db->prepare("SELECT * FROM book WHERE id = :id");
        $stmt->execute(["id" => $id]);
        $book = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($book) {
            return $book;
        } else {
            return null;
        }
    }

    public function createBook($name, $price, $quantity, $description, $image, $userId)
    {
        try {
            $target_dir = getcwd() . "\\img\\";
            $uniqueId = uniqid();
            $target_file = $target_dir . 'book' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
            if (move_uploaded_file($image["tmp_name"], $target_file)) {
                $db = connectDB();
                $imageUrl = "img\\" . 'book' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
                $stmt = $db->prepare("INSERT INTO book (name, price, quantity, description, image, user_id) VALUES (:name,:price,:quantity,:description,:image,:userId)");
                $stmt->execute(["name" => $name, "price" => $price, "quantity"=>$quantity,"description" => $description, "image" => $imageUrl, "userId" => $userId]);
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function editBook($id, $name, $price,$quantity, $description, $image)
    {
        $db = connectDB();
        echo "Edit Book";
        try {
            if ($image !== null) {
                $target_dir = getcwd() . "\\img\\";
                $uniqueId = uniqid();
                $target_file = $target_dir . 'book' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
                if (move_uploaded_file($image["tmp_name"], $target_file)) {
                    $imageUrl = "img\\" . 'book' . $uniqueId . '.' . pathinfo($image["name"], PATHINFO_EXTENSION);
                    $stmt = $db->prepare("UPDATE book SET name = :name, price = :price,quantity = :quantity, description = :description, image = :image WHERE id = :id");
                    $stmt->execute(["id" => $id, "name" => $name, "price" => $price, "quantity"=>$quantity,"description" => $description, "image" => $imageUrl]);
                    return true;
                }
                return false;
            } else {
                $stmt = $db->prepare("UPDATE book SET name = :name,  price = :price,quantity = :quantity, description = :description WHERE id = :id");
                $stmt->execute(["id" => $id, "name" => $name, "price" => $price,"quantity"=>$quantity, "description" => $description]);
                return true;
            }
        } catch (\PDOException $e) {
            print($e->getMessage());
            return false;
        }
    }
    public function deleteBook($id)
    {
        try {
            $db = connectDB();
            $book = $this->getById($id);
            if ($book) {
                $imageUrl = getcwd() . "//" . $book['image'];
                if (!file_exists($imageUrl)) {
                    return false;
                }
                unlink($imageUrl);
                $stmt = $db->prepare("DELETE FROM book WHERE id =:id");
                $stmt->execute(['id' => $id]);
                return true;
            }
            print ("Error: Không tìm thấy ảnh");
            return false;
        } catch (\PDOException $e) {
            print ("Error: " . $e->getMessage());
            return false;
        }
    }
}
?>