

<!-- Sidebar Starts -->
<div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title text-uppercase fw-bold" id="offcanvasExampleLabel">Star Library</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
      <div class="offcanvas-body">
    <!-- Accordion parent ID for all collapsible elements -->
    <div class="accordion" id="accordionSidebar">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <div class="text-secondary text-uppercase small fw-bold">Core</div>
            </li> 
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-gauge me-2"></i>Dashboard</a>
            </li>
            <li class="nav-item"><hr/></li>
            
            <li class="nav-item">
              <div class="text-secondary text-uppercase small fw-bold">Inventory</div>
            </li>

            <!-- Book Management -->
            <li class="nav-item">
              <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#collapsebooksmgmt" role="button" aria-expanded="false" aria-controls="collapsebooksmgmt" data-bs-parent="#accordionSidebar">
                <i class="fa-solid fa-book me-3"></i>Book Management 
                <span class="right-icon float-end"><i class="fa-solid fa-chevron-down mt-2"></i></span>
              </a>
              <div class="collapse" id="collapsebooksmgmt" data-bs-parent="#accordionSidebar">
                <ul class="navbar-nav ps-3">
                  <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>books/add-book.php"><i class="fa-solid fa-plus me-2"></i> Add Book </a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>books/"><i class="fa-solid fa-list me-2"></i> Manage ALL </a></li>
                </ul>
              </div>
            </li>

            <!-- Students Management -->
            <li class="nav-item">
              <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#studentsmgmt" role="button" aria-expanded="false" aria-controls="studentsmgmt" data-bs-parent="#accordionSidebar">
                <i class="fa-solid fa-graduation-cap me-3"></i>Students Management 
                <span class="right-icon float-end"><i class="fa-solid fa-chevron-down mt-2"></i></span>
              </a>
              <div class="collapse" id="studentsmgmt" data-bs-parent="#accordionSidebar">
                <ul class="navbar-nav ps-3">
                  <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>students/add-student.php"><i class="fa-solid fa-plus me-2"></i> Add Student </a></li>
                  <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>students/manage-student.php"><i class="fa-solid fa-list me-2"></i> Manage ALL </a></li>
                </ul>
              </div>
            </li>

            <!-- Books Loan -->
            <li class="nav-item">
              <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#booksLoan" role="button" aria-expanded="false" aria-controls="booksLoan" data-bs-parent="#accordionSidebar">
                <i class="fa-solid fa-book-open me-3"></i>Books Loan
                <span class="right-icon float-end"><i class="fa-solid fa-chevron-down mt-2"></i></span>
              </a>
              <div class="collapse" id="booksLoan" data-bs-parent="#accordionSidebar">
                <ul class="navbar-nav ps-3">
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-plus me-2"></i> Add Loan </a></li>
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-list me-2"></i> Manage ALL </a></li>
                </ul>
              </div>
            </li>

            <!-- Subscription -->
            <li class="nav-item">
              <a class="nav-link sidebar-link" data-bs-toggle="collapse" href="#subscription" role="button" aria-expanded="false" aria-controls="subscription" data-bs-parent="#accordionSidebar">
                <i class="fa-solid fa-indian-rupee-sign me-3"></i>Subscription
                <span class="right-icon float-end"><i class="fa-solid fa-chevron-down mt-2"></i></span>
              </a>
              <div class="collapse" id="subscription" data-bs-parent="#accordionSidebar">
                <ul class="navbar-nav ps-3">
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-plus me-2"></i> Add Subscription </a></li>
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-list me-2"></i> Manage ALL </a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item"><hr/></li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-right-from-bracket me-3"></i>Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Sidebar End -->