
 <?php

require_once('../../../private/initialize.php');
$currentpage="blog";
include(SHARED_PATH . '/header.php');

 if(!isset($_GET['id'])) {
   redirect_to(url_for('/staff/blog/index.php'));
 }
 $id = $_GET['id'];

 if(is_post_request()) {
$result = delete_post($id);
redirect_to(url_for('/staff/blog/index.php'));
}else{
   $subject = find_subject_by_id($id);
}

 ?>


 <div id="content">

   <a class="back-link" href="<?php echo url_for('/staff/blog/index.php'); ?>">&laquo; Back to List</a>

   <div class="subject delete">
     <h1>Delete Subject</h1>
     <p>Are you sure you want to delete this subject?</p>
     <p class="item"><?php echo h($subject['title']); ?></p>

     <form action="<?php echo url_for('/staff/blog/delete.php?id=' . h(u($subject['id']))); ?>" method="post">
       <div>
         <input type="submit" name="commit" value="Delete Subject" />
       </div>
     </form>
   </div>

 </div>
