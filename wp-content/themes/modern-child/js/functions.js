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
	if ( $('#site-navigation .menu ul').children('li:first-of-type').hasClass('current-menu-item') ) {
		$('#editais-navigation').addClass('open');
	}
});