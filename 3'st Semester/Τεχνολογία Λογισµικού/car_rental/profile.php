<?php

include_once 'includes/header.php';
include_once 'includes/navbars/nav_user.php';

if (isset($_GET['id']))
    $id = $_GET['id'];

if (isset($_SESSION['user_type']) == "owner")
    include_once 'profile_owner.php';




if (!isset($_SESSION['user_type'])) {
    header("Location: index.php");
} else if (isset($_SESSION['user_type']) == "client") {
    include_once 'profile_client.php';
} else if (isset($_SESSION['user_type']) == "owner") {
    var_dump($_SESSION['user_type']);
    include_once 'profile_owner.php';
}

include_once 'includes/footer.php';