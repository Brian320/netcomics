<?php
  include(dirname(__DIR__).'/core/config.php');
  if(isset($_COOKIE['netcomics_user'])) {
    header('Location: ./');
  }
	$section = "login";
	$section_title = $lang["login_login_title"];
  //echo $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="es">
  <?php include(dirname(__DIR__).'/views/html/head.php'); ?>
  <body>
    <?php include(dirname(__DIR__).'/views/header.php'); ?>
    <!--SLIDER-->
    <?php include(dirname(__DIR__).'/views/slider-login.php'); ?>

    <?php include(dirname(__DIR__).'/views/footer.php'); ?>
  	<?php include(dirname(__DIR__).'/views/html/footer.php'); ?>
  </body>
</html>