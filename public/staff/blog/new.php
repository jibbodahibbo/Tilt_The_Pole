<?php require_once('../../../private/initialize.php') ?>
<?php $currentpage="blog" ?>
<?php  include(SHARED_PATH . '/header.php') ?>
  <!--------Header-->
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


<form class="blog_form" action="<?php echo url_for('/staff/blog/create.php');?>" method="post">


<div class="row">
  <div class="col-md-6">
        <label for="title">Title</label>
        <input type="text" name="title" value="">
  </div>
</div>
<div class="row">
  <div class="col-md-6">
        <label for="title">Subtitle</label>
        <input type="text" name="subtitle" value="">
  </div>
</div>
<div class="row">
  <div class="col-md-12">


    <textarea id="mytextarea" name="content">

    </textarea>

  </div>
</div>

<br>
<div class="row">
<div class="col-md-8">
<input class = "btn btn-success" type="submit" value="Create Subject">
</div>
</div>

</form>



</div> <!--Container-->
