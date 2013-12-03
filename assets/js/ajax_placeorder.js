
$('#place_order').live('click',function()
{
	var form_data = {
	    			
	                Rest2013_mac : $("input[name=Rest2013_mac]").val()
           		};
		
	$.ajax({
			type: "POST",
			url: baseurl+"shoppingcart/placeorder", 
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
						//$().toastmessage('showErrorToast', 'You are not a registered user!');
						alert('please enter a correct user name & password');
						}
						
					else{
						
						//if the user name is wrong this will alert the error message
						if(data.admin_username){
						//$().toastmessage('showWarningToast', data.admin_username);
							alert(data.admin_username);
						}
						
						//if the password is wrong this will alert the error message
						if(data.admin_password){
							//$().toastmessage('showWarningToast', data.admin_password);
							alert(data.admin_password);
							
						}
					}
				}
						
			});
	
	return false;	
});

