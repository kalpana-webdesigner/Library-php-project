<?php

// Set the path in config file
include_once('../config/config.php');
include_once('../config/database.php');
include_once(DIR_URL . 'models/book.php');

// Function call: getBookData
$getBook = getBookData($conn);
if (!isset($getBook->num_rows)) {
  $_SESSION['error'] = "Error" . $conn->error;
}

// Check if the status update was successful
if (isset($_GET['action']) && $_GET['action'] == 'status') {
  $st_update = status_update($conn, $_GET['id'], $_GET['status']);
  if ($st_update) {
    if ($_GET['status'] == 1) {
      $_SESSION['successMessage'] = "Status activated successfully";
    } else {
      $_SESSION['error'] = "Status deactivated";
    }
    header('Location: ' . BASE_URL . 'books');
    exit();
  }
}

// Delete books data
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
  $del = deleteBooks($conn, $_GET['id']);
  if ($del) {
    $_SESSION['successMessage'] = "Book has been deleted successfully";
  } else {
    $_SESSION['error'] = "Something went wrong";
    header('Location: ' . BASE_URL . 'books');
    exit();
  }
}

include_once(DIR_URL . 'include/header.php');
include_once(DIR_URL . 'include/top-nav.php');
include_once(DIR_URL . 'include/sidebar.php');

?>

<!--Main Content starts-->
<main class="mt-2 pt-2">
  <div class="container-fluid">
    <!-- Cards -->
    <div class="row">
      <div class="col-12">
        <!-- Display Bootstrap Alerts -->
        <?php include_once(DIR_URL . 'include/alert.php'); ?>
        <h4 class="text-uppercase fw-bold text-center text-md-start">Manage Books</h4>

        <!-- Tabs -->
        <div class="card">
          <div class="card-header d-flex flex-wrap justify-content-between">
            <h6 class="fw-bold pt-2">All Books</h6>
            <a class="btn btn-primary" href="<?php echo BASE_URL . 'books/add.php' ?>" role="button">
              <i class="fa fa-plus"></i> Add Book
            </a>
          </div>

          <div class="card-body">
            <!-- Responsive Table -->
            <div class="table-responsive">
            <table id="data-table" class="table table-striped">
                <thead class="table-dark">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>ISBN No</th>
                    <th>Year</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if ($getBook->num_rows > 0) {
                    $i = 1;
                    while ($data = $getBook->fetch_assoc()) {
                  ?>
                      <tr>
                        <th scope="row"><?php echo $i++ ?></th>
                        <td><?php echo $data['title'] ?></td>
                        <td><?php echo $data['isbn_no'] ?></td>
                        <td><?php echo $data['publication_year'] ?></td>
                        <td><?php echo $data['author'] ?></td>
                        <td><?php echo $data['cat_name'] ?></td>
                        <td>
                          <?php if ($data['status'] == 1) { ?>
                            <span class="badge bg-danger">
                              <a href="?action=status&id=<?php echo $data['id']; ?>&status=0" class="link-underline link-underline-opacity-0 text-white">Deactivate</a>
                            </span>
                          <?php } else { ?>
                            <span class="badge bg-success">
                              <a href="?action=status&id=<?php echo $data['id']; ?>&status=1" class="link-underline link-underline-opacity-0 text-white">Activate</a>
                            </span>
                          <?php } ?>
                        </td>
                        <td><?php echo date("d-m-Y", strtotime($data['created_by'])) . ' / ' . date("h:i A", strtotime($data['created_by'])); ?></td>
                        <td>
                          <a href="edit.php?id=<?php echo $data['id'] ?>" class="p-2"><i class="fa-solid fa-pen-to-square" style="color:var(--bs-primary);font-size:16px"></i></a>
                          <a href="?action=delete&id=<?php echo $data['id']; ?>" onclick="return confirm('Are you sure you want to delete this book?');"><i class="fa-solid fa-trash" style="color:var(--bs-danger); font-size:16px"></i></a>
                        </td>
                      </tr>
                  <?php }
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!--Main Content end-->

<?php include_once(DIR_URL . 'include/footer.php'); ?>
