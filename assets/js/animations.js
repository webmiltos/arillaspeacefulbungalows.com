// jQuery(document).ready(function () {
//     jQuery('.scroll-div').click(function () {
//         var scrollId = jQuery(this).data('scrollid');
//         if (!scrollId)
//             return false;
//         var scrollpos = jQuery('#' + scrollId).offset().top;
//         var headerHeight = jQuery('.site-header').outerHeight();
//         scrollpos = scrollpos - (headerHeight + 0);
//         jQuery('html,body').animate({
//             scrollTop: (scrollpos)
//         }, 1000, function () { });
//     })
// });




// HELPER FUNCTIONS TO CHECK ELEMENT VISIBILITY
function isElementPartiallyInViewport(el) {
    //special bonus for those using jQuery
    if (typeof jQuery !== 'undefined' && el instanceof jQuery) el = el[0];

    var rect = el.getBoundingClientRect();
    // DOMRect { x: 8, y: 8, width: 100, height: 100, top: 8, right: 108, bottom: 108, left: 8 }
    var windowHeight = (window.innerHeight || document.documentElement.clientHeight);
    var windowWidth = (window.innerWidth || document.documentElement.clientWidth);

    // http://stackoverflow.com/questions/325933/determine-whether-two-date-ranges-overlap
    var vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
    var horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

    return (vertInView && horInView);
}


// Detect request animation frame
var scroll = window.requestAnimationFrame ||
    // IE Fallback
    function (callback) { window.setTimeout(callback, 1000 / 60) };

var elementsToShow = document.querySelectorAll('.show-on-scroll');

function loop() {
    var scrollFromTop = window.pageYOffset || document.documentElement.scrollTop;
    var i;

    if (elementsToShow.length) {
        for (i = 0; i < elementsToShow.length; i++) {
            if (isElementPartiallyInViewport(elementsToShow[i])) {
                elementsToShow[i].classList.remove('slide-right');
                elementsToShow[i].classList.remove('slide-up');
                elementsToShow[i].classList.remove('slide-down');
                elementsToShow[i].classList.remove('slide-left');
            }
        }
    }
    if (scrollFromTop >= 150) {
        jQuery(".custom-header").addClass("scrolled");
        jQuery(".mob-header").addClass("scrolled");
    }
    else {
        jQuery(".custom-header").removeClass("scrolled");
        jQuery(".mob-header").removeClass("scrolled");
    }
    scroll(loop);
}

// Call the loop for the first time
loop();




// anchor link click
jQuery('a[href*=\\#]').on('click', function (event) {
    if (jQuery(this.hash).length) {
        smoothScrollingTo(this.hash);
        event.preventDefault();
    }
});

// anchor on url
if (window.location.hash) {
    smoothScrollingTo(window.location.hash);
    history.replaceState(null, null, ' '); //remove hash from window location after scrolling to it
}

function smoothScrollingTo(target) {

    var targetElement = jQuery(target); // find the target element

    if (!targetElement.length) return; // return if no data-target found

    jQuery('html,body').animate({
        scrollTop: (targetElement.offset().top - 150)
    }, 1500);

}


// Header Animations
jQuery(document).ready(function () {
    jQuery('.header-logos-wrapper').delay(100).queue(function (next) {
        jQuery(this).addClass('active');
        next();
    });

    jQuery('.request-button').delay(100).queue(function (next) {
        jQuery(this).addClass('active');
        next();
    });
});


jQuery(document).ready(function () {
    jQuery('.header-link').hover(
        function () {
            jQuery('.product-item').removeClass('active');
            jQuery(this).closest('.product-item').addClass('active');
        },
    );
});



// cf7 success message
jQuery(document).ready(function () {

    function isElementInViewport(el) {

        // Special bonus for those using jQuery
        if (typeof jQuery === "function" && el instanceof jQuery) {
            el = el[0];
        }

        var rect = el.getBoundingClientRect();

        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
            rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
        );
    }

    jQuery('body').on('wpcf7submit', '.wpcf7-form', function (event) {
        jQuery('.wpcf7-response-output').removeClass('success-message');

        var headerHeight = jQuery('.site-header').height() ? jQuery('.site-header').height() : 180;

        if (!isElementInViewport(jQuery('.wpcf7-response-output'))) {
            jQuery('html, body').animate({
                scrollTop: jQuery('.wpcf7-response-output').offset().top - headerHeight
            }, 'slow');
        }

        if (event.detail.status == 'mail_sent') {
            jQuery('.wpcf7-response-output').addClass('success-message');
        }

    });

});











// Register ScrollTrigger plugin
gsap.registerPlugin(ScrollTrigger);

// Check if the window width is greater than or equal to 1200px (desktop)
if (window.innerWidth >= 1200) {
    // Select the .gsap-item element
    const gsapImage = document.querySelector('.gsap-item');

    // Create the animation with GSAP
    gsap.to(gsapImage, {
        y: 200, // Move the element down by 150px
        scrollTrigger: {
            trigger: gsapImage, // Use the .gsap-item as the trigger
            start: 'top center', // Animation starts when the top of the element reaches the top of the viewport
            end: 'bottom top', // Animation ends when the bottom of the element reaches the bottom of the viewport
            scrub: true, // Smooth scrolling animation tied to the scroll position
            markers: false // Activate the markers to visualize the start and end points
        }
    });
}




