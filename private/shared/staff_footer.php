<footer>
      &copy; <?php echo date('Y'); ?> Globe Bank
   </footer>
</body>
<script src=<?= url_for('/scripts/index.php') ?>></script>
<script src=<?= url_for('/scripts/DataTables-1.12.1/js/dataTables.dataTables.js') ?>></script>
<script src=<?= url_for('/scripts/DataTables-1.12.1/js/dataTables.bootstrap5.js') ?>></script>
</html>
<script src=<?= url_for('/js/tables.js') ?>></script>

<?php
   db_disconnect($db);
?>