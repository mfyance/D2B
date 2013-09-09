$(function() {

    // Set up variables
    var $el, $parentWrap, $otherWrap, 
        $allTitles = $("dt").css({
            padding: 5, // setting the padding here prevents a weird situation, where it would start animating at 0 padding instead of 5
            "cursor": "pointer" // make it seem clickable
        }),
        $allCells = $("dd").css({
            position: "relative",
            top: -1,
            left: 0,
            display: "none" // info cells are just kicked off the page with CSS (for accessibility)
        });
    
   
    // clicking on titles does stuff
    $("#myprofile-options").delegate("dt", "click", function() {
        
        // cache this, as always, is good form
        $el = $(this);
        
        
        // if this is already the active cell, don't do anything
        if (!$el.hasClass("current")) {
        
            $parentWrap = $el.parent().parent();
            $otherWraps = $(".info-col").not($parentWrap);
            
            // remove current cell from selection of all cells
            $allTitles = $("dt").not(this);
            
            // close all info cells
            $allCells.slideUp();
                                 
            // animate current title to larger size            
            $el.animate({               
            }).next().slideDown();
            
            // make the current column the large size
            $parentWrap.animate({
                width: 'auto'
            }).addClass("curCol");
            
            // make other columns the small size
            $otherWraps.animate({
                width: 'auto'
            }).removeClass("curCol");
            
            // make sure the correct column is current
            $allTitles.removeClass("active");
            $el.addClass("active");        
        }
        
    });
 
    
});