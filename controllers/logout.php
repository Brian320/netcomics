<?php
include '../config.php';
if (isset($_COOKIE['admin_plegaria2017'])) {
    unset($_COOKIE['admin_plegaria2017']);
    setcookie('admin_plegaria2017', null, -1, '/');
    header('Location: '.$site_url);
} else {
    header('Location: '.$site_url);
}
?>