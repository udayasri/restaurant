
$('#cust_login').live('click',function()
{
	var form_data = {
	    			cutomername: $('#cutomername').val(),
					custpass: $('#custpass').val(),
	                Rest2013_mac : $("input[name=Rest2013_mac]").val()//this is the hide token. this should be included to send the post data to the sysytem
           		};
		
	$.ajax({
			type: "POST",
			url: baseurl+"userlogin/login_validate", // this will pass the post data to the controller ->administrator, login function
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
						alert('please enter a correct user name & password');
						}
						
					else{
						if(data.cutomername)
						{
							alert( $(data.cutomername).text() );
						}
						if(data.custpass)
						{
							alert( $(data.custpass).text() );
							
						}
					}
				}
						
			});
	
	return false;	
});

