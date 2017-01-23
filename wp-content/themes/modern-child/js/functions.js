jQuery(document).ready(function($){
	
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
});