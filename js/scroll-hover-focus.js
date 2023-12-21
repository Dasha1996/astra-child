$(document).ready(function() {
    // jQuery to calculate the transition duration based on the tallest image
    var images = $('.portfolio-section .image-wrap img');
    var image_container = $('.portfolio-section .image-wrap');

    //starting point for tallest image
    var tallestImageHeight = 0;

    images.each(function() {
        var imageHeight = $(this).height();
        if (imageHeight > tallestImageHeight) {
            tallestImageHeight = imageHeight;
        }
    });

    var transitionDuration = tallestImageHeight / 100; // Adjust as needed

    // Set the custom property to apply the transition duration
    $('.image-wrap img').css('transition', 'all' + transitionDuration + 's' + 'ease-in-out');

    image_container.on('focus', function() {
        $(this).find('img').css({
            'object-position': 'bottom center'
        });
    });



});