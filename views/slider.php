<div class="swiper-container slider">
	<div class="swiper-wrapper">
	    <div style="background-image: url(./resources/images/home-1.jpg);" class="swiper-slide"></div>
		<div style="background-image: url(./resources/images/home-2.jpg);" class="swiper-slide"></div>
    	<div style="background-image: url(./resources/images/home-4-min.jpg);" class="swiper-slide"></div>
    	<div style="background-image: url(./resources/images/home-3.jpg);" class="swiper-slide"></div>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
	<!-- Add Arrows -->
	<div class="swiper-button-next"></div>
	<div class="swiper-button-prev"></div>
</div>
<div  ng-controller="headerNavbar">
    <ul>
        <li ng-repeat="x in menu">{{x}}</li>
    </ul>
</div>