
<!-- Navbar Starts -->      
<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between align-items-center">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <!-- Left offcanvas toggle button -->
    <button class="navbar-toggler d-md-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon"></span>
    </button>
        <a class="navbar-brand text-uppercase fw-bold" href="#">Star Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex ms-auto my-2" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-outline-secondary btn-primary text-white" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
          <ul class="navbar-nav mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
                <img src="<?php echo BASE_URL ?>assets/images/admin.png" class="user_profile">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">Change Password</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->