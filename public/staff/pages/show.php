<?php require_once('../../../private/initialize.php'); ?>
<div id="content">
    <?php 

        $id = $_GET['id'] ?? '1';
        $page_title = $_GET['page'] ?? 'Page';

        $page = find_page_by_id($id);

        $page_title = $page_title;

    ?>
    <div>
        <?php include(SHARED_PATH . '/staff_header.php'); ?>
    </div>
    <div class="page show">
        <?php echo "Page ID: " . h($id); ?>
    </div>
    </br><a href='../pages/'>&laquo; Back to List</a>

    <div class="page show">
        <h1>Page: <?php echo h($page['menu_name']); ?></h1>

        <div class="attributes">
            <dl>
                <dt>Menu Name</dt>
                <dd><?php echo h($page['menu_name']); ?></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd><?php echo h($page['position']); ?></dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd><?php echo $page['visible'] == '1' ? 'true' : 'false'; ?></dd>
            </dl>
        </div>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>