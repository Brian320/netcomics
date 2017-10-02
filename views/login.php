<?php
	$section = "login";
	$section_title = "";
	include '../core/config.php';
  //echo $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="es">
  <?php include '../views/html/head.php'; ?>
  <body>
    <?php include '../views/header.php'; ?>
    <!--SLIDER-->
    <?php include '../views/slider-login.php'; ?>

    <?php include '../views/footer.php'; ?>
  	<?php include '../views/html/footer.php'; ?>
  </body>
</html>