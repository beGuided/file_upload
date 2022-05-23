
<?php

function upload_error($error){
    $upload_errors = array(

        UPLOAD_ERR_OK => "There is no error",
        UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE in form",
        UPLOAD_ERR_PARTIAL => "The uploaded file was only partial uploaded",
        UPLOAD_ERR_NO_FILE => "No file was uploaded.",
        UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
        UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
        UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload"
    );
    return $upload_errors[$error];
}

// echo __DIR__."/Assets/img/affiliates";
// echo  "<br>";
// echo SITE_ROOT . DS . 'admin' . DS .'assets'. DS.'img'.DS.'affiliate';
 $upload_dir= __DIR__."/asset/img";

if (isset($_POST['create'])) {

    echo"<pre>";
    print_r( $_FILES['image']);
    echo"</pre>";
   $Partner_image_temp = $_FILES['image']['tmp_name'];

   $data = file_get_contents( $_FILES['image']['tmp_name']);
   echo nl2br($data);

$error = $_FILES['image']['error'];
if($error > 0 )
{
    echo upload_error($error);
}else{
    
    $file_temp=$_FILES['image']['tmp_name'];
    $file_name=basename( $_FILES['image']['name']);
    $target_path = $upload_dir.'/'.$file_name;
 
 if (move_uploaded_file($file_temp,$target_path )){
     echo "file upload suceeded";
 }
 else{  
     echo "file upload failed";
    }
 
}
  
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    
<form action="upload_file.php" method="post" class="input-glass" enctype="multipart/form-data">

<h5>Upload Photo</h5>
<div class="custom-file mb-3">
<input name="MAX_FILE_SIZE" type="hidden" required value="1000000">
<input name="image" type="file" required  id="customFile" accept=".png, .jpg, .jpeg">
<!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
</div>  

<input type="submit" name="create" value="submit">
</form>

</body>
</html> -->