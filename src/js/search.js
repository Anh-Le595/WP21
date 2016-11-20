$(function(){
	$('#search').keyup(function(e){
		if(e.keyCode=='13'){
			var searchText = $('#search').val();
			window.location = "?contents=search&searchText="+searchText;
		}       
	})
	$('#searchbox').keyup(function(e){
		if(e.keyCode=='13'){
			var searchText = $('#searchbox').val();
			window.location = "?contents=search&searchText="+searchText;
		} 
	})
	$('#btn-search').click(function(){
		var searchText = $('#searchbox').val();
		window.location = "?contents=search&searchText="+searchText;
	})
});

