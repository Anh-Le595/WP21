var card = $(".card");

$(document).on("mousemove",function(e) {  
	if (window.innerWidth >= 1200){
	  var ax = -($(window).innerWidth()/2- e.pageX)/25;
	  var ay = ($(window).innerHeight()/2- e.pageY)/25;
	  card.attr("style", "transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-webkit-transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-moz-transform: rotateY("+ax+"deg) rotateX("+ay+"deg)");
	}
	else{
		card.attr("style", "transform: rotateY(0deg) rotateX(0deg);-webkit-transform: rotateY(0deg) rotateX(0deg);-moz-transform: rotateY(0deg) rotateX(0deg)");		
	}
});