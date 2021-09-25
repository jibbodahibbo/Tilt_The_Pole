<?php
require_once('../../../private/initialize.php');

function myescape($inp) {
    if(is_array($inp))
        return array_map(__METHOD__, $inp);

    if(!empty($inp) && is_string($inp)) {
        return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
    }

    return $inp;
}

if(is_post_request()){

$title = isset($_POST['title']) ? $_POST['title'] : '';
$subtitle = isset($_POST['subtitle']) ? $_POST['subtitle'] : '';
$content = isset($_POST['content']) ? $_POST['content'] : '';
$date = date('Y-m-d H:i:s');

$title = myescape($title);
$subtitle =  myescape($subtitle);



$sql = "INSERT INTO blog_posts ";
$sql .="(title,subtitle,content,date) ";
$sql .= "VALUES (";
$sql .="'" . $title . "',";
$sql .="'" . $subtitle . "',";
$sql .="'" . $content . "',";
$sql .="'" . $date . "'";
$sql .=")";
$result = mysqli_query($db,$sql);
if ($result){
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/blogpost.php?id=' . $new_id));
}else{
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
}

}else{

  redirect_to(url_for('/staff/blog/new.php'));
}

 ?>
