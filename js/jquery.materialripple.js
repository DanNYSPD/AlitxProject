$.fn.materialripple = function(options) {
	var defaults = { rippleClass: 'ripple-wrapper', rippleBlueClass : 'rippleBlue-wrapper'}
	$.extend(defaults, options);
	$(this).append('<span class="'+defaults.rippleClass+'"></span>');
	$(this).bind('click', function(e){
		$(this).find('.'+defaults.rippleClass).removeClass('animated');
		$(this).find('.'+defaults.rippleBlueClass).removeClass('animated');
		var mouseX = e.clientX;
		var mouseY = e.clientY;
		elementWidth = $(this).outerWidth();
		elementHeight = $(this).outerHeight();
		d = Math.max(elementWidth, elementHeight);
		$(this).find('.'+defaults.rippleClass).css({'width': d, 'height': d});
		$(this).find('.'+defaults.rippleBlueClass).css({'width': d, 'height': d});
		var rippleX = e.clientX - $(this).offset().left - d/2;
		var rippleY = e.clientY - $(this).offset().top - d/2;
		$(this).find('.'+defaults.rippleClass).css('top', rippleY+'px').css('left', rippleX+'px').addClass('animated');
		$(this).find('.'+defaults.rippleBlueClass).css('top', rippleY+'px').css('left', rippleX+'px').addClass('animated');
	});
}