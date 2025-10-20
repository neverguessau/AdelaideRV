jQuery(document).ready(function($){

	var siteNavigation = $('.navigation-main');
	
	siteNavigation.find( 'a' ).on( 'focus blur', function() {
		$( this ).parents( 'li' ).toggleClass( 'focus' );
	});
	

	//  mobile slide menu

	$(document).ready(function(){
		$("#openSidebarMenu").click(function(){
			$(".slide-menu-container").toggleClass( "open" );
			$(".slide-menu-overlay").toggleClass( "active" );
			$(".page-template-default").toggleClass( "disable-scroll" );
			$(".search-no-results").toggleClass( "disable-scroll");
			$(".search-results").toggleClass( "disable-scroll");
			
		});
		$("#close-btn").click(function(){
			$(".slide-menu-container").removeClass( "open" );
			$(".slide-menu-overlay").toggleClass( "active" );
			$(".page-template-default").toggleClass( "disable-scroll" );
			$(".search-no-results").toggleClass( "disable-scroll");
			$(".search-results").toggleClass( "disable-scroll");
		});
		$(".slide-menu-overlay").click(function(){
			$(".slide-menu-container").removeClass( "open" );
			$(".slide-menu-overlay").toggleClass( "active" );
			$(".page-template-default").toggleClass( "disable-scroll" );
			$(".search-no-results").toggleClass( "disable-scroll");
		});
		// $(".slide-menu-container .primary-menu-container a").click(function(){
		// 	$(".slide-menu-container").removeClass( "open" );
		// 	$(".slide-menu-overlay").toggleClass( "active" );
		// 	$(".page-template-default").toggleClass( "disable-scroll" );
		// 	$(".search-no-results").toggleClass( "disable-scroll");
		// });

		
	});

	
	//mobile main menu

	$(document).ready(function() {
			// prevent page from jumping to top from  # href link
			$('.menu-top-menu-container li.menu-item-has-children > a').click(function(e) {
				e.preventDefault();
			});

			// remove link from menu items that have children
			 $(".menu-top-menu-container li.menu-item-has-children > a").attr("href", "#");

			//  function to open / close menu items
			$(".menu-top-menu-container a").click(function() {
					var link = $(this);
					var closest_ul = link.closest("ul");
					var parallel_active_links = closest_ul.find(".active")
					var closest_li = link.closest("li");
					var link_status = closest_li.hasClass("active");
					var count = 0;

					closest_ul.find("ul").slideUp(function() {
							if (++count == closest_ul.find("ul").length)
									parallel_active_links.removeClass("active");
					});

					if (!link_status) {
							closest_li.children("ul").slideDown();
							closest_li.addClass("active");
					}
			})
	});


	//  search form overlay

	$(document).ready(function(){
		$("#search-btn").click(function(){
			$(".searchform-overlay").toggleClass( "active" );
			$(".page").toggleClass( "disable-scroll" );
			$(".search").toggleClass( "disable-scroll" );
			$("#search").focus();

			
		});
		$("#search-close-btn").click(function(){
			$(".searchform-overlay").toggleClass( "active" );
			$(".page").toggleClass( "disable-scroll" );
			$(".search").toggleClass( "disable-scroll" );
		});

	});

	// Back to top btn
	$(document).ready(function(){
		var btn = $('#back-to-top-btn');

		$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			btn.addClass('show');
		} else {
			btn.removeClass('show');
		}
		});

		btn.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, '300');
		});
	});


	

});

