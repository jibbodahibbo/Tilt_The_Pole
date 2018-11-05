<?php require_once 'protect.php';
Protect\with('form.php', 'bendthestick');
?>

<?php require_once('../../../private/initialize.php') ?>
<?php $currentpage="blog"?>
<?php  include(SHARED_PATH . '/header.php') ?>

<?php

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

      $extensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152) {
         $errors[]='File size must be less that 2 MB';
      }

      if(empty($errors)==true) {
        $directory = "images/blog/";
        $filecount = 0;
        $files = glob($directory . "*");
        if ($files){
         $filecount = count($files);
        }
        $a = "$filecount";
         move_uploaded_file($file_tmp,"images/blog/". $a . $file_name );
         copy("images/blog/".$a.$file_name, PUBLIC_PATH ."/images/blog/". $a . $file_name );
      }else{
         print_r($errors);
      }
   }

?>
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

<form action = "" method = "POST" enctype = "multipart/form-data">
   <input type = "file" name = "image" />
   <input type = "submit"/>
<?php if(isset($_FILES['image'])){ ?>
   <ul>
      <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
      <li>File size: <?php echo $_FILES['image']['size'];  ?>
      <li>File type: <?php echo $_FILES['image']['type'] ?>

  <li> File URL:   <?php echo 'images/blog/' .$a. $_FILES['image']['name']  ?> </li>
  <small>Copy this URL into your image source</small>
   </ul>
<?php } ?>
</form>


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
