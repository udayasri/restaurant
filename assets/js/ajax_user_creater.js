
$('#user_create').live('click',function()
{
	var form_data = {
	    			firstname: $('#firstname').val(),
					lastname: $('#lastname').val(),
					username : $('#username').val(),
					password : $('#password').val(),
					email : $('#email').val(),
					contactnumber : $('#contactnumber').val(),
					creditcardnum : $('#creditcardnum').val(),
					csv : $('#csv').val(),
					
	                Rest2013_mac : $("input[name=Rest2013_mac]").val()//this is the hide token. this should be included to send the post data to the sysytem
           		};
		
	$.ajax({
			type: "POST",
			url: baseurl+"userregister/registerUser", // this will pass the post data to the controller ->administrator, login function
			dataType: "json",
			data : form_data,
			cache:false,
			success: 
          		function(data){
					console.log(data);
					if(data.validation_result == "passed" ){
						
						//alert(' You are successfully log in .. ' );
						//	$().toastmessage('showSuccessToast', "You are successfully log in .. ");
								
						window.location.href = baseurl+"home"; //this will load the administrator main panel after user log in
			 		}
					
					else if( data.registration == "falied" ){
						//$().toastmessage('showErrorToast', 'You are not a registered user!');
						alert('please enter a correct user name & password');
						}
						
					else{
						
						if(data.username){
							alert(data.username);
						}
						
						if(data.password){
							alert(data.password);
							
						}
						if(data.lastname){
							alert(data.lastname);
							
						}
						if(data.firstname){
							alert(data.firstname);
							
						}
						if(data.email){
							alert(data.email);
							
						}
						if(data.contactnumber){
							alert(data.contactnumber);
							
						}
						if(data.creditcardnum){
							alert(data.creditcardnum);
							
						}
						if(data.csv){
							alert(data.csv);
							
						}
						
					}
				}
						
			});
	
	return false;	
});

