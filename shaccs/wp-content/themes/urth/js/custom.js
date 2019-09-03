$(document).ready(function(){
	
	$('.preloader').fadeOut();
	
	$('.toggle_btn').on('click',function(){
		$(this).toggleClass('activeToggle');
		$('.navbar').slideToggle();
		$('.submenu_dropdown').slideUp();
	});
	
	var active_page = $(".active_page").attr("id");
	$("." + active_page).addClass("active_page");
	
	$('.close_ticker1').on('click',function(){
		$(".ticker1").slideUp("slow", function() { $(this).remove(); });
	});
	
	$('.close_ticker2').on('click',function(){
		$(".ticker2").slideUp("slow", function() { $(this).remove(); });
	});
	
	$('.home_slider .bxslider').bxSlider({
        auto: true,
		delay: 6000,
		speed: 1000,
		startAuto: 'true',
		mode: 'fade'
    });
	
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	
	$('.testimonial_section .bxslider').bxSlider();
	
	$('.product_slider .bxslider').bxSlider({
		slideWidth: 1000,
		minSlides: 2,
		maxSlides: 2,
		moveSlides: 1
	});
	
	$('.wishlist').on('click',function(){
		$(this).toggleClass('active_wishlist');
	});
	
	$('.sizes span').on('click',function(){
		$(this).addClass('selected_size');
		$('.sizes span').removeClass('selected_size');
	});
	
	$('.form_element input').focus(function(){
		$(this).parent().addClass('focus_input')	
	});
	
	$('.form_element input').blur(function(){
		var input_value = $(this).val();
		if(input_value==""){
			$(this).parent().removeClass('focus_input')	
		}
		else if(input_value!=""){
			$(this).parent().addClass('focus_input')	
		}
	});
	
	$('.forgot_password').on('click',function(){
		$('.forgotpassword_form').slideToggle();
	});
	
	$('.inc').click(function(){
        var incID = $(this).parent().attr('id');
        var quantity = $('#' + incID + ' input').val();
        if(quantity != '0'){
            var newQuantity = parseInt(quantity) + 1;
            $('#' + incID + ' input').val(newQuantity);
        } 
    });
    
    $('.dec').click(function(){
        var incID = $(this).parent().attr('id');
        var quantity = $('#' + incID + ' input').val();
        if(quantity == '1'){
            $('#' + incID + ' input').val('1');
        } else {
            var newQuantity = parseInt(quantity) - 1;
            $('#' + incID + ' input').val(newQuantity);
        }
    });
	
	$('.wishlist_item').on('click',function(){
		$(this).toggleClass('activewishlist_item');
	});
	
	$('.remove_item').click(function(){
        var itemID = $(this).attr('id');
		$('.' + itemID).slideUp();
    });
	
	$('.acc_btn').on('click',function(){
		var order_id = $(this).parent().attr('id');
		if($(this).parent().hasClass('active_order'))
		{
			
		}
		else
		{	
			$('.orders_data').slideUp();
			$('.orders_header').removeClass('active_order');
		}
		$('.' + order_id).slideToggle("slow");
		$(this).parent().toggleClass('active_order');
	});
	
	$('.checkout_click').on('click',function(){
		var checkoutstep_id = $(this).attr('id');
		$('.checkout_steps').fadeOut();
		$('.' + checkoutstep_id).delay(200).fadeIn();
	});
	
	$('#checkout_step2').on('click',function(){
		$('.checkout_tabs .col_3:first-child').addClass('completed_step');
		$('.checkout_tabs .col_3:nth-child(2)').addClass('active_step');
	});
	
	$('#sameaddress').on('click',function(){
		var checkval = $('#sameaddress').is(":checked");
		
		if(checkval != "true"){
			$('.sameshipping_address').slideToggle();
			$('.diffshipping_address').slideToggle();
		}
	});
	
	$('.web_search').on('click',function(){
		$('.search_dropdown').addClass('activesearch_dropdown');
	});
	
	$('.close_search').on('click',function(){
		$('.search_dropdown').removeClass('activesearch_dropdown');
	});
	
	$('.view_sizechart').on('click',function(){
		$('.mask').fadeIn();
		$('.popup').css('display','inline-table')
	});
	
	$('.mask').on('click',function(){
		$('.mask,.popup').fadeOut();
	});
	
	$(document).on('click touch', function(event) {
	  	if (!$(event.target).parents().addBack().is('.web_search,.search_dropdown')) {
		$('.search_dropdown').removeClass('activesearch_dropdown');
	  	}
	});
	
	$('.backtotop').click(function(){
		$('html, body').animate({scrollTop : 0},200);
		return false;
	});
	
	$('.mobile_btn').on('click',function(){
		$(this).parent().find('ul').slideToggle();
	});
	
	$('.removecart_prod').on('click',function(){
		$(this).parent().slideUp();
		$(this).parent().removeClass('activeCount');
		var numItems = $(this).parent().parent().find('.activeCount').length;
		if(numItems == 0){
			$('.cartwithitem').fadeOut();
			$('.cartwithoutitem').delay(200).fadeIn();
		}
	});
});

$(window).scroll(function () {
    var sc = $(window).scrollTop();
    if (sc >= 30) {
		$('.header').addClass('stuck_header');
		$('.home_page .header').addClass('stuck_home_header');
		$('.ticker1,.ticker2').slideUp();
		$('.backtotop').fadeIn();
    } else {
		$('.header').removeClass('stuck_header');
		$('.home_page .header').removeClass('stuck_home_header');
		$('.ticker1,.ticker2').slideDown();
		$('.backtotop').fadeOut();
    }
});