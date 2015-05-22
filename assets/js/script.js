jQuery(document).ready(function($) {
    $(".rslides-slideshow").responsiveSlides({
		auto: true,
		speed: 2000,
		timeout: 8000,
		pause: true,
		pager: true,
		namespace: 'rslider-buttons'
    });	

    $(".rslides-testimonials").responsiveSlides({
		auto: true,
		speed: 1500,
		timeout: 8000
    });	
});