<?php
// //Correct usage of $_SERVER['DOCUMENT_ROOT'] to dynamically get the root directory
// $dir_url = $_SERVER['DOCUMENT_ROOT'];
// echo $dir_url;



include_once('config/config.php');

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
              <h4 class="text-uppercase fw-bold">Dashboard</h4>
              <p>Satistics of the system</p>
              <div class="row  dashboard-counts">
              <div class="col-md-3">

                <div class="card text-center">
                  <div class="card-body">
                    <h6 class="card-title text-uppercase fw-bold text-muted">Total Books</h6>
                    <h2 class="card-text fw-bold">130</h2>
                    <a href="#" class="link-underline-light">View More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card text-center">
                  <div class="card-body">
                    <h6 class="card-title text-uppercase fw-bold text-muted">Total Students</h6>
                    <h2 class="card-text fw-bold">1230</h2>
                    <a href="#" class="link-underline-light">View More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card  text-center">
                  <div class="card-body">
                    <h6 class="card-title text-uppercase fw-bold text-muted">Total Revenue</h6>
                    <h2 class="card-text fw-bold">1,30,500</h2>
                    <a href="#" class="link-underline-light">View More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card  text-center">
                  <div class="card-body">
                    <h6 class="card-title text-uppercase fw-bold text-muted">Total Book Loan</h6>
                    <h2 class="card-text fw-bold">168</h2>
                    <a href="#" class="link-underline-light">View More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
       <!--tabs-->
          <div class="row mt-5 dashboard-tabs">
            <div class="col-md-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link text-uppercase active" id="Recent-student" data-bs-toggle="tab" data-bs-target="#Recent-student-pane" type="button" role="tab" aria-controls="Recent-student-pane" aria-selected="true">New Students </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link text-uppercase" id="Recent-loan" data-bs-toggle="tab" data-bs-target="#Recent-loan-pane" type="button" role="tab" aria-controls="Recent-loan-pane" aria-selected="false">Recent Loans </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link text-uppercase" id="Recent-subs" data-bs-toggle="tab" data-bs-target="#Recent-subs-pane" type="button" role="tab" aria-controls="Recent-subs-pane" aria-selected="false">recent Subscription</button>
            </li>
         
          </ul>
          <div class="tab-content dash-tabs-content" id="myTabContent">
              <div class="tab-pane fade show active" id="Recent-student-pane" role="tabpanel" aria-labelledby="Recent-student" tabindex="0">
              <table class="table">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Sr No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Preparing For</th>
                    <th scope="col">Registered On</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Rajiv Yadav</td>
                    <td>UPSC</td>
                    <td>1-8-2024, 12:30PM</td>
                    <td>
                      <span class="badge bg-success">Active</span>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Anmol Sharma</td>
                    <td>UPSC</td>
                    <td>1-6-2024, 01:30PM</td>
                    <td>
                      <span class="badge bg-danger">Inactive</span>
                    </td>
                  </tr>
                  
                  
                </tbody>
              </table>
              </div>
              <div class="tab-pane fade" id="Recent-loan-pane" role="tabpanel" aria-labelledby="Recent-loan" tabindex="0">
                <div class="table-responsive">
                <table class="table">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">Sr No</th>
                      <th scope="col">Book Name</th>
                      <th scope="col">Student Name</th>
                      <th scope="col">Issue Date</th>
                      <th scope="col">Due Date</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Indian History Books</td>
                      <td>Rajiv Yadav</td>
                      <td>1-8-2023</td>
                      <td>1-8-2024</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Geography Books</td>
                      <td>Anmol Sharma</td>
                      <td>1-6-2023</td>
                      <td>1-6-2024</td>
                      <td>
                        <span class="badge bg-danger">Inactive</span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Geography Books</td>
                      <td>Omakar Yadav</td>
                      <td>1-1-2024</td>
                      <td>1-12-2024</td>
                      <td>
                        <span class="badge bg-warning">Returned</span>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              </div>
              <div class="tab-pane fade" id="Recent-subs-pane" role="tabpanel" aria-labelledby="Recent-subs" tabindex="0">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="table-dark">
                    <tr>
                      <th scope="col">Sr No</th>
                      <th>Student Name</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Start Date</th>
                      <th scope="col">End Date</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Rajiv Yadav</td>
                      <td><i class="fa-solid fa-indian-rupee-sign me-2"></i> 1000</td>
                      <td>1-6-2023</td>
                      <td>1-7-2023</td>
                      <td>
                        <span class="badge bg-success">Active</span>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Anmol Sharma</td>
                      <td><i class="fa-solid fa-indian-rupee-sign me-2"></i>1500</td>
                      <td>1-6-2024</td>
                      <td>1-7-2024</td>
                      <td>
                        <span class="badge bg-danger">Inactive</span>
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
