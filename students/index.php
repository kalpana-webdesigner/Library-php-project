<?php
include_once('../config/config.php');
include_once('../config/database.php');
include_once(DIR_URL . 'models/student.php');


//showData function called - fetch data 
$show = showData($conn);
if (!isset($show->num_rows)) {
  $_SESSION['error'] = "somthing went wrong";
  header('LOCATION:' . BASE_URL . "students");
  exit;
}
include_once(DIR_URL . 'include/header.php');
include_once(DIR_URL . 'include/top-nav.php');
include_once(DIR_URL . 'include/sidebar.php');
?>
<!--Main Content starts-->
<main class="mt-2 pt-2">
  <div class="container-fluid">
    <!--cards-->
    <div class="row">
      <div class="col-md-12">
        <!-- Alert-->
        <?php include_once(DIR_URL . 'include/alert.php'); ?>
        <h4 class="text-uppercase fw-bold">Manage Student List</h4>
        <!--tabs-->
        <div class="card">
          <div class="card-header">
            <h6 class="fw-bold">All Students</h6>
          </div>
          <div class="card-body">
            <table id="data-table" class="table table-striped">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Student Name</th>
                  <th scope="col"> Address</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($show->num_rows > 0) {
                  $i = 1;
                  while ($row = $show->fetch_assoc()) {
                ?>
                    <tr>
                      <th scope="row"><?php echo $i++ ?></th>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['phone_no'] ?></td>
                      <td>
                        <span><i class="fa-solid fa-pen-to-square p-2" style="color: var(--bs-primary); font-size: 20px;"></i></span>
                        <span><i class="fa-solid fa-trash" style="color: var(--bs-danger); font-size: 20px;"></i></span>
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
</main>
<!--Main Content end-->

<?php
include_once(DIR_URL . 'include/footer.php');


?>