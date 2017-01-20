jQuery(document).ready(function($){
	
	var $wrap = $('[js-ui-search]');
	var $close = $('[js-ui-close]');
	var $input = $('[js-ui-text]');
	
	$close.on('click', function(){
		$wrap.toggleClass('open');
	});
	console.log('vish');
	$input.on('transitionend webkitTransitionEnd oTransitionEnd', function(){
		console.log('triggered end animation');
		if ($wrap.hasClass('open')) {
			$input.focus();
		} else {
			return;
		}
	});
});