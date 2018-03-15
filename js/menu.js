// JavaScript Document

$(document).ready(function()
{
	$("#nav-menu td").click(function()
	{
		var loc = $(this).find(".nav-wrapper").attr("data");
		if (loc) {
            window.location.href = loc;
		}
	});
	
	$("#footer-menu td").click(function()
	{
		var loc = $(this).find(".footer-wrapper").attr("data");	
		window.location.href = loc;
	});	
});
