(function( $ ) { 
    $(document).ready(function() {
        console.log("loaded js new");
        // jQuery to calculate the transition duration based on the tallest image
        var images = $('.portfolio-section .image-wrap img');
        var image_container = $('.portfolio-section .image-wrap');
        const pxPerSec = 150;

        //function to set duration
        const setStyle = (el) => {
            const imageObj = new Image(); 
            imageObj.onload = function() {
                const height = this.naturalHeight;
                console.log(height);
        
                // 300 is the height of the wrapper element
                const distance = height - 300;
                const ms = (distance / pxPerSec) * 1000;
                el.css('transition', `all ${ms}ms ease-in-out`);
            };
        
            imageObj.src = el.attr('src');
        };

        images.each(function() {
            setStyle($(this));
        })
    
        //starting point for tallest image
       /* var tallestImageHeight = 0;
    
        images.each(function() {
            var imageHeight = $(this).height();
            if (imageHeight > tallestImageHeight) {
                tallestImageHeight = imageHeight;
            }
        });
    
        var transitionDuration = tallestImageHeight / 100; // Adjust as needed
        console.log(transitionDuration);*/
    
        // Set the custom property to apply the transition duration
        //$('.image-wrap img').css('transition', 'all ' + transitionDuration + 's ease-in-out');
    
        image_container.on('focus', function() {
            $(this).find('img').css({
                'object-position': 'bottom center'
            });
        });
    
    
    
    });

}) ( jQuery );
