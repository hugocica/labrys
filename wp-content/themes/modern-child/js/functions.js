var phone_width = 320;
var tablet_width = 768;

jQuery(document).ready(function($){
	
	// search icon animation
	var $wrap = $('[js-ui-search]');
	var $close = $('[js-ui-close]');
	var $input = $('[js-ui-text]');
	
	$close.on('click', function(){
		$wrap.toggleClass('open');
	});
	
	$input.on('transitionend webkitTransitionEnd oTransitionEnd', function(){
		
		if ($wrap.hasClass('open')) {
			$input.focus();
		} else {
			return;
		}
	});

	// show submenu Editoriais
	if ( $(window).width() > tablet_width ) {
		if ( $('#site-navigation .menu ul').children('li:first-of-type').hasClass('current-menu-item') ) {
			$('#editais-navigation').addClass('open');
		}
	} else {
		$('body #page .site-inner .site-header nav#site-navigation').css({ top: $(window).height() });
	}
});