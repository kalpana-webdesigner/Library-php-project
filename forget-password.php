<?php 
include_once('./config/config.php');

include_once(DIR_URL . 'include/header.php');

?>
<div class="bg-dark">
  <!-- login form Starts -->
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row">
      <div class="col-md-12 login-form">
        <div class="card mb-3" style="max-width:800px;">
          <div class="row no-gutters">
            <div class="col-md-5">
              <img src="./assets/images/library_login.png" class="card-img border-none" alt="...">
            </div>
            <div class="col-md-7 d-flex align-items-center">
              <div class="card-body">
                <h1 class="card-title text-uppercase fw-bold ">Star Library</h1>
                <p class="card-text">Please enter the email and password to login</p>
                <form action="#">
                  <div class="form-group my-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
                <hr>
                <a href="./index.php" class="link-underline-light">Login Now</a>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- login form End -->
</div>
<?php
include_once(DIR_URL . 'include/footer.php');

?>