<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/pages/index.php'));
}
$id = $_GET['id'];
$page = find_page_by_id($id);
$page_set = find_all_pages();
$page_count = mysqli_num_rows($page_set);
mysqli_free_result($page_set);

if(is_post_request()) { 

  // Handle form values sent by edit.php
  $page = [];
  $page['id'] = $id;
  $page['subject_id'] = $_POST['subject_id'] ?? 1;
  $page['menu_name'] = $_POST['menu_name'] ?? '';
  $page['position'] = $_POST['position'] ?? '';
  $page['visible'] = $_POST['visible'] ?? '';

  $result = update_page($page);
  redirect_to(url_for('/staff/pages/show.php?id=' . $id));

}
?>

<?php 
  $subject_set = find_all_subjects();
  $subject_count = mysqli_num_rows($subject_set);
?>

<?php 
$page_title = $_GET['page'] ?? 'Page';

$page_title = "Edit $page_title";
 
?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="page edit">
    <h1><?php echo $page_title ?> Page</h1>

    <form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo $page['menu_name']; ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
          <?php
            for ($i=1; $i < $page_count; $i++) { 
              echo "<option value=\"{$i}\"";
              if($page["position"] == $i) {
                echo " selected";
              }
              echo ">{$i}</option>";
            }
          ?>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Parent Subject</dt>
        <dd>
          <select name="subject_id">
          <?php
            while($subject = mysqli_fetch_assoc($subject_set)) {
              echo "<option value=\"{$subject['id']}\"";
              if($page['subject_id'] == $subject['id']) {
                echo " selected";
              }
              echo ">{$subject['menu_name']}</option>";
            };
          ?>
          </select>
        </dd>
      </dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" <?php if($page['visible'] == "1") { echo " checked";}; ?>/>
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Page" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
<?php mysqli_free_result($subject_set); ?>