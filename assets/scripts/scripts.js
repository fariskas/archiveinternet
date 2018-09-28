

$('.menu_filter').click(function() {
	$('body').toggleClass('filter_open')
})

$('.filters_lv1 li').click(function() {
	$('.filters_lv1 li').removeClass('active');
	$(this).addClass('active');
	var thiscat = $(this).text();

})