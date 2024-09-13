<?php
include_once('../config/config.php');
include_once('../config/database.php');
include_once(DIR_URL . 'models/student.php');


//fetch-student-data-function
if(isset($_POST['submit'])){
  $res = studentData($conn, $_POST);
  if (isset($res['successMessage'])) {
      $_SESSION['successMessage'] = "Student added sucessfully";
      header('LOCATION:' . BASE_URL . "students");
      exit;
  }else{
    $_SESSION['error'] = $res['error'];
    header('LOCATION:'. BASE_URL . "students/add");
     exit;
  }
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
             <!-- Display Bootstrap Alerts -->
             <?php include_once(DIR_URL . 'include/alert.php'); ?>
              <h4 class="text-uppercase fw-bold">Add New Student</h4>
              <div class="card mt-3">
              
                <h5 class="card-header">Fill the form</h5>
                <div class="card-body">
                <form method="post" action="<?php echo BASE_URL ?>students/add" class="row g-3">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label" >Student Name</label>
                      <input type="text" name="name" placeholder="Enter Name" class="form-control" >
                    </div>
                   
                    <div class="col-md-6">
                      <label for="inputAddress" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control"  placeholder="Enter your email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress2" class="form-label" placeholder="Enter phone no" >Phone No</label>
                        <input type="text" name="phone_no" class="form-control" id="inputAddress2" placeholder="Enter phone no">
                      </div>
                      <div class="col-md-6">
                      <label for="text" class="form-label" >Student Address</label>
                      <input type="text" name="address" class="form-control" placeholder="Enter Address">
                    </div>
                    <div class="col-12">
                      <button type="submit" name ="submit" class="btn btn-success">Submit</button>
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
