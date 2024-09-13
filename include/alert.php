<?php 
if (isset($_SESSION['successMessage'])) { ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Great!</strong> <?php echo $_SESSION['successMessage']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['successMessage']); ?>
<?php }

if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> <?php echo $_SESSION['error']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php } ?>
