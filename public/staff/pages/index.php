<?php require_once('../../../private/initialize.php'); ?>

<?php
  $pages = [
    ['id' => '1', 'position' => '1', 'visible' => '1', 'page' => 'Globe Bank'],
    ['id' => '2', 'position' => '2', 'visible' => '1', 'page' => 'History'],
    ['id' => '3', 'position' => '3', 'visible' => '1', 'page' => 'Leadership'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'page' => 'Contact Us'],
    ['id' => '4', 'position' => '4', 'visible' => '1', 'page' => 'Financial Freedom Initiative'],
  ];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

   <div id="content">
      <div>
        <table class="list">
        <tr>
            <th>ID</th>
            <th>Position</th>
            <th>Visible</th>
            <th>Name</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>

        <?php foreach($pages as $page) { ?>
            <tr>
            <td><?php echo h($page['id']); ?></td>
            <td><?php echo h($page['position']); ?></td>
            <td><?php echo h($page['visible']) == 1 ? 'true' : 'false'; ?></td>
            <td><?php echo h($page['page']); ?></td>
            <td><a class="action" href="<?php echo url_for("/staff/pages/show.php?id=" . h(u($page['id'])) . "&page=" . h(u($page['page']))); ?>">View</a></td>
            <td><a class="action" href="">Edit</a></td>
            <td><a class="action" href="">Delete</a></td>
            </tr>
        <?php } ?>
        </table>
      </div>
   </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>