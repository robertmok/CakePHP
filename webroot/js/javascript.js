$( document ).ready(function() 
{

$(window).scroll(function () 
{
	//if you hard code, then use console
	//.log to determine when you want the 
	//nav bar to stick.  
	console.log($(window).scrollTop())

	if ($(window).scrollTop() > $('#banner').height()) 
	{
		$('#navBar').addClass('navBarFixed');
	}
	if ($(window).scrollTop() < $('#banner').height()+1) 
	{
		$('#navBar').removeClass('navBarFixed');
	}

	if ($(window).scrollTop() > $('#navBar').height()) 
	{
		$('#myCarousel').addClass('myCarouselFixed ');
	}
	if ($(window).scrollTop() < $('#navBar').height()+1) 
	{
		$('#myCarousel').removeClass('myCarouselFixed ');
	}
});


$('#topOfThePageButton').click(function()
{
	$("html, body").animate({ scrollTop: "0" });
});

$('#menuTriggerButton').click(function(e)
{
	$('#menuItems').slideToggle();
	$("#menuItems").appendTo('#navBar');
	e.stopPropagation(); 
});

$(window).resize(function()
{
	if($(window).width()>600)
	{
		$('#menuItems').removeAttr('style');
		$('#menuItems ul').removeAttr('style');
		$( "#menuItems" ).insertAfter( "#menuTriggerButton" );
	}
});

/*
$('.dropdown').click(function(e)
{
	var clicks = $(this).data('clicks');
e.preventDefault();
	$(this).parent().children('ul').slideToggle();
});
*/

$(document).click(function()
{                   
	if ($(window).width() <= 600)
	{
		$("#menuItems").slideUp();
	}
});

$('#menuItems').click(function(e)
{
	e.stopPropagation();
});

});