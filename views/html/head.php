<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>NetComics <?=($section_title != "" ? " - ".$section_title : $section_title);?></title>

  <!-- Bootstrap -->
  <link href="./resources/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./resources/bower_components/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <?php if($section == "home") { ?>
  <link rel="stylesheet" href="./resources/bower_components/swiper/swiper.min.css">
  <?php } ?>
  <link href="./resources/css/styles.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>