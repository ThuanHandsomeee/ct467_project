<?php
include_once __DIR__ . '/partial/header.php';
use Project\models\BookModel;

include __DIR__ . "/../vendor/autoload.php";
$page = $_GET['page'] ?? 1;
$book = new BookModel();
$books = $book->getAllBook($page);
?>

<div class="container-fluid bg-primary hero-header mb-5">
    <div class="container text-center">
        <h1 class="display-4 text-white mb-3">Bookstore</h1>

    </div>
</div>


<div class="container-fluid py-5">
    <div class="container">
        <?php
        if($user ) { 
            echo '<a href="createbook.php" class="btn btn-primary float-right mb-3">Add Book</a>';
        }
        ?>
        <div class="row g-4">

            <?php
            foreach ($books as $book) {
                echo '<div class="book_box col-md-6 col-lg-3" >
                        <div class="book-item text-center border h-100 p-4 ">
                            ';
                        if( $user && $user["id"] == $book["user_id"]) {
                            echo'<a href="editbook.php?id=' . $book['id'] . '" class="button_edit text-light">Edit</a>
                                <a href="deletebook.php?id=' . $book['id'] . '" class="button_delete text-light ">Delete</a>';
                            }
                        echo'
                            <img class="img_book img-fluid mb-4" src="' . $book['image'] . '" alt="">
                            <div class="mb-2">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(99)</small>
                            </div>
                            <a href="onebook.php?id=' . $book['id'] . '" class="h6 d-inline-block mb-2">' . $book['name'] . '</a>
                            <h5 class="text-primary mb-3">$' . $book['price'] . '</h5>
                            <a href="shopnow.php?id=' . $book['id'] . '" class="btn btn-outline-primary px-3">Borrow now</a>
                        </div>
                    </div>';
            }
            ?>

        </div>
    </div>
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        <ul class="pagination mt-2">
            <li class="page-item">
                <a class="page-link" href="?page=<?php
                if ($page > 1) {
                    echo $page - 1;
                } else {
                    echo $page;
                }
                ?>">Previous</a>
            </li>

            <?php for ($i = 1; $i <= 3; $i++): ?>
            <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>">
                    <?php echo $i; ?>
                </a>
            </li>
            <?php endfor; ?>

            <li class="page-item">
                <a class="page-link" href="?page=<?php
                if ($page < 3) {
                    echo $page + 1;
                } else {
                    echo $page;
                }
                ?>">Next</a>
            </li>
        </ul>
    </nav>

</div>
<!-- Book End -->



<?php
include_once __DIR__ . '/partial/footer.php'
    ?>