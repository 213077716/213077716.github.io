
	var me = function(){
		$("#logo").click(function timer(){
			$("img").css('transform', 'rotate(180deg)');	
		})
	};

	$(document).ready(function(){
		setTimeout(me(), 1000);
	});

