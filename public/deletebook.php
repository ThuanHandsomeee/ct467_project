<?php
use Project\models\BookModel;

include __DIR__ . "/../vendor/autoload.php";
$id = $_GET['id'] ?? null;
$book = new BookModel();
if ($id) {
    $result = $book->deleteBook($id);
    if ($result) {
        header("Location: /");
    }
}
echo "Delete failed"
?>