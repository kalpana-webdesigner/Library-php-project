<?php
// Set the path in config file
include_once('../config/config.php');

// Correct include paths
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
            <h4 class="text-uppercase fw-bold">Manage Books</h4>
            <!--tabs-->
            <div class="card">
              <div class="card-header">
                <h6 class="fw-bold">All BOOKS</h6>
              </div>
              <div class="card-body">
              
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">Sr No</th>
                      <th scope="col">Book Name</th>
                      <th scope="col">ISBN Number</th>
                      <th scope="col">Publisher Name</th>
                      <th scope="col">Author Name</th>
                      <th scope="col">Phone No</th>
                      <th scope="col">Category</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Indian History</td>
                      <td>E33676434EEF</td>
                      <td>R & K Publisher</td>
                      <td>Ravi sharma</td>
                      <td>8097041140</td>
                      <td>UPSC</td>
                      <td>
                        <span> <i class="fa-solid fa-pen-to-square p-2" style="color:var(--bs-primary);font-size:20px"></i></span>
                        <span><i class="fa-solid fa-trash" style="color:var(--bs-danger); font-size:20px"></i></span>
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
include_once('../include/footer.php');


?>
