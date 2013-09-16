var DOM = KISSY.DOM,
    Event = KISSY.Event,
    t = DOM.query(".grid3");

Event.delegate(document,'mouseover',".product", function(e){
		var parts = e.currentTarget.className.split(" ");
		var classname = parts[parts.length-1];
		var d = DOM.query(".text-" + classname)[0];
	  if (DOM.hasClass(d, "hidden-text")) {
        DOM.removeClass(d,"hidden-text");
        DOM.addClass(d, "hover");
    } 
    e.stopPropagation();
});

Event.delegate(document,'mouseout',".product", function(e){
		var parts = e.currentTarget.className.split(" ");
		var classname = parts[parts.length-1];
		var d = DOM.query(".text-" + classname)[0];
	  if (!DOM.hasClass(d, "hidden-text")) {
        DOM.addClass(d,"hidden-text");
        DOM.removeClass(d, "hover");
    } 
    e.stopPropagation();
});