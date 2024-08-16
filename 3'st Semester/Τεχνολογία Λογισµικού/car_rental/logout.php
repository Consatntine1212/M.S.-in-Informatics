<?php
require_once 'includes/ini.php';
include_once 'includes/header.php';
unset($_SESSION['id']);
unset($_SESSION['email']);
unset($_SESSION['user_type']);
header("Location: index.php");
session_destroy();

echo '<script>alert("Έχετε αποσυνδεθεί με επιτυχία");</script>';

echo '<script>window.location.href="index.php";</script>';