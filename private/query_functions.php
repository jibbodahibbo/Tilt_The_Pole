<?php

function find_all_blogposts(){
  global $db;
  $sql = "SELECT * FROM blog_posts ";
  $sql .= "ORDER BY id DESC";
  $blog_set = mysqli_query($db, $sql);
  return $blog_set;
}

function find_subject_by_id(){
  global $db;
  $id = isset($_GET['id']) ? $_GET['id']: '1';
  $sql =  "SELECT * FROM blog_posts ";
  $sql .= "WHERE id='" . $id . "'";
  $result = mysqli_query($db, $sql);

  $blog_post = mysqli_fetch_assoc($result);

  mysqli_free_result($result);
  return $blog_post;

}

function delete_post($id){
global $db;
$sql = "DELETE FROM blog_posts ";
$sql .= "WHERE id='" . $id . "' ";
$sql .= "LIMIT 1";
$result = mysqli_query($db,$sql);

if ($result){
redirect_to(url_for('/staff/blog/index.php'));
}else{
echo mysqli_error($db);
db_disconnect($db);
exit;
}

}


 ?>
