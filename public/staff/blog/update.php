<?php
require_once('../../../private/initialize.php');

if(is_post_request()){
$blog_post = find_subject_by_id();

$title = isset($_POST['title']) ? $_POST['title'] : '';
$subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : '';
$content = isset($_POST['content']) ? $_POST['content'] : '';
$date = $blog_post['date'];


$sql = "UPDATE blog_posts SET ";
$sql .="title='" . $title . "',";
$sql .="subtitle='" . $subtitle . "',";
$sql .="content='" . $content . "',";
$sql .="date='" . $date . "' ";
$sql .= "WHERE id='" . $blog_post['id'] . "' ";
$sql .="LIMIT 1";

$result = mysqli_query($db,$sql);

if ($result){

  redirect_to(url_for('/blogpost.php?id=' . $blog_post['id']));
}else{
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
}

}else{

  redirect_to(url_for('/staff/blog/new.php'));
}

 ?>
