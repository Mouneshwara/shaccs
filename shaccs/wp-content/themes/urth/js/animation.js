$(document).ready(function(){
	pageLoad_animation();
	
	function pageLoad_animation(){
		var head_home = $('.onload').length;
		var intervalHome = 200;
		var iHome = 1;	
		var refreshIntervalIdHome = setInterval(function(){
			if(iHome>head_home){
				clearInterval(refreshIntervalIdHome);			
			}
			else{
				$(".onload:eq("+(iHome-1)+")").addClass('fadein'); 
				iHome++;
			}
		}, (intervalHome * iHome));
	}
});
$(window).on('scroll',function(){
	var sc=$(window).scrollTop();
	windowHeight=$(window).height();
	$('.block_effect').each(function(){
		var scrollTop=$(window).scrollTop(),elementOffset=$(this).offset().top,distance=(elementOffset-scrollTop);
		if(distance<windowHeight){
			$(this).addClass('add_block_effect');
		}else{
			$(this).removeClass('add_block_effect');
		}
	});
	$('.rotate_effect').each(function(){
		var scrollTop=$(window).scrollTop(),elementOffset=$(this).offset().top,distance=(elementOffset-scrollTop);
		if(distance<windowHeight){
			$(this).addClass('add_rotate_effect');
		}else{
			$(this).removeClass('add_rotate_effect');
		}
	});
//	$('.homeblock_section .col_5:first-child').each(function(){
//		var scrollTop=$(window).scrollTop(),elementOffset=$(this).offset().top,distance=(elementOffset-scrollTop);
//		if(distance<windowHeight){
//			$(this).addClass('add_lefteffect');
//		}else{
//			$(this).removeClass('add_lefteffect');
//		}
//	});
//	$('.homeblock_section .col_5:last-child').each(function(){
//		var scrollTop=$(window).scrollTop(),elementOffset=$(this).offset().top,distance=(elementOffset-scrollTop);
//		if(distance<windowHeight){
//			$(this).addClass('add_righteffect');
//		}else{
//			$(this).removeClass('add_righteffect');
//		}
//	});
});