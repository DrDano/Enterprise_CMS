<?php require_once('../../../private/initialize.php'); ?>
<div id="content">
    <?php

    $id = $_GET['id'] ?? '1';
    $subject_title = $_GET['subject'] ?? 'Subject';

    $subject = find_subject_by_id($id);

    $page_title = $subject_title;

    ?>
    <div>
        <?php include(SHARED_PATH . '/staff_header.php'); ?>
    </div>
    <div class="subject show">
        <?php echo "Subject ID: " . h($id); ?>
    </div>
    </br><a href='../subjects/'>&laquo; Back to List</a>

    <div class="subject show">

        <h1>Subject: <?php echo h($subject['menu_name']); ?></h1>

        <div class="attributes">
            <dl>
                <dt>Menu Name</dt>
                <dd><?php echo h($subject['menu_name']); ?></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd><?php echo h($subject['position']); ?></dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd><?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
            </dl>
        </div>

    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>