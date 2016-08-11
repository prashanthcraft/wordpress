//Custom JavaScript Document for Royaal Infra

jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});

//Page active Jquery

$(function(){
	var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	$(".nav li a").each(function(){
		if($(this).attr("href") == pgurl || $(this).attr("href") == '')
		$(this).parent().addClass("active");
	})
});

