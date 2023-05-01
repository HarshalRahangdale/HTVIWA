$(document).ready(function() {
    // Add parallax effect to landing section
    $('.parallax:first-of-type').parallax({
        imageSrc: 'landing-image.jpg',
        speed: 0.5
    });

    // Add parallax effect to login section
    $('.parallax:nth-of-type(2)').parallax({
        imageSrc: 'login-image.jpg',
        speed: 0.5
    });
});

(function($) {
    // Parallax function
    $.fn.parallax = function(options) {
        var windowHeight = $(window).height();

        // Set default options
        var defaults = {
            speed: 0.5
        };

        options = $.extend(defaults, options);

        return this.each(function() {
            var $this = $(this);

            // Add background image
            $this.css({
                'background-image': 'url(' + options.imageSrc + ')',
                'background-attachment': 'fixed',
                'background-size': 'cover',
                'background-position': 'center'
            });

            // Scroll event
            $(window).scroll(function() {
                var scrollTop = $(window).scrollTop();
                var yPos = -(scrollTop / options.speed);

                // Adjust background position
                $this.css('background-position', 'center ' + yPos + 'px');
            });
        });
    };
})(jQuery);
