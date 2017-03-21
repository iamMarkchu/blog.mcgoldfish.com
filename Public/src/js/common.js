$(function(){
	$('.search-input>input').keyup(function(){
		var keyword = $(this).val();
		if(keyword == '' || keyword == undefined || keyword.length<2)
		{
			$('.search-block').html('');
		}else{
			$.get('/search/'+keyword, function(data){
				$('.search-block').html(data);
			});	
		}
	})
});