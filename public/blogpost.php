<?php require_once('../private/initialize.php') ?>
<?php $currentpage="blog" ?>
<?php  include(SHARED_PATH . '/header.php') ?>
  <!--------Header-->
  <?php
$blog_post = find_subject_by_id();
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

<div class="row">
<div class="col-md-12 " >
<!--Blog content goes here -->
<h1> <?php echo h($blog_post['title']); ?> </h1>
<h4><?php echo h($blog_post['subtitle']); ?></h4>
<hr>
<div class="">
  <?php echo $blog_post['content']; ?>
</div>

<small> <?php echo h($blog_post['date']); ?></small>
</div>

<br>
<br>
</div>


<br>




<!-- Footer -->

<?php  include(SHARED_PATH . '/footer.php') ?>
