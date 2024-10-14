<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File I O</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" id="">
        <input type="submit" value="Select File" name="submit" >
    </form>
</body>
</html>

<?php
  if(isset($_FILES['file1']))
  {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name = $_FILES['file1']['name'];
    $file_tmp_name = $_FILES['file1']['tmp_name'];
    $file_type = $_FILES['file1']['type'];

    if ($_FILES["file1"]["size"] > 1000000 ) { 
        echo "Sorry, your file is too large.<br>";
    }
    elseif ($file_type == 'image/jpg' || $file_type == 'image/png' || $file_type == 'image/jpeg')
    {
        if(move_uploaded_file($file_tmp_name,"server_upload_files/".$file_name))
        {
            echo "file uploaded successfully";
        }
        else
        {
            echo "please select file";
        }

    }
    else
    {
        echo "Please Upload .jpg or .png or .jpeg file";
    }
  }
?>