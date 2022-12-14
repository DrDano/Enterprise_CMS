<?php require_once('../../../private/initialize.php'); ?>

<?php
  $page_set = find_all_pages();
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

   <div id="content">
    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/pages/new.php'); ?>">Create New Page</a>
    </div>
      <div>
        <div class="card" name="table-container">
          <table id="datatable" class="list display dataTable">
          <thead>
          <tr>
              <th>ID</th>
              <th>Subject ID</th>
              <th>Position</th>
              <th>Visible</th>
              <th>Name</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
          </tr>
          </thead>
          <tbody>
          <?php while($page = mysqli_fetch_assoc($page_set)) { ?>
              <tr>
              <td><?php echo h($page['id']); ?></td>
              <td><?php echo h(find_subject_by_id($page['subject_id'])['menu_name']); ?></td>
              <td><?php echo h($page['position']); ?></td>
              <td><?php echo h($page['visible']) == 1 ? 'true' : 'false'; ?></td>
              <td><?php echo h($page['menu_name']); ?></td>
              <td><a class="action" href="<?php echo url_for("/staff/pages/show.php?id=" . h(u($page['id'])) . "&page=" . h(u($page['menu_name']))); ?>">View</a></td>
              <td><a class="action" href="<?php echo url_for("/staff/pages/edit.php?id=" . h(u($page['id'])) . "&page=" . h(u($page['menu_name']))); ?>">Edit</a></td>
              <td><a class="action" href="<?php echo url_for("/staff/pages/delete.php?id=" . h(u($page['id'])) . "&page=" . h(u($page['menu_name']))); ?>">Delete</a></td>
              </tr>
          <?php } ?>
          </tbody>
          </table>
        </div>

        <?php mysqli_free_result($page_set); ?>
      </div>
   </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>