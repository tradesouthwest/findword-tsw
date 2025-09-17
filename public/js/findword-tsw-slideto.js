/* Be sure Element is loaded on page before calling any functions
 * findword-tsw-slideto.js v. 1.0.0 @since Package findword-tsw 1.1.2
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
            //$( "#currEnt" ).slideUp();
            var currEnt = $("#currEnt")[0];
            jQuery('html, body').scroll({
        scrollTo: currEnt.scrollIntoView({
            behavior: 'smooth', block: 'center'})
    });
            //console.log('prev ready');
        });
			
	$( "#finderNext" ).on( 'click', () => {
			//$( "#currEnt" ).slideDown();
            var currEnt = $("#currEnt")[0];
		    jQuery('html, body').scroll({
        scrollTo: currEnt.scrollIntoView({
            behavior: 'smooth', block: 'center' })
    });
    
			//console.log('next ready');
			});
    });

});

})( jQuery ); 
