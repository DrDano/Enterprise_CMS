<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" media="all" href="<?php echo url_for('/scripts/DataTables-1.12.1/css/dataTables.dataTables.css'); ?>">
   <link rel="stylesheet" media="all" href="<?php echo url_for('/scripts/datatables.min.css'); ?>">
   <link rel="stylesheet" media="all" href="<?php echo url_for('/scripts/DataTables-1.12.1/css/dataTables.bootstrap5.css'); ?>">
   <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/link-flip-anim.css'); ?>">
   <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/link-underline-anim.css'); ?>">
   <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/anim-background.css'); ?>">
   <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/tables.css'); ?>">
   <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
   <title>GBI - <?php echo h($page_title) ?? ''; ?></title>
</head>
<body>
   <header>
      <h1>GBI Staff Area</h1>
   </header>
   <navigation>
      <ul>
         <li><a class="link" href="<?php echo url_for('/staff/index.php'); ?>">
            <span class="mask">
               <div class="link-container">
                  <span class="link-title1 title">Menu</span>
                  <span class="link-title2 title">Menu</span>
               </div>
            </span>
         </a></li>
      </ul>
   </navigation>