<!DOCTYPE html>
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
</form>

</body>
</html>