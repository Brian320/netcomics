<?php
include '../core/config.php';
if (isset($_COOKIE['netcomics_user'])) {
    unset($_COOKIE['netcomics_user']);
    setcookie('netcomics_user', null, -1, '/');
    header('Location: '.$site_url);
} else {
    header('Location: '.$site_url);
}
?>