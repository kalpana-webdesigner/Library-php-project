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
            <h4 class="text-uppercase fw-bold">Manage Student List</h4>
            <!--tabs-->
            <div class="card">
              <div class="card-header">
                <h6 class="fw-bold">All Students</h6>
              </div>
              <div class="card-body">
              
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">Sr No</th>
                      <th scope="col">Student Name</th>
                      <th scope="col"> Address</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Ravi s</td>
                      <td>Mumbai</td>
                      <td>ravi@gmail.com</td>
                      <td>8097041140</td>
                      
                      <td>
                        <span><i class="fa-solid fa-pen-to-square p-2" style="color: var(--bs-primary); font-size: 20px;"></i></span>
                        <span><i class="fa-solid fa-trash" style="color: var(--bs-danger); font-size: 20px;"></i></span> 
                      </td>
                    </tr>
                   
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
