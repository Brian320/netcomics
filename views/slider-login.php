<div class="swiper-container login swiper-no-swiping ">
	<div class="swiper-wrapper">
	    <div style="background-image: url(./resources/images/login/img<?=rand(4,4);?>.jpg);" class="swiper-slide">
	    	<div class="container col-md-3">
	    		<form id="nc-login">
				    <div class="form-group">
				      <label for="username"><?=$lang["login_username"];?></label>
				      <input type="text" class="form-control" id="username" autocomplete="off" placeholder="<?=$lang["login_username"];?>" name="username">
				    </div>
				    <div class="form-group">
				      <label for="password"><?=$lang["login_password"];?></label>
				      <input type="password" class="form-control" id="password" autocomplete="off" placeholder="<?=$lang["login_password"];?>" name="password">
				    </div>
				    <div class="checkbox pull-left">
				      <label><input type="checkbox" name="remember_me"><?=$lang["login_remember_me"];?></label>
				    </div>
				    <button type="submit" class="btn btn-default col-md-12 nc-login nc-color"><?=$lang["login_login_btn"];?></button>
				    <span class="col-md-12 msg-status"><?=$lang["login_empty_login"];?></span>
				  </form>
	    	</div>
	    </div>
	</div>
</div>