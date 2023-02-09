<?php include("config/functions.php");
if(isset($_GET['src'])){
    $src = $_GET['src'];
    $id = $_GET['id'];
    $table = $_GET['table'];
  }
  
  $delete = _delete("$table","id=$id");
  if($delete){
    $msg = "Delete Successfully";
    header("location:$src.php?msg=$msg");
  }
?>