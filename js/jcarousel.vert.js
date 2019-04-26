(function($) {
    $(function() {
        var jcarousel = $('.box_manf .jcarousel');
		$('.box_manf .jcarousel').jcarousel({
			horizontal: true
		});
        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var width = jcarousel.innerWidth();
                width = 110;
                jcarousel.jcarousel('items').css('width', width + 'px');
            })
            .jcarousel({
                //wrap: 'circular'
            });
        $('.box_manf .jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });
        $('.box_manf .jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });
        $('.box_manf .jcarousel-pagination')
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
            perPage: 3,
            item: function(page) {
                return '<a href="#' + page + '">' + page + '</a>';
            }
        });
    });
})(jQuery);