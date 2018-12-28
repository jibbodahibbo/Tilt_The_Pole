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
$x=0;
while($blog_post = mysqli_fetch_assoc($blogposts) and $x < 3){
$x+=1;   ?>
<div class="row">
<div class="col-md-12 " >
<!--Blog content goes here -->
<h1> <?php echo h($blog_post['title']); ?> </h1>
<h4><?php echo h($blog_post['subtitle']); ?></h4>
<hr>
<div class="">
  <?php echo $blog_post['content']; ?>
</div>

<!--- Social Share  -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-share-button" data-href="<?php echo WWW_ROOT . "/blogpost.php?id=" . h(u($blog_post['id'])); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href=" <?php echo "https://www.facebook.com/sharer/sharer.php?u=" . WWW_ROOT . "/blogpost.php?id=" . h(u($blog_post['id'])); ?>" class="fb-xfbml-parse-ignore">Share</a></div>
<a href= "https://www.linkedin.com/shareArticle?mini=true&url=safe-hollows-17719.herokuapp.com<?php echo WWW_ROOT . "/blogpost.php?id=" . h(u($blog_post['id']));?>&title=TITLE&summary=newtiltthepole&source=">Share on LinkedIn</a>


<!--- Social Share END-->
<br>
<small> <?php echo h($blog_post['date']); ?></small>
</div>

<br>
<br>
</div>
<br><br><br>
<hr>
<?php }?>
<br>



<?php
mysqli_free_result($blogposts);
 ?>
<a class="nav-link" href="<?php echo WWW_ROOT . '/bloglist.php';?>">More Posts</a>

<!-- Footer -->

<?php  include(SHARED_PATH . '/footer.php') ?>
