<script>
// Toggle
$('li.submenu a.link').click(function() {
	$('.sub').hide(500);
    $(this).next('.sub').slideToggle(500);
});

// Active script
$(function(){
    var ins = $("#main-menu li").on( "click", function(e) {
        ins.not(this).removeClass('submenu-active')
        $(this).addClass("submenu-active");
    });
});	

// Elements menu
$('.elements-menu').click(function() {
	$('.elements-menu-dropdown').slideToggle()
	return false;
})
</script>