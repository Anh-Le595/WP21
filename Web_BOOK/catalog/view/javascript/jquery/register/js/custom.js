

    $(document).ready(function($) {
      $("#sliderbanner").owlCarousel({
      		 // Show next and prev buttons
			items:1,
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    dots: true,
		    nav: true,
		    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>" ]

      });

       $(".sliderdealhot").owlCarousel({
      		 // Show next and prev buttons
			items: 4,
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:1000,
		    autoplayHoverPause:true,
		    dots: false,
		    nav: true,
		    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>" ],
		   	responsiveClass:true,
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:4
		        }
    		}
      });

        $("#gallery_01").owlCarousel({
      		 // Show next and prev buttons
		    loop:true,
		    margin:10,
		    autoplay:true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    dots: false,
		    nav: false,
		    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>" ],
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:2
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
    		}
      });

 
    });

 