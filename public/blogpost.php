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

<!--- Social Share  -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div style="vertical-align:top;margin-top:-4px;"  class="fb-share-button" data-href="<?php echo WWW_ROOT . "/blogpost.php?id=" . h(u($blog_post['id'])); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"> <a target="_blank" href=" <?php echo "https://www.facebook.com/sharer/sharer.php?u=" . WWW_ROOT . "/blogpost.php?id=" . h(u($blog_post['id'])); ?>" class="fb-xfbml-parse-ignore"> Share </a>
</div>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Check out this post on the Tilt The Pole Blog." data-via="tiltthepole" data-lang="en" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<!--- Social Share END-->
<br>
<small> <?php echo h($blog_post['date']); ?></small>
</div>

<br>
<br>
</div>


<br>




<!-- Footer -->

<?php  include(SHARED_PATH . '/footer.php') ?>
