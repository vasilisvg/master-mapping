var targetLinks = document.querySelectorAll("[href^='#']");
var i = 0;
while(i < targetLinks.length) {
	targetLinks[i].onclick = function(e) {
		var trgt = this.getAttribute('href');
		openTarget(trgt);
		e.preventDefault();
	}
	i++;
}

function openTarget(trgt) {
	document.querySelector(trgt).setAttribute('open','');
	var parents = getParents(document.querySelector(trgt), 'details');
	var i = 0;
	while( i < parents.length) {
		parents[i].setAttribute('open','');
		i++;
	}
}


/**
 * Get all of an element's parent elements up the DOM tree
 * @param  {Node}   elem     The element
 * @param  {String} selector Selector to match against [optional]
 * @return {Array}           The parent elements
 */
var getParents = function ( elem, selector ) {

    // Element.matches() polyfill
    if (!Element.prototype.matches) {
        Element.prototype.matches =
            Element.prototype.matchesSelector ||
            Element.prototype.mozMatchesSelector ||
            Element.prototype.msMatchesSelector ||
            Element.prototype.oMatchesSelector ||
            Element.prototype.webkitMatchesSelector ||
            function(s) {
                var matches = (this.document || this.ownerDocument).querySelectorAll(s),
                    i = matches.length;
                while (--i >= 0 && matches.item(i) !== this) {}
                return i > -1;
            };
    }

    // Setup parents array
    var parents = [];

    // Get matching parent elements
    for ( ; elem && elem !== document; elem = elem.parentNode ) {

        // Add matching parents to array
        if ( selector ) {
            if ( elem.matches( selector ) ) {
                parents.push( elem );
            }
        } else {
            parents.push( elem );
        }

    }

    return parents;

};
