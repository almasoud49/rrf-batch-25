<?php
session_start();

if (isset($_GET['index']) && isset($_SESSION['students'][$_GET['index']])) {
    unset($_SESSION['students'][$_GET['index']]);
    $_SESSION['students'] = array_values($_SESSION['students']); // reindex
}

header("Location: index.php"); // Change as needed
exit();
