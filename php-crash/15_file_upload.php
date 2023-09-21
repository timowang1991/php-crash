<?php
    if(isset($_POST['submit'])){
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

        if(!empty($_FILES['upload']['name'])){
            // print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/${file_name}";

            // Get file ext
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size < 1000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    
                    $message = '<p style="color:green">File uploaded successfully</p>';
                } else {
                    $message = '<p style="color:red">File is too large</p>';
                }
            } else {
                $message = '<p style="color:red">Invalid file type</p>';
            }

        } else {
            $message = '<p style="color:red">Please select an image</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>