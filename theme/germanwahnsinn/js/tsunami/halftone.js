$(function() {

    $('.teaser-image--first').each(function(i, el){
        var $el = $(el),
            canvas,
            copy,
            image;

        var init = function () {
            $canvas = $el.next('.halftone');
            canvas = $canvas.get(0);

            filter = new tsunami.filters.ColorHalftoneFilter();

            image = el;
            image.crossOrigin = 'anonymous';
            image.onload = applyFilter;
            image.src = $el.attr('src');
        };

        var applyFilter = function() {
            canvas.width = image.width * 1.5;
            canvas.height = image.height * 1.5;

            var context = canvas.getContext("2d");
            context.drawImage(image, 0, 0, canvas.width, canvas.height);

            filter.pixelsPerPoint = 4;
            filter.applyFilter(context);
            filter.grayscale(context);

        };

        init();
    });
});