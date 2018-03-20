<?php
if(isset($_POST['btn-upload']))
{
     $pic = rand(1000,100000)."-".$_FILES['pic']['name'];
    $pic_loc = $_FILES['pic']['tmp_name'];
     $folder="uploads/";
     if(move_uploaded_file($pic_loc,$folder.$pic))
     {
        ?><script>alert('successfully uploaded');</script><?php
     }
     else
     {
        ?><script>alert('error while uploading file');</script><?php
     }
     header('login.html')
}