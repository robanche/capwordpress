/*!
 * Shell JavaScript Plugins v1.0.4
 */ 
// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  arguments.callee = arguments.callee.caller;  
  if(this.console) console.log( Array.prototype.slice.call(arguments) );
};
// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();)b[a]=b[a]||c})(window.console=window.console||{});


// place any jQuery/helper plugins in here, instead of separate, slower script files.
// Comment Form Validation
jQuery(function() {
	var errorContainer = jQuery("<div class='required'>There was an error submitting the form. Check below to see what happened.</div>").appendTo(".comment-notes").hide();
	var errorLabelContainer = jQuery("<div class='required errorlabels'></div>").appendTo("#commentform").hide();
	jQuery("#commentform").validate({
		rules: {
			author: "required",
			email: {
				required: true,
				email: true
			},
			url: "url",
			comment: "required"
		},
		errorContainer: errorContainer,
		errorLabelContainer: errorLabelContainer,
		ignore: ":hidden"
	});
	jQuery.validator.messages.required = "";
	jQuery.validator.messages.email = "&raquo; " + jQuery.validator.messages.email + "<br />";
	jQuery.validator.messages.url = "&raquo; " + jQuery.validator.messages.url;
});
// Watermark
jQuery(function($){
    $("#s").Watermark("Search here...");
    $("#suffix").Watermark("Suffix","#333");
});

function UseData() {
    $.Watermark.HideAll();
    $.Watermark.ShowAll();
}