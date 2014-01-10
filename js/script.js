// Current page highlighter
$(document).ready(function(){
	  var str=location.href.toLowerCase();
$('#main-menu li a').each(function() {
    if (str.indexOf(this.href.toLowerCase()) > -1) {
			$("li.submenu-active").removeClass("submenu-active");
            $(this).parent().addClass("submenu-active"); 
       }
}); 
$("li.submenu-active").parents().each(function(){
	if ($(this).is("li")){
		$(this).addClass("submenu-active"); 
		$(this).children('ul').show();
		}							  
	});
})

