<?php
include_once 'includes/header.php';

if (isset($_SESSION['user_type']) == "client") {
    include_once 'index_client.php';
} else if (isset($_SESSION['user_type']) == "owner") {
    include_once 'index_owner.php';
} else {
    include_once 'index_guest.php';
}
?>
<?php
include_once 'includes/footer.php';