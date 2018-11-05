<?php require_once('../../../private/initialize.php'); ?>
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

         echo "Success";
      }else{
         print_r($errors);
      }
   }

?>
<html>
   <body>

      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>

         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>

        <li> File URL:   <?php echo 'images/blog' .$a. $_FILES['image']['name']  ?> </li>
        <small>Copy this file URL into your media link</small>
         </ul>

      </form>

   </body>
</html>
