(function( $ ) { 
    $(document).ready(function () {
        
        /*-------SLIDE SINGLE ROW --------*/
        console.log("loaded12");
        if ($('.carousel-one').length > 0) {
        function initCarousel() {
                if ($("#visible").css("display") == "block") {
                    //select all elements with carousel-item (each slide has carousel-item class)
                  $(".carousel-one .carousel-item").each(function () {
                      //so it doesn't append extra stuff on window resize
                      $(this).children(".col-md-3:not(:first)").remove();
                      //get the next sibling of the current carousel item
                      //selects all siblings with a class of carousel-item 
                    let i = $(this).next();
                      //if no siblings use the first element as next
                     if (i.length === 0) {
                      i = $(this).siblings(":first");
                    }
                      //ensures that there's content from the next slide right at the beginning.
                      //copies the first child into carousel-item div (the first html child e.g. img or div container)
                      i.children(":first-child").clone().appendTo($(this));
                      //adds slides that follow the copied slide for a smooth transition between slides
                      if(window.innerWidth > 1100) {
                          console.log("more");
                          for (let n = 0; n < 3; n++) {
                          i = i.next();
                          if (i.length === 0) {
                            i = $(this).siblings(":first");
                          }
                          i.children(":first-child").clone().appendTo($(this));
                        }
                      } else {
                          console.log("less");
                      }
    
                      });
                }
        }
    
              function updateAriaHidden() {
                    $('.carousel .carousel-item').each(function () {
                      if ($(this).hasClass('active')) {
                        // Remove aria-hidden attribute from the active item
                        $(this).attr('aria-hidden', 'false');
                          $(this).find('a, button').removeAttr('tabindex');
                      } else {
                        // Add aria-hidden attribute to other items
                        $(this).attr('aria-hidden', 'true');
                        $(this).find('a, button').attr('tabindex', '-1');
                      }
                    });
              }
                
            // Initialize the aria-hidden attributes on page load
            updateAriaHidden();
    
              // Handle the slide event (triggered after slide transition)
              $('.carousel').on('slid.bs.carousel', function (e) {
                // Update the aria-hidden attributes when the active class changes
                updateAriaHidden();
              });
            
                $(window).on({
                    resize: initCarousel,
                    load: initCarousel
              });
        }
        
        /*----------Slide 2 rows -------*/
        if ($('.carousel-rows').length > 0) {
            console.log("js for 2 rows");
            /*// Select all elements with the class "col-multi-rows"
              var $colMultiRows = $('.col-multi-rows');
    
              // Set the number of items to group
              var itemsPerGroup = 7;
    
              // Loop through the "col-multi-rows" elements and group them into carousel items
              for (var i = 0; i < $colMultiRows.length; i += itemsPerGroup) {
                // Create a new "carousel-item" container
                var $carouselItem = $('<div class="carousel-item"></div>');
    
                // Append elements to the new "carousel-item"
                for (var j = 0; j < itemsPerGroup && i + j < $colMultiRows.length; j++) {
                  $carouselItem.append($colMultiRows.eq(i + j).clone());
                }
    
                // Append the new "carousel-item" to the desired container
                $('.col-multi-rows:not(.carousel-item .col-multi-rows)').remove();
                $('.carousel-rows').append($carouselItem);
                 $('.carousel .carousel-item:first').addClass("active");
              }*/
            function updateAriaHidden() {
                    $('.carousel .carousel-item').each(function () {
                      if ($(this).hasClass('active')) {
                        // Remove aria-hidden attribute from the active item
                        $(this).attr('aria-hidden', 'false');
                          $(this).find('a, button').removeAttr('tabindex');
                      } else {
                        // Add aria-hidden attribute to other items
                        $(this).attr('aria-hidden', 'true');
                        $(this).find('a, button').attr('tabindex', '-1');
                      }
                    });
              }
                
            // Initialize the aria-hidden attributes on page load
            updateAriaHidden();
    
              // Handle the slide event (triggered after slide transition)
              $('.carousel').on('slid.bs.carousel', function (e) {
                // Update the aria-hidden attributes when the active class changes
                updateAriaHidden();
              });
        }
        //get the current height 
        function setHeight() {
            var elementHeight = $(".welcome-section.slide").height();
            $(".welcome-section.slide").height(elementHeight);
        }
        $(window).on({
                    resize: setHeight,
                    load: setHeight
              });
    });
        }) ( jQuery );
    
    /* else {
                    // If the window is less than 920px, remove all cards except the first card
                    $(".carousel-one .carousel-item").each(function () {
                        console.log("less");
                    // Select all children with the class "card" except the first one
                    $(this).children(".card:not(:first)").remove();
                });
            }*/
    
    //will run only once on resize
            // Add an event listener to run the function when the window is resized
            /*window.addEventListener("resize", function () {
                  // Check if the window width is less than 920px before running the function
                  if (window.innerWidth < 920  ) {
                    initCarousel();
                  }
            });*/
     /*$(window).on({
        resize: initCarousel,
        load: initCarousel
      });*/