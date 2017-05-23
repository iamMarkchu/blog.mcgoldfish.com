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
	});
	$('.login-btn').on('click', function(){
		alert('功能暂未开放！');
	});

	$(window).scroll(function(){
		var to_top = $('.to-top');
		if($(window).scrollTop() > 50)
		{
			if(to_top.css('display') != 'block') to_top.css('display', 'block');
		}else{
			if(to_top.css('display') != 'none') to_top.css('display', 'none');
		}
	});
	$('.to-top').on('click', function(){
		$('body').animate({
			'scrollTop': 0,
		}, 1000, function(){
			document.documentElement.scrollTop = 0;
		});
	});
});