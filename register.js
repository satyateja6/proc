$(document).ready(function(){
$("#myform").validate({
	rules:{
	username:{
		required: true
		},
	title:{
		required: true
		},
	company: "required",
	password: {
		required: true,
		minlength: 8,
		alphanumeric: true
	},
	email1: {
		required: true,
		email: true
	},
	email2: {
		required: true,
		email: true,
		equalTo: "#email1"
	},
	phone: {
		required: true,
		phoneUS: true
	}
},
	messages:{
		title: {
		required: "please enter a valid title"
		},
		company: {
		required:"Please enter your company name"
		},
		email1: "Please enter a valid email",
		email2: {
		email: "Please enter a valid email",
		equalTo: "Emails do not match"
		},
		phone: {
		required: "Please enter a phone number",
		phoneUS: "Please enter a valid phone number"
		},
		password:{
		required: "Please provide a password",
		minlength: "Password must be atleast 8 characters long"
	        },
		username:{
		required: "Please enter your full name"
		}
	},

});
$.validator.addMethod( "alphanumeric", function( value, element ) {
	var reg = /^[a-zA-Z0-9]{8,}$/;
	return this.optional( element ) || !reg.test( value );
}, "Password must be alphanumeric and have atleast one special character");

jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Alphabets only please");

});
