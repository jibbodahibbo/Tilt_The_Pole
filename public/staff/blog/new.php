<?php require_once 'protect.php';
Protect\with('form.php', 'bendthestick');
?>

<?php require_once('../../../private/initialize.php') ?>
<?php $currentpage="blog" ?>
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
  '//www.tinymce.com/css/codepen.min.css'],
  image_title: true,
    // enable automatic uploads of images represented by blob or data URIs
    automatic_uploads: true,
    // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
    // images_upload_url: 'postAcceptor.php',
    // here we add custom filepicker only to Image dialog
    file_picker_types: 'image',
    // and here's our custom image picker
    file_picker_callback: function(cb, value, meta) {
      var input = document.createElement('input');
      input.setAttribute('type', 'file');
      input.setAttribute('accept', 'image/*');

      // Note: In modern browsers input[type="file"] is functional without
      // even adding it to the DOM, but that might not be the case in some older
      // or quirky browsers like IE, so you might want to add it to the DOM
      // just in case, and visually hide it. And do not forget do remove it
      // once you do not need it anymore.

      input.onchange = function() {
        var file = this.files[0];

        var reader = new FileReader();
        reader.onload = function () {
          // Note: Now we need to register the blob in TinyMCEs image blob
          // registry. In the next release this part hopefully won't be
          // necessary, as we are looking to handle it internally.
          var id = 'blobid' + (new Date()).getTime();
          var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
          var base64 = reader.result.split(',')[1];
          var blobInfo = blobCache.create(id, file, base64);
          blobCache.add(blobInfo);

          // call the callback and populate the Title field with the file name
          cb(blobInfo.blobUri(), { title: file.name });
        };
        reader.readAsDataURL(file);
      };

      input.click();
    }
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


<form action = "?=" method = "POST" enctype = "multipart/form-data">
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
