$(document).ready(function() {
    console.log("loaded");
    $(window).on('scroll resize', function() {
        $('.banner span').each(function() {
            if (isElementInViewport(this)) {
                $(this).addClass('in-view');
            } else {
                $(this).removeClass('in-view');
            }
        });
    });

    // Function to check if the element is in the viewport
    function isElementInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= $(window).height() &&
            rect.right <= $(window).width()
        );
    }

    // Trigger the scroll event initially
    $(window).trigger('scroll');
});