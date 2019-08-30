$(document).ready(function(){
	
	/* Slider */
	$('#slider .slider-images').flexslider({
		controlNav: false,
	  	directionNav: false,
		animationLoop: false,
	    slideshow: false,
		touch: false,
		start: function(slider) { $('#slider .slider-images').removeClass('loading') }
	});
	
	$('#slider .content .flexslider').flexslider({
		animation: 'slide',
		controlNav: false,
	  	directionNav: false,
		animationLoop: false,
	    slideshow: false,
		direction: 'vertical',
		touch: false,
		asNavFor: '#slider .slider-images'
	});
	
	$('#slider .content .flexslider ul li').click(function() {
		$(this).siblings().removeClass('flex-active-slide');
		$(this).addClass('flex-active-slide');
	});
	/* End slider */
	
	// Pretty Photo for image gallery modal popup
	$("a[rel^='prettyPhoto']").prettyPhoto({ social_tools: false });
	
	// Main menu scrollspy
	$('#header .menu-nav ul').scrollspy();
	
	// jQuery smooth scrolling
	$('#header .menu-nav ul li a').bind('click', function(event){
		var $anchor = $(this);		
		$('html, body').stop().animate({
			scrollTop: parseInt($($anchor.attr('href')).offset().top) - 100
		}, 2000,'easeInOutExpo');
		event.preventDefault();
	});
	
	
	/* Responsive main menu */
	$("<select />").addClass('responsive').appendTo("#header .menu-nav");
	$("<option />", {
		"selected": "selected",
		"value"   : "#",
		"text"    : "Please select one option..."
	}).appendTo("#header .menu-nav select");
	
	// Dropdown menu list value
	$("#header .menu-nav ul li a").each(function() {
		var el = $(this);
		$("<option />", {
			"value"   : el.attr("href"),
			"text"    : el.text()
		}).appendTo("#header .menu-nav select");
	});
	
	// Make the drop-down work
	$("#header .menu-nav select").change(function() { window.location = $(this).find("option:selected").val() });
	/* End responsive main menu */
	
	
	/* Contact us process */
	$("#contact-form").submit(function() {
		var submitData 	= $('#contact-form').serialize();
		$("#contact-form input[name='name']").attr('disabled','disabled');
		$("#contact-form input[name='email']").attr('disabled','disabled');
		$("#contact-form input[name='subject']").attr('disabled','disabled');
		$("#contact-form textarea[name='message']").attr('disabled','disabled');
		$("#contact-form input[name='submit']").attr('disabled','disabled');
		$("#contact-form .data-status").show().html('<div class="alert alert-info"><strong>Loading...</strong></div>');
		$.ajax({ // Send an offer process with AJAX
			type: "POST",
			url: "contact.php",
			data: submitData + "&action=add",
			dataType: "html",
			success: function(msg){
				if(parseInt(msg)!=0)
					{
					var msg	= msg.split("|");
					if(msg[0]=="success") {
						$("#contact-form input[name='name']").val('').removeAttr('disabled');
						$("#contact-form input[name='email']").val('').removeAttr('disabled');
						$("#contact-form input[name='subject']").val('').removeAttr('disabled');
						$("#contact-form textarea[name='message']").val('').removeAttr('disabled');
						$("#contact-form input[name='submit']").removeAttr('disabled');
						$("#contact-form .data-status").html(msg[1]).fadeIn();
					} else {
						$("#contact-form input[name='name']").removeAttr('disabled');
						$("#contact-form input[name='email']").removeAttr('disabled');
						$("#contact-form input[name='subject']").removeAttr('disabled');
						$("#contact-form textarea[name='message']").removeAttr('disabled');
						$("#contact-form input[name='submit']").removeAttr('disabled');
						$("#contact-form .data-status").html(msg[1]).fadeIn();
					}
					}
				}
		});
		return false;
	});
	/* End contact us process */
	
	
	// jQuery placeholder for IE
	$("input, textarea").placeholder();
	
	
	/* Back to top scroll */
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) { $('.scrollup').slideDown(); } else { $('.scrollup').slideUp(); }
	}); 
	$('.scrollup').click(function(){
		$("html, body").stop().animate({ scrollTop: 0 }, 2000, 'easeInOutExpo');
		return false;
	});
	/* End Back to top scroll */
	
	
	/* Customizer */
	$("#customize h5").click(function() { $("#customize .colors").slideToggle() });
	
	$("#customize .colors a").click(function(e) {
		$color = $(this).attr('class');
		$('head').append('<link rel="stylesheet" type="text/css" href="css/customizer/'+ $color +'.css">');
		$('#header .logo img').attr('src', 'css/customizer/images/' + $color + '-logo.png');
		e.preventDefault();
	});
	/* End Customizer */
	
	
	/* Figure overlay effect */
	$('figure.figure-overlay').each(function() {
		$(this).hoverdir({
			hoverParent: $(this).children('a'),
			hoverElement: $(this).children('a').children('div').children('p')
		});
	});

});