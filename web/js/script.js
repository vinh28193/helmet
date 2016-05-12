

new WOW().init();

$(window).load(function() {
	$("#flexiselDemo2").flexisel({
		visibleItems: 1,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 5000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 1
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 1
    		}
    	}
    });
    
});
$(document).ready(function() {
	$("#owl-demo").owlCarousel({
		items : 2,
		lazyLoad : false,
		autoPlay : true,
		navigation : true,
		navigationText :  true,
		pagination : false,
		});
	});