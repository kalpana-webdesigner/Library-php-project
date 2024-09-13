<?php
// Include config and database files
include_once('../config/config.php');
include_once('../config/database.php');
include_once(DIR_URL . 'models/book.php');




//update books function
if (isset($_POST['update'])) {
    $res = updateBook($conn, $_POST);
    if (isset($res['successMessage'])) {
        $_SESSION['successMessage'] = "Book has been updated successfully";
        header("LOCATION: " . BASE_URL . "books");
        exit;
    } else {
        $_SESSION['error'] = $res['error'];
        header("LOCATION: " . BASE_URL . "books/edit");
        exit;
    }
}

//get updateId function to get the data
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $booksData = getBookupdateId($conn, $_GET['id']);
    if ($booksData->num_rows > 0) {
        $booksData = mysqli_fetch_assoc($booksData);
        //    echo "<pre>";
        //    print_r($booksData);
        //    exit;
    }
} else {
    header("LOCATION: " . BASE_URL . "books");
    exit;
}


// Include header and navigation files
include_once(DIR_URL . 'include/header.php');
include_once(DIR_URL . 'include/top-nav.php');
include_once(DIR_URL . 'include/sidebar.php');
?>
<!--Main Content starts-->
<main class="mt-2 pt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Display Bootstrap Alerts -->
                <?php include_once(DIR_URL . 'include/alert.php'); ?>
                <h4 class="text-uppercase fw-bold">Edit Book</h4>
                <div class="card mt-3">
                    <h5 class="card-header">Edit the form</h5>
                    <div class="card-body">
                        <form method="post" action="<?php echo BASE_URL ?>books/edit" class="row g-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Book Name</label>
                                <input class="form-control" type="hidden"value="<?php echo $booksData['id']?>" name="id">
                                <input type="text" name="title" class="form-control" id="title" value="<?php echo $booksData['title'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="isbn_no" class="form-label">ISBN Number</label>
                                <input type="text" name="isbn_no" value="<?php echo $booksData['isbn_no'] ?>" class="form-control" required maxlength="13" pattern="\d{10}|\d{13}" title="ISBN must be 10 or 13 digits" id="isbn_no">
                            </div>
                            <div class="col-md-6">
                                <label for="publication_year" class="form-label">Publisher Year</label>
                                <input type="text" class="form-control" value="<?php echo $booksData['publication_year'] ?>" name="publication_year" maxlength="4" pattern="\d{4}" title="Please enter a valid 4-digit year" required id="publication_year" placeholder="YYYY">
                            </div>
                            <div class="col-md-6">
                                <label for="author" class="form-label">Author Name</label>
                                <input type="text" class="form-control" name="author" value="<?php echo $booksData['author'] ?>" id="author" required>
                            </div>
                            <div class="col-md-6">
                                <label for="category_id" class="form-label">Category</label>
                                <?php
                                // Fetch the categories from the database using the `getCategories` function
                                $cat = getCategories($conn);
                                ?>
                                <select id="category_id" name="category_id" class="form-select" required>
                                    <option selected value="">Choose...</option>
                                    <?php
                                    // Use a while loop with fetch()
                                    $selected = "";
                                    while ($row = $cat->fetch_assoc()) {                                  
                                        // Check if the current category is the one selected in the book's data
                                        if ($row['id'] == $booksData['category_id']) {
                                            $selected = 'selected';
                                        }
                                    ?>
                                        <option <?php echo $selected; ?> value="<?php echo $row['id']; ?>">
                                            <?php echo $row['name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="update" class="btn btn-success">update</button>
                                <a href="<?php echo BASE_URL ?>books" type="reset" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once(DIR_URL . 'include/footer.php'); ?>