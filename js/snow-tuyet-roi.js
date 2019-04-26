(function($) {
    $.fn.snow = function(options) {
        var $flake = $('<span id="flake" />').css({
                'position': 'absolute',
                'top': '-50px',
                'z-index': '9999'
            }).html('&#10052;'),
            documentHeight = $(document).height(),
            documentWidth = $(document).width(),
            defaults = {
                minSize: 10,
                maxSize: 20,
                newOn: 500,
                flakeColor: "#FFFFFF"
            },
            options = $.extend({}, defaults, options);
        var interval = setInterval(function() {
            var startPositionLeft = Math.random() * documentWidth - 100,
                startOpacity = 0.5 + Math.random(),
                sizeFlake = options.minSize + Math.random() * options.maxSize,
                endPositionTop = documentHeight - 40,
                endPositionLeft = startPositionLeft - 100 + Math.random() * 200,
                durationFall = documentHeight * 10 + Math.random() * 5000;
				var heightcheck = $(document).height()
				if(endPositionTop > heightcheck){
					endPositionTop = 0;
					documentHeight = heightcheck;
				}
				//alert(documentHeight);
            $flake.clone().appendTo('html').css({
                left: startPositionLeft,
                opacity: startOpacity,
                'font-size': sizeFlake,
                color: options.flakeColor
            }).animate({
                top: endPositionTop,
                left: endPositionLeft,
                opacity: 0.2
            }, durationFall, 'linear', function() {
                $(this).remove()
            });
        }, options.newOn);
    };
})(jQuery);