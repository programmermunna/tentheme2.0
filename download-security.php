<?php include("common/header.php");
// Downloads files
if (isset($_GET['file_id'])) {
    $file_id = $_GET['file_id'];
    $check = _fetch("cart","cart_id=$file_id AND type='product' AND pid=$id");
    
    if($id<1){
        $msg = "Something is error";
        header("location:download.php?msg=$msg");
    }else{
        if(!$check){
            $msg = "Something is error";
            header("location:download.php?msg=$msg");
            }else{            
            $file = _fetch("products","id=$file_id");   
            $filepath = 'admin/upload/' . $file['file_name'];
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('admin/upload/' . $file['file_name']));
                readfile('admin/upload/' . $file['file_name']);
                exit;
            }
        }
    }
}
?>