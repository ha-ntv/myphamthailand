(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');
		$('.jcarousel').jcarousel({
			horizontal: true
		});
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();
                width = 98;
                jcarousel.jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                //wrap: 'circular'
            });
        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });
        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });
        $('.jcarousel-pagination')
        .on('jcarouselpagination:active', 'a', function() {
            $(this).addClass('active');
        })
        .on('jcarouselpagination:inactive', 'a', function() {
            $(this).removeClass('active');
        })
        .on('click', function(e) {
            e.preventDefault();
        })
        .jcarouselPagination({
            perPage: 2,
            item: function(page) {
                return '<a href="#' + page + '">' + page + '</a>';
            }
        });
    });
})(jQuery);