<?php
include_once('../config/config.php');
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
              <h4 class="text-uppercase fw-bold">Add New Student</h4>
              <div class="card mt-3">
                <h5 class="card-header">Fill the form</h5>
                <div class="card-body">
                  <form class="row g-3">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Student Name</label>
                      <input type="text" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="text" class="form-label">Student Address</label>
                      <input type="text" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputAddress" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label">Phone No</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                      </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-success">Publish</button>
                      <button type="submit" class="btn btn-secondary">Reset</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
          </div>
       <!--tabs-->
         
         
    </main>
    <!--Main Content end-->
  
    <?php
include_once(DIR_URL . 'include/footer.php');


?>
