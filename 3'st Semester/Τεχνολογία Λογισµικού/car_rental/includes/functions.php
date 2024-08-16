<?php

/**
 * This file contains all the functions that are used in the project
 */


/** Login User */
if (isset($_POST['login']) && $_POST['login'] === 'login') {
    $result = $db->login($_POST['email'], $_POST['password']);
    if ($result['code']) {
        if ($_SESSION['user_type'] == 'client') {
            header('Location: index_client.php');
        } else if ($_SESSION['user_type'] == 'owner') {
            header('Location: index_owner.php');
        }
    } else {
        echo '<script>toastr.' . $result['status'] . '("' . $result['message'] . '");</script>';
    }
}

/** Register User */
if (isset($_POST['register']) && $_POST['register'] === 'register') {

    if (isset($_FILES['pic']) && $_FILES['pic']['error'] == UPLOAD_ERR_OK) {
        $username = $_POST['username'];
        $targetDir = '../files/' . $username . '/';
        $fileType = strtolower(pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION));

        // Create the target directory if it doesn't exist
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Check if the uploaded file is a picture file
        $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileType, $allowedTypes)) {
            $targetFile = $targetDir . basename($_FILES['pic']['name']);

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $targetFile)) {
                echo 'File uploaded successfully.';
                $pic = $targetFile;
            } else {
                echo 'File upload failed.';
            }
        } else {
            echo 'Only picture files are allowed.';
        }
    } else {
        $pic = '';
    }

    $result = $db->insertUser($_POST['username'], $_POST['email'], $_POST['password'], $_POST['fullname'], $_POST['phone'], $pic, $_POST['country'], $_POST['birth_date'], $_POST['type']);
    if ($result['code']) {
        echo '<script>toastr.' . $result['status'] . '("' . $result['message'] . '");</script>';
        header('refresh:3; url=login.php');
    } else {
        echo '<script>toastr.' . $result['status'] . '("' . $result['message'] . '");</script>';
    }
}