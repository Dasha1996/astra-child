(function( $ ) { 
    $(document).ready(function() {
        console.log("loaded js new");
        // jQuery to calculate the transition duration based on the tallest image
        var images = $('.portfolio-section .image-wrap .portfolio-image');
        var image_container = $('.portfolio-section .image-wrap');
        const pxPerSec = 150;

        //function to set duration
        const setStyle = (el) => {
            //built-in js object for handlign images in the browser
            const imageObj = new Image(); 
            //onload is triggered when the image finished loading
            imageObj.onload = function() {
                //naturalHeight is a property that retrieves actual imahe height
                const height = this.naturalHeight;
                console.log(height);
        
                // 300 is the height of the wrapper element
                //how much the image needs to be scrolled
                const distance = height - 300;
                const ms = (distance / pxPerSec) * 1000;
                el.css('transition', `all ${ms}ms linear`);
            };
            /*This line sets the src attribute of the Image object (imageObj) to the source attribute (src) of the jQuery element (el). 
            This triggers the loading of the image, and when the image is fully loaded, the onload event handler is executed.*/
        
            imageObj.src = el.attr('src');
        };

        images.each(function() {
            setStyle($(this));
        })
    
        image_container.on('focusin', function() {
            $(this).find('portfolio-image').css({
                'object-position': 'bottom center'
            });
        });

        image_container.on('focusout', function() {
            console.log('focus out');
            $(this).find('portfolio-image').css({
                'object-position': 'top center'
            });
        });
    
    
    
    });

}) ( jQuery );
