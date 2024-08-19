<?php
if (isset($_SESSION['allowed_menu']) && is_array($_SESSION['allowed_menu'])) {
    $allowed_menu = $_SESSION['allowed_menu'];
    if (!in_array(10, $allowed_menu)) {
        header("Location: index.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
