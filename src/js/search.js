$(function(){
	$('#search').keyup(function(e){
		if(e.keyCode=='13'){
			var searchText = $('#search').val();
			window.location = "?contents=search&searchText="+searchText;
		}       
	})
})