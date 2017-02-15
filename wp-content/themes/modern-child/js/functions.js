var phone_width = 320;
var tablet_width = 768;
var desktop_width = 1024;
var laptop_width = 1366;

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

		$('#site-navigation .menu ul').children('li:first-of-type').on({
			mouseenter: function() {
				$('#editais-navigation').addClass('open');
			},

			mouseleave: function() {
				$('#editais-navigation').removeClass('open');
			}
		});
	} else {
		// fix the menu navbar to the end of the screen
		$('#site-navigation').css({ 'bottom': $(window).height() });

		var floatingMenuPosition = $(window).height() - $('body #page .site-inner .site-header nav#site-navigation').height() - ( $('body #page .site-inner .site-header nav#editais-navigation .container .menu').height() );
		$('body #page .site-inner .site-header nav#editais-navigation .container').css({ 'margin-top': -floatingMenuPosition });

		// mobile editoriais menu close button
		$('#editais-navigation .container .close-btn').bind('click', function() {
			$(this).parent().parent().removeClass('open');
		});

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