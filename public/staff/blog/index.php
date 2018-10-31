<?php require_once('../../../private/initialize.php') ?>
<?php $currentpage="blog" ?>
<?php  include(SHARED_PATH . '/header.php') ?>
  <!--------Header-->

<?php
$blogposts = find_all_blogposts();
?>

<head>

<h1>Blog Dashboard</h1>
<hr>
<div class="row">
<div class="col-md-12">

<a class="btn btn-success" href=" <?php echo WWW_ROOT . "/staff/blog/new.php" ?> ">New</a>

</div>
</div>

<div class="row">
<div class="col-md-12">
<?php while($blog_post = mysqli_fetch_assoc($blogposts)){ ?>
<li> <a href="<?php echo WWW_ROOT . "/blogpost.php?id=" . h(u($blog_post['id'])); ?>"> <?php echo h($blog_post['title']); ?>
  </a> | <?php echo h($blog_post['date']); ?> |
  <a href="<?php echo WWW_ROOT . "/staff/blog/edit.php?id=" . h(u($blog_post['id'])); ?>" >edit</a>
  | <a href="<?php echo WWW_ROOT . "/staff/blog/delete.php?id=" . h(u($blog_post['id'])); ?>" >Delete</a>
 </li>
<?php } ?>
</div>
</div>
<?php
mysqli_free_result($blogposts);
 ?>
</div> <!--Container-->
