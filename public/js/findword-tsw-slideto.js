/* Be sure Element is loaded on page before calling any functions
 * findword-tsw-slideto.js v. 1.0.0
 */
(function( $ ) {
	'use strict';
$(document).ready(function () {

    const waitUntilElementExists = (selector, callback) => {
	const el = document.querySelector(selector);
		if (el){
			return callback(el);
		}
	setTimeout(() => waitUntilElementExists(selector, callback), 500);
	}

	var waitUntil = waitUntilElementExists('.btn-finder-prev', (el) => {
	//console.log(el);

    $( "#finderPrev" ).on( 'click', () => {
            //jQuery( "#currEnt" ).slideUp();
            currEnt = $("#currEnt")[0];
            $('html, body').animate({
        scrollTo: currEnt.scrollIntoView({
            behavior: 'smooth', block: 'center'})
    }, 2000);
            //console.log('prev ready');
        });
			
	$( "#finderNext" ).on( 'click', () => {
			//jQuery( "#currEnt" ).slideDown();
            currEnt = $("#currEnt")[0];
		$('html, body').animate({
        scrollTo: currEnt.scrollIntoView({
            behavior: 'smooth', block: 'center' })
    }, 2000);
    
			//console.log('next ready');
			});
    });

});

})( jQuery ); 
