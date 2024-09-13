<?php
// Include config and database files
include_once('../config/config.php');
include_once('../config/database.php');
include_once(DIR_URL . 'models/book.php');


if (isset($_POST['submit'])) {
    $res = storeBook($conn, $_POST);
    if (isset($res['successMessage'])) {
        $_SESSION['successMessage'] = "Book has been created successfully";
        header("LOCATION: " . BASE_URL . "books");
        exit;
    } else {
        $_SESSION['error'] = $res['error']; //"Something went wrong, please try again. ";
        //header("LOCATION: " . BASE_URL . "books/add.php");
    }
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
                <h4 class="text-uppercase fw-bold">Add New Book</h4>
                <div class="card mt-3">
                    <h5 class="card-header">Fill the form</h5>
                    <div class="card-body">
                        <form method="post" action="<?php echo BASE_URL ?>books/add" class="row g-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Book Name</label>
                                <input type="text" name="title" class="form-control" id="title" required>
                            </div>
                            <div class="col-md-6">
                                <label for="isbn_no" class="form-label">ISBN Number</label>
                                <input type="text" name="isbn_no" class="form-control" required maxlength="13" pattern="\d{10}|\d{13}" title="ISBN must be 10 or 13 digits" id="isbn_no">
                            </div>
                            <div class="col-md-6">
                                <label for="publication_year" class="form-label">Publisher Year</label>
                                <input type="text" class="form-control" name="publication_year" maxlength="4" pattern="\d{4}" title="Please enter a valid 4-digit year" required id="publication_year" placeholder="YYYY">
                            </div>
                            <div class="col-md-6">
                                <label for="author" class="form-label">Author Name</label>
                                <input type="text" class="form-control" name="author" id="author" required>
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
                                    while ($row = $cat->fetch_assoc()) { ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-success">Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once(DIR_URL . 'include/footer.php'); ?>