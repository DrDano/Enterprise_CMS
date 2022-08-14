<?php require_once('../../../private/initialize.php'); ?>
<div id="content">
    <?php 

        $id = $_GET['id'] ?? '1';
        $page_title = $_GET['page'] ?? 'Page';

        $page_title = $page_title;
        include(SHARED_PATH . '/staff_header.php');

    ?>
    <div class="page show">
        <?php echo "Page ID: " . h($id); ?>
        <?php echo phpinfo(); ?>
    </div>
    </br><a href='../pages/'>&laquo; Back to List</a>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>