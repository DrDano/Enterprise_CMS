<?php require_once('../../../private/initialize.php'); ?>

<?php
  $subject_set = find_all_subjects();
?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="nav-link">
      <a class="action" href="<?php echo url_for('/staff/subjects/new.php'); ?>">Create New Subject</a>
    </div>
      <div class="card" name="table-container">
        <table id="datatable" class="list display dataTable">
          <thead>
          <tr>
            <th>ID</th>
            <th>Position</th>
            <th>Visible</th>
            <th>Name</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
          </thead>

          <tbody>
          <?php while($subject = mysqli_fetch_assoc($subject_set)) { ?>
            <tr>
              <td><?php echo h($subject['id']); ?></td>
              <td><?php echo h($subject['position']); ?></td>
              <td><?php echo h($subject['visible']) == 1 ? 'true' : 'false'; ?></td>
              <td><?php echo h($subject['menu_name']); ?></td>
              <td><a class="action" href="<?php echo url_for("/staff/subjects/show.php?id=" . h(u($subject['id'])) . "&subject=" . h(u($subject['menu_name']))); ?>">View</a></td>
              <td><a class="action" href="<?php echo url_for("/staff/subjects/edit.php?id=" . h(u($subject['id'])) . "&subject=" . h(u($subject['menu_name']))); ?>">Edit</a></td>
              <td><a class="action" href="<?php echo url_for("/staff/subjects/delete.php?id=" . h(u($subject['id'])) . "&subject=" . h(u($subject['menu_name']))); ?>">Delete</a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>

    <?php mysqli_free_result($subject_set); ?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
