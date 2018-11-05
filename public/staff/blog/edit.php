<?php require_once 'protect.php';
Protect\with('form.php', 'bendthestick');
?>

<?php require_once('../../../private/initialize.php') ?>
<?php $currentpage="blog"?>
<?php  include(SHARED_PATH . '/header.php') ?>
<!--------Header-->

<?php
$blog_post = find_subject_by_id();
?>

<head>
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=your_API_key"></script>

<script type="text/javascript">
tinymce.init({
selector: 'textarea',
height: 500,
menubar: false,
plugins: [
'advlist autolink lists link image charmap print preview anchor textcolor',
'searchreplace visualblocks code fullscreen',
'insertdatetime media table contextmenu paste code help wordcount'
],
toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
content_css: [
'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
'//www.tinymce.com/css/codepen.min.css']
});
</script>
</head>


<div class="container">

</div>
<div class="ttp-features-banner">
<div id="ttp-page-over">
<div class="row " >
  <div class="col-md-12" style="text-align:center;">
    <h1>New Blog Post</h1>
    <br>
</div>
</div>
</div>
</div>


<form class="blog_form" action="<?php echo url_for('/staff/blog/update.php?id=' . $blog_post['id'] );?>" method="post">


<div class="row">
<div class="col-md-6">
      <label for="title">Title</label>
      <input type="text" name="title" value=" <?php echo h($blog_post['title']); ?> ">
</div>
</div>
<div class="row">
<div class="col-md-6">
      <label for="title">Subtitle</label>
      <input type="text" name="subtitle" value=" <?php echo h($blog_post['subtitle']); ?> ">
</div>
</div>
<div class="row">
<div class="col-md-12">


  <textarea id="mytextarea" name="content" >
<?php echo h($blog_post['content']); ?>
  </textarea>

</div>
</div>

<br>
<div class="row">
<div class="col-md-8">
<input class = "btn btn-success" type="submit" value="Submit Blog">
</div>
</div>

</form>

</div> <!--Container-->
