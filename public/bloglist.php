<?php require_once('../private/initialize.php') ?>
<?php $currentpage="blog" ?>
<?php  include(SHARED_PATH . '/header.php') ?>
  <!--------Header-->
  <?php
  $blogposts = find_all_blogposts();
  ?>

<div class="ttp-features-banner">

<div id="ttp-page-over">


<div class="row " >

    <div class="col-md-12" style="text-align:center;">
<h1>Blog</h1>
<br>
<p id="ttp-features-text"></p>
    </div>
</div>
</div>
</div>

<?php

while($blog_post = mysqli_fetch_assoc($blogposts) ){?>
<div class="row">
<div class="col-md-12 " >
<!--Blog content goes here -->
<h1> <a href="<?php echo WWW_ROOT . "/blogpost.php?id=" . h(u($blog_post['id'])); ?>"> <?php echo h($blog_post['title']); ?> </a> </h1>
<h4><?php echo h($blog_post['subtitle']); ?></h4>
<small> <?php echo h($blog_post['date']); ?></small>
</div>

</div>
<hr>
<?php }?>

<br>
<a href="<?php echo WWW_ROOT . '/blog.php';?>"> Back</a>


<?php
mysqli_free_result($blogposts);
 ?>


<!-- Footer -->

<?php  include(SHARED_PATH . '/footer.php') ?>
