// JavaScript Document for administrator login

//after the user click admin login button
$('#login_submit').live('click',function()
{
	var form_data = {
	    			username: $('#username').val(),
					password: $('#password').val(),
	                Rest2013_mac : $("input[name=Rest2013_mac]").val()//this is the hide token. this should be included to send the post data to the sysytem
           		};
		
	$.ajax({
			type: "POST",
			url: baseurl+"login/login_validate", // this will pass the post data to the controller ->administrator, login function
			dataType: "json",
			data : form_data,
			cache:false,
			success: 
          		function(data){
					console.log(data);
					if(data.validation_result == "passed" ){
						
						//alert(' You are successfully log in .. ' );
						//	$().toastmessage('showSuccessToast', "You are successfully log in .. ");
								
						window.location.href = baseurl+"foodmenu"; //this will load the administrator main panel after user log in
			 		}
					
					else if( data.registration == "falied" ){
						alert('please enter a correct user name & password');
						}
						
					else{
						
						//if the user name is wrong this will alert the error message
						if(data.username){
							alert( $(data.username).text() );
						}
						
						//if the password is wrong this will alert the error message
						if(data.password){
							
							alert( $(data.password).text() );
							
						}
					}
				}
						
			});
	
	return false;	
});

