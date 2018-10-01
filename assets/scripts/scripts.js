

$('.menu_filter_txt').click(function() {
	$('body').toggleClass('filter_open');
	if ( $('body').hasClass('filter_open') ) {
		$('.menu_filter_txt').text('close filters');
	} else {
		$('.menu_filter_txt').text('filters');
	}
})

// check which tag is active 
if (window.location.pathname.indexOf('/site') > -1 ) {
	// show/hide/grey out filters based on the url
	console.log('has filters');
	var active_cat = window.location.pathname.substring(0, window.location.pathname.indexOf(':'));	
	active_cat = active_cat.split('site').pop()
	console.log(active_cat)
	$('.filters_lv2 li').hide();
	$('.filters_lv2 .li_site'+active_cat+'s').show();

	$('.lv1_'+active_cat).addClass('active');

	// show active filter bubble
	$('.added_filter').addClass('active');

	var active_lv2 = window.location.pathname.substring( window.location.pathname.indexOf("site"+active_cat+":")).replace("site"+active_cat+":",'')
	if (active_lv2.substr(0, active_lv2.lastIndexOf("/")) != "") {
		active_lv2 = active_lv2.substr(0, active_lv2.lastIndexOf("/"));	
	}
	
	console.log('active_lv2',active_lv2);

	$('.added_filter span').text(active_lv2)

} else {
	// if no filters detected in url, reset how the filter menu looks
	$('.filters_lv1 li:eq(0)').addClass('active');
	console.log('no filters');
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