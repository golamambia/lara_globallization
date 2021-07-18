

jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 100) {
		jQuery('.header_area').addClass("fix");
	} else {
		jQuery('.header_area').removeClass("fix");
	}
});



jQuery(document).ready(function(){	
	onloadmethod();	
	
	/*main menu*/
	jQuery(document).ready(function() {
        jQuery(".menu li").find("ul").parent().append("<span></span>");
       jQuery(".menuButton").click(function() {
           jQuery( ".menuButton" ).toggleClass( "arrow_change" );
		 	jQuery(".menuButton + ul").slideToggle(); 
		});
	   jQuery(".menu ul li span").click(function(){
           if(jQuery("span").parent().children("ul").is(":visible")){
               jQuery(this).parent().siblings().children("ul").slideUp();
           }
            jQuery(this).parent().children("ul").slideToggle();  
    });
    });
 
 jQuery(".myAccount span").click(function() {
           jQuery( ".myAccount span" ).toggleClass( "arrow_change" );
		 	jQuery(".myAccountDropdown").slideToggle(); 
		});





	jQuery('#clientslider').owlCarousel({
		loop:true,
		autoplay:true,
		margin:0,
		dots:false,
		nav:true,
		navText:[],
    autoplayHoverPause: true,
		responsive:{
			0:{
				items:1
			}
			
		}
	});



jQuery('#servicecarousel').owlCarousel({
		loop:true,
		autoplay:true,
        center: true,
		margin:30,
		autoplayTimeout: 2000,
		dots:false,
		nav:false,
		navText:[],
        autoplayHoverPause: true,
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			640:{
				items:2
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1199:{
				items:3
			}
		}
	});
	
	
});

jQuery(window).resize(function(){	
	onloadmethod();	  
});

function onloadmethod(){	

}


