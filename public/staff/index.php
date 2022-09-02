<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

   <div id="content">
      <div>
         <style>
            body {
               height: 95%;
               overflow: hidden;
            }
            footer {
               text-align:end;
            }
         </style>
         <h2>Main Menu</h2>
         <ul>
            <li><a href="<?php echo url_for('staff/pages/index.php'); ?>" >Pages</a></li>
            <li><a href="<?php echo url_for('staff/subjects/index.php'); ?>">Subjects</a></li>
         </ul>
         <div class="ripple-background">
            <div class="circle xxlarge shade1"></div>
            <div class="circle xlarge shade2"></div>
            <div class="circle large shade3"></div>
            <div class="circle medium shade4"></div>
            <div class="circle small shade5"></div>
         </div>
      </div>
   </div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>