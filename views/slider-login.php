<div class="swiper-container login">
	<div class="swiper-wrapper">
	    <div style="background-image: url(./resources/images/login/img<?=rand(1,4);?>.jpg);" class="swiper-slide">
	    	<div class="container">
	    		<form action="/action_page.php">
				    <div class="form-group">
				      <label for="email"><?=$lang["login_email"];?></label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>
				    <div class="form-group">
				      <label for="pwd"><?=$lang["login_password"];?></label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				    </div>
				    <div class="checkbox">
				      <label><input type="checkbox" name="remember"><?=$lang["login_remember_me"];?></label>
				    </div>
				    <button type="submit" class="btn btn-default col-md-12"><?=$lang["login_login_btn"];?></button>
				  </form>
	    	</div>
	    </div>
	</div>
</div>