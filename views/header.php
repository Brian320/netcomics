<nav class="navbar navbar-default navbar-fixed-top nc_navbar">
  <div class="col-md-12" id="search_box">
    <form>
      <div class="form-group">
        <div class="container">
          <input type="text" class="form-control" id="search_input" placeholder="Buscar un cómic, serie o pelicula">
          <button type="button" class="close close_search" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
      </div>
    </form>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" href="./"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav pull-right">
        <li class="active"><a href="#"><?=$lang["nav_home_btn"];?></a></li>
        <li><a href="#about"><?=$lang["nav_comics_btn"];?> <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
        <li><a href="#contact"><?=$lang["nav_movies_btn"];?> <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?=$lang["nav_shows_btn"];?> 
            <i class="fa fa-angle-down" aria-hidden="true"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Arrow</a></li>
            <li><a href="#">The Flash</a></li>
          </ul>
        </li>
        <?php
          if(isset($_COOKIE["netcomics_user"])) {
        ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle fa fa-bell-o notification_btn" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-hidden="true">
            <i class="notification_dot"></i>
          </a>
          <ul class="dropdown-menu notifications-menu ">
            <empty-state id="empty-state-notifications" class="hide">
              <i class="fa fa-bell" aria-hidden="true"></i>
              <center><span><?=$lang["emptystate_notifications"];?></span></center>
            </empty-state>
            
            <li class="col-md-12">
              <a href="#" class="row notification-row">
                <img src="./resources/avatars/spiderman.jpg" class="profile-pic">
                <span class="username-notif">Spiderman</span>
                <small class="action">Respondio a tu comentario</small>
                <small class="date-notif">Hace unos segundos</small>
                <i class="fa fa-comment action-icon" aria-hidden="true"></i>
              </a>
            </li>
            <li class="col-md-12">
              <a href="#" class="row notification-row">
                <img src="./resources/avatars/daredevil.jpg" class="profile-pic">
                <span class="username-notif">DareDevil</span>
                <small class="action">Le dio me gusta a tu comentario</small>
                <small class="date-notif">Hace 3 minutos</small>
                <i class="fa fa-thumbs-up action-icon" aria-hidden="true"></i>
              </a>
            </li>
            <li class="col-md-12">
              <a href="#" class="row notification-row no-border-bottom">
                <img src="./resources/avatars/joker.jpg" class="profile-pic">
                <span class="username-notif">The Joker</span>
                <small class="action">Respondio a tu comentario</small>
                <small class="date-notif">Hace 10 minutos</small>
                <i class="fa fa-comment action-icon" aria-hidden="true"></i>
              </a>
            </li>
            <li class="col-md-12">
              <a href="#" class="row notification-row see-all">Ver todas</a>
              <a href="#1" class="config-notifications">
                <i class="fa fa-cog" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          	<span class="nav_avatar" style="background-image:url(./resources/avatars/daredevil.jpg)">
          		<!--<i class="notification_dot"></i>-->
          	</span>
          	Administrador
          	<span class="glyphicon glyphicon-option-vertical nav_configbt"></span>
          </a>
          <ul class="dropdown-menu user-menu">
            <!--<center id="loader">
              <br>
              <br>
              <div class="loader"></div>
              <br>
              <br>
            </center>-->
            <li><a href="#"><?=$lang["nav_profile_btn"];?></a></li>
            <li><a href="#"><?=$lang["nav_notification_btn"];?> <small class="notifications_count">5</small></a></li>
            <li><a href="#"><?=$lang["nav_config_btn"];?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><?=$lang["nav_logout_btn"];?></a></li>
          </ul>
        </li>
        <?php 
        } else {
        ?>
        <li class="active"><a href="./login"><?=$lang["nav_login_btn"];?></a></li>
        <li class="active"><a href="#"><?=$lang["nav_singup_btn"];?></a></li>
        <?php
        }
        ?>
        <li><i class="fa fa-search nc_search" aria-hidden="true"></i></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>