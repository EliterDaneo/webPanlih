

  <script src="<?= base_url()?>asset/backEnd/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>asset/backEnd/js/ruang-admin.min.js"></script>

	<script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>