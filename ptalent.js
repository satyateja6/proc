$(document).ready(function(){
$("#formname").validate({

	rules:{
	openings:{
		required: true,
		number: true
	},
	
	rate:{
	required: true
	},
	email: {
		required: true,
		email: true
	},
	phone: {
		required: true,
		phoneUS: true
	},
	 level:{
               required: function() {
    return $('[name="level"]:checked').length === 0; 
}
            },
	city1: "required",
	state: "required",
	hlevel: "required",
	category1: "required",
	category2: "required",
	tz: "required",
	time1: "required",
	am: "required",
	title: "required"
},
	messages:{
		email: "Please enter a valid email",
		phone: {
		phoneUS: "Please enter a valid phone number"
		}
	}
});
});
jQuery.extend(jQuery.validator.messages, {
    required: "*Required"
    
    });
