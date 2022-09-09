<?php require_once('../private/initialize.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI - <?php echo $page_title ?? 'Home'; ?></title>
</head>

<body>
    <?php include(SHARED_PATH . '/staff_header.php'); ?>

    <div id="content">
    </div>

    <?php include(SHARED_PATH . '/staff_footer.php'); ?>
</body>

</html>