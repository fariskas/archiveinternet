

$('.menu_filter').click(function() {
	$('body').toggleClass('filter_open')
})


// check which tag is active 
if (window.location.pathname.indexOf(':') > -1 ) {
	console.log('has colon');
	var active_cat = window.location.pathname.substring(0, window.location.pathname.indexOf(':'));	
	active_cat = active_cat.split('site').pop()
	console.log(active_cat)
	$('.filters_lv2 li').hide();
	$('.filters_lv2 .li_site'+active_cat+'s').show();

	$('.lv1_'+active_cat).addClass('active');
} else {
	$('.filters_lv1 li:eq(0)').addClass('active');
	var active_cat = $('.filters_lv1 li:eq(0)').text().toLowerCase()
	console.log(active_cat);
	$('.filters_lv2 li').hide();
	$('.filters_lv2 .li_site'+active_cat+'s').show();
}
// var active_cat = window.location.pathname


$('.filters_lv1 li').click(function() {
	$('.filters_lv1 li').removeClass('active');
	$(this).addClass('active');
	var thiscat = $(this).text().toLowerCase();

	$('.filters_lv2 li').hide();
	$('.filters_lv2 .li_site'+thiscat+'s').show();



})