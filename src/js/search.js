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
	$('#new').click(function(){
		$('#new').addClass("press");
		$('#az').removeClass();
		$('#evaluate').removeClass();
	})
	$('#az').click(function(){
		$('#az').addClass("press");
		$('#new').removeClass();
		$('#evaluate').removeClass();
	})
	$('#evaluate').click(function(){
		$('#evaluate').addClass("press");
		$('#az').removeClass();
		$('#new').removeClass();
	})
});

