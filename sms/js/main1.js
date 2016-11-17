// JavaScript Document
$(document).ready(function(){
   $('#button').click(function(){
	var Name = $('#name').val();
	var Username  = $('#username').val();
	var Password   = $('#password').val();
	var Mobile  = $('#mobile').val();
	var Email	  = $('#email').val();
	var Address  = $('#address').val();
	var Sex = $('#sex').val();
	var Dob  = $('#dob').val();
	var Hobby = $('#hobby').val();
	var Comments = $('#comments').val();
	
	$('.error').remove();
	
	if(Name ==''){
		
	$('#name').after('<span class="error">Enter  name</span>');
 
	   
	}
	
	if(Username == ''){
		$('#username').after('<span class="error">Enter User name</span>');
	}
	if(Password == ''){
		$('#password').after('<span class="error">Enter Password</span>');

	}
	if(Mobile == ''){
	  $('#mobile').after('<span class="error">Input mobile no</span>');
   }
 if(Email ==''){
	   $('#email').after('<span class="error">Enter email</span>');
   }   
  
   if(Address ==''){
	   $('#address').after('<span class="error">Enter Address</span>');
   }
   if(Sex == ''){
	  	   $('#sex').after('<span class="error">Select gender</span>');
   }
   if(Dob == ''){
	 $('#dob').after('<span class="error">Enter your birthdate</span>');
	 
   }
   if(Hobby == ''){
	  $('#hobby').after('<span class="error">Enter hobby</span>');
	 
   }
   if(Comments == ''){
	  $('#comments').after('<span class="error">Enter Comments</span>');
	 
   }
  	
	
   });
     
});