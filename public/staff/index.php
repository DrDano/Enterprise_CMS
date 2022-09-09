<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div id="content">
   <div class="bg-wrap">

      <div style="display:flex; flex-direction:row; padding:0 0 0 5%;">

         <style>
            #content {
               padding: 0;
               margin: 0;
            }
         </style>
         <h2>Main Menu</h2>

            <div class="nav-link"><a style="padding:0 10px 0 10px;" href="<?php echo url_for('staff/pages/index.php'); ?>">Pages</a></div>
            <div class="nav-link"><a style="padding:0 10px 0 10px;" href="<?php echo url_for('staff/subjects/index.php'); ?>">Subjects</a></div>
      </div>

      <div class="bg-img" alt="background image"></div>
   </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>