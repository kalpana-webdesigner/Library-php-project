<script src="<?php echo BASE_URL ?>assets/js/jquery-3.7.1.js"></script>
<script src="<?php echo BASE_URL ?>assets/js/dataTables.js"></script>
<script src="<?php echo BASE_URL ?>assets/js/dataTables.bootstrap5.js"></script>
<script src="<?php echo BASE_URL ?>assets/js/bootstrap.bundle.min.js"></script>



<script>
$('#data-table').DataTable({
    "pagingType": "full_numbers", // Pagination type
    "lengthChange": true,          // Enable/Disable changing page length
    "pageLength": 10,              // Number of entries per page
    "info": true                   // Show 'Showing x to y of z entries'
});

</script>

