jQuery(document).ready(function($){
    $(document.body).removeClass('no-js').addClass('js');

    // Utilities
    initAnchorScroll();

});

function isMobile() {
    return window.matchMedia('(max-width:767px)').matches;
}



/**
 * Smooth anchor scrolling
 */
function initAnchorScroll() {
    $('a[href*="#"]:not([data-toggle])').click(function(event) {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name="'+this.hash.slice(1)+'"]');
            if (target.length && !target.parents('.woocommerce-tabs').length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        }
    });
}