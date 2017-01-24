/* Add here all your JS customizations */

			

					$(function() {
						
						$('#sidenav_sticky').stickyBar({
							top:80
						});
					});

					$(function() {
						
						$('#section_sticked').stickyBar({
							
						});
					});
		

		/*

Main Javascript for jQuery Realistic Hover Effect
Created by Adrian Pelletier
http://www.adrianpelletier.com

*/

/* =Realistic Navigation
============================================================================== */

	// Begin jQuery
	
	$(document).ready(function() {

	/* =Reflection Nav
	-------------------------------------------------------------------------- */	
		
		// Append span to each LI to add reflection
		
		$("#nav-reflection li").append("<span></span>");	
		
		// Animate buttons, move reflection and fade
		
		$("#nav-reflection a").hover(function() {
		    $(this).stop().animate({ marginTop: "-10px" }, 200);
		    $(this).parent().find("span").stop().animate({ marginTop: "18px", opacity: 0.25 }, 200);
		},function(){
		    $(this).stop().animate({ marginTop: "0px" }, 300);
		    $(this).parent().find("span").stop().animate({ marginTop: "1px", opacity: 1 }, 300);
		});
				
	/* =Shadow Nav
	-------------------------------------------------------------------------- */
	
		// Append shadow image to each LI
		
		$("#nav-shadow li").append('<img class="shadow" src="img/icons/icons-shadow.png" width="81" height="27" alt="" />');
	
		// Animate buttons, shrink and fade shadow
		
		$("#nav-shadow li").hover(function() {
			var e = this;
		    $(e).find("a").stop().animate({ marginTop: "-14px" }, 250, function() {
		    	$(e).find("a").animate({ marginTop: "-10px" }, 250);
		    });
		    $(e).find("img.shadow").stop().animate({ width: "80%", height: "20px", marginLeft: "8px", opacity: 0.25 }, 250);
		},function(){
			var e = this;
		    $(e).find("a").stop().animate({ marginTop: "4px" }, 250, function() {
		    	$(e).find("a").animate({ marginTop: "0px" }, 250);
		    });
		    $(e).find("img.shadow").stop().animate({ width: "100%", height: "27px", marginLeft: "0", opacity: 1 }, 250);
		});








/**/
/* ------------------ scroll to  ------------------- */


	jQuery('.creation-graphique').click(function(){
			$(window).scrollTo( '#creation-graphique', 1000 );
		    return false; //Prevent Default and event bubbling.
	});
	jQuery('.developpement-web').click(function(){
		    $(window).scrollTo( '#developpement-web', 1000 );
		    return false; //Prevent Default and event bubbling.
	});
	jQuery('.referencement').click(function(){
		    $(window).scrollTo( '#referencement', 1000 );
		    return false; //Prevent Default and event bubbling.
	});
	jQuery('.web-marketing').click(function(){
		    $(window).scrollTo( '#web-marketing', 1000 );
		    return false; //Prevent Default and event bubbling.
	});
	jQuery('.gestion-projet').click(function(){
		    $(window).scrollTo( '#gestion-projet', 1000 );
		    return false; //Prevent Default and event bubbling.
	});


/**/






						
	// End jQuery
	
	});








