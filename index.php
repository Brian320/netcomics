<?php
	$section = "home";
	$section_title = "";
	include './core/config.php';
  //echo $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="es">
  <?php include './views/html/head.php'; ?>
  <body ui-view ng-app="NetComicsCore">
    <?php include './views/header.php'; ?>
    <!--SLIDER-->
    <?php include './views/slider.php'; ?>
    <?php include './views/footer.php'; ?>
  	<?php include './views/html/footer.php'; ?>
  </body>
</html>