(function($){
$(document).ready(function() {
   $('input#makersite-search').attr('placeholder', 'flying cars...');
   $('#reg-div').hide();
   $("#btn").click(function() {
	   $('#search-div').hide();
	   $('#reg-div').show();
   });
});
	
})(jQuery);

(function($) {
// Custom autocomplete instance.
$.widget("app.autocomplete", $.ui.autocomplete, {
   // Which class get's applied to matched text in the menu items.
   options: {
	   highlightClass: "ui-state-highlight"
   },

   _renderItem: function(ul, item) {
	   // Replace the matched text with a custom span. This
	   // span uses the class found in the "highlightClass" option.
	   var re = new RegExp("(" + this.term + ")", "gi"),
		   cls = this.options.highlightClass,
		   template = "<span class='" + cls + "'>$1<\/span>",
		   label = item.label.replace(re, template),
		   $li = $("<li/>").appendTo(ul);

	   // Create and return the custom menu item content.
	   $("<label>").attr("href", "#")
		   .html(label)
		   .appendTo($li);
	   return $li;
   }
});

$(function() {
   $("input:last").autocomplete({
	   highlightClass: "bold-text",
	   source: function(request, response) {
		   $.ajax({
			   dataType: "json",
			   type: 'GET',
			   url: 'https://dev.makersite.net/api/v1/public/search/' + $("input:last").val(),
			   success: function(data) {

				   response($.map(data, function(item) {
					   return item.name;
				   }));
			   },
			   error: function(data) {
				   $('input.suggest-user').removeClass('ui-autocomplete-loading');
			   }
		   });
	   },
	   // minLength: 3,
	   // open: function() {},
	   // close: function() {},
	   // focus: function(event,ui) {},
	   select: function(event, ui) {
		   $('#search-div').hide();
		   $('#reg-div').show();
	   }
   });
});



window.onload = function() {
	$('.not_loaded').removeClass('not_loaded');
$(document).keypress(function(event) {
if (event.keyCode == 13 && event.target == $('#makersite-search')[0] ) {
	$('#btn').click();
   $('#btn').trigger( "click" );
}
});
};


})(jQuery);
