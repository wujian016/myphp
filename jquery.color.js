;(function($){
	$.fn.extend({
		color:function(value){
			if(value === undefined){
				return this.css("color");
			}
			return this.css("color",value);
		}
	})
})(jQuery)