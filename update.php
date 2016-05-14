<?php
$var = $_POST['id'];
include "connection.php";
if ($_POST) {
if (move_uploaded_file($_FILES['img']['tmp_name'], "files/".
  $_FILES['img']['name'])) {
} else {
}
$title = $_POST['title'];
$text = htmlspecialchars($_POST['text'], ENT_QUOTES);
$image = "files/".$_FILES['img']['name'];
$query = "UPDATE  news SET title='$title',text ='$text',image='$image' WHERE id='$var'";
if(!$con->query($query)){
  echo $con->error;
}
header("location:news.php");
}
?>
