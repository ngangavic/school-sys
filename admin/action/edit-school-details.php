<?php
session_start();
require "../../actions/database/connection.php";
if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['locked']) && isset($_SESSION['status'])) {
    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['box']) && isset($_POST['town']) && isset($_POST['population'])) {
        if (isset($_FILES['logo'])) {
            $target_dir = "../../images/logo/";
            $target_file = $target_dir . basename($_FILES["logo"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["logo"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["logo"]["size"] > 500000) {
                header("location: ../index.php?info=large&&msg=Photo too large.");
                $uploadOk = 0;
            }
            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                header("location: ../index.php?info=format&&msg=Wrong format.");
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                header("location: ../index.php?info=failed&&msg=Upload failed");
                // if everything is ok, try to upload file
            } else {
                if (file_exists($target_dir . '/' . $_SESSION['id'] . 'jpeg')) {
                    unlink($target_dir . '/' . $_SESSION['id'] . 'jpeg');
                } elseif ($target_dir . '/' . $_SESSION['id'] . 'jpg') {
                    unlink($target_dir . '/' . $_SESSION['id'] . 'jpg');
                } elseif ($target_dir . '/' . $_SESSION['id'] . 'png') {
                    unlink($target_dir . '/' . $_SESSION['id'] . 'png');
                }

                if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
                    switch (exif_imagetype($target_file)) {
                        case 2:
                            $ext = '.jpg';
                            break;
                        case 3:
                            $ext = '.png';
                            break;
                    }
                    $urlPic2 = $target_dir . '/' . $_SESSION['id'] . $ext;
                    $urlPic3 = 'http://127.0.0.1/school-sys/images/logo/' . $_SESSION['id'] . $ext;
                    rename($target_dir . '/' . basename($_FILES["logo"]["name"]), $urlPic2);
                    $stmt = $conn->prepare("UPDATE tbl_school SET name=?,phone=?,box=?,town=?,population=?,logo=? WHERE id=?");
                    $stmt->bind_param("sssssss", $_POST['name'], $_POST['phone'], $_POST['box'], $_POST['town'], $_POST['population'], $urlPic3, $_SESSION['id']);
                    if (!$stmt->execute()) {
                        header("location: ../index.php?error");
                    } else {
                        header("location: ../index.php?sucess");
                    }
                } else {
                    header("location: ../index.php?info=101&&msg=Something is not right");
                }
            }
        }
        $stmt = $conn->prepare("UPDATE tbl_school SET name=?,phone=?,box=?,town=?,population=? WHERE id=?");
        $stmt->bind_param("ssssss", $_POST['name'], $_POST['phone'], $_POST['box'], $_POST['town'], $_POST['population'], $_SESSION['id']);
        if (!$stmt->execute()) {
            header("location: ../index.php?error");
        } else {
            header("location: ../index.php?sucess");
        }
    }
} else {
    header("location: ../index.php?error");
}
