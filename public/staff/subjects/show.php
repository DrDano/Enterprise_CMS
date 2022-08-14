<?php require_once('../../../private/initialize.php'); ?>
<div id="content">
<?php 

    $id = $_GET['id'] ?? '1';
    $subject_title = $_GET['subject'] ?? 'Subject';

    $page_title = $subject_title;
    include(SHARED_PATH . '/staff_header.php');

?>
<div class="subject show">
    <?php echo "Subject ID: " . h($id); ?>
</div>
    </br><a href='../pages/'>&laquo; Back to List</a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>