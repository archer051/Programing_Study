<?php
define("FILE_SIZE_MAX", 2 * 1024 * 1024);

if (isset($_FILES['image'])) {

    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

    //only allow jpeg, jpg and png file type
    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "다른 파일을 올리셨군요--, JPEG or PNG 파일을 부탁드립니다.";
    }

    //File size must be excately 2 MB
    //$FILE_SIZE_MAX = 2 * 1024 * 1024;
    if ($file_size > FILE_SIZE_MAX) {
        $errors[] = '최대파일크기는 2MB로 부탁드립니다.';
    }

    //images are the destination library -> create in your project
    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/" . $file_name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
?>
<html>

<head>
  <meta charset="UTF-8">
</head>

<body>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" />
  </form>

</body>

</html>