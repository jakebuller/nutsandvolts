$(document).ready(function(){
	$("#contact-us").on("submit", function(e){
		if(ValidateForm())
			return true;
		else		
			return false;
	});
});

function ValidateForm()
{
	var name = $("#name").val();
	var email = $("#email").val();
	var subject = $("#subject").val();
	var message = $("#message").val();
	var email_check = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i;
	var valid = false;	
	
	if(name == "" || name == undefined)
		alert("You must enter a name");
	else if(email == "" || email == undefined)
		alert("You must enter your email address");		
	else if(!email_check.test(email))
		alert("The email address you entered was invalid, please enter a valid email address");
	else if(subject == "" || subject == undefined)
		alert("You must enter a subject");		
	else if(message == "" || message == undefined)
		alert("You must enter a message");		
	else 
		valid = true;
	
	return valid;		
}