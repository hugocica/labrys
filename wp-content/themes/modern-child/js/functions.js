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

	// if the window width is more than 768px
	if ( $(window).width() > tablet_width ) {
		// show submenu Editoriais
		if ( $('#site-navigation .menu ul').children('li:first-of-type').hasClass('current-menu-item') ) {
			$('#editais-navigation').addClass('open');
		}
	} else {
		// fix the menu navbar to the end of the screen
		$('body #page .site-inner .site-header nav#site-navigation').css({ bottom: $(window).height() });

		$('#site-navigation .menu ul').children('li:first-of-type')
									  .removeClass('current-menu-item')
									  .removeClass('active-menu-item')
									  .children('a')
									  .removeAttr('href');
		$('#site-navigation .menu ul').children('li:first-of-type').unbind('click').click(function(e) {
			e.stopPropagation();
			e.preventDefault();
			$('#editais-navigation').addClass('open');
		});
	}
});