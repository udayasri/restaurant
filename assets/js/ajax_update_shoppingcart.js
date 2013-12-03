
$('.food_quntitychange').live('keyup',function()
{
	var form = $('#shopping_cart_update');
	var total = 0  ; 
	
	count = $("#count").val();
	for(i=0 ; i < count ; i++ )
	{
		// make the ids using strings 
		qunatity_id = "#food_quntity"+i;
		price_id = "#food_priceamount1"+i;
		updatedprice = "#food_price"+i;
		
		//make hidden input feilds ids
		food_pricetopass = "#food_pricetopass"+i;
		food_quntitytopass = "#food_quntitytopass"+i;
		

		foodquntity = $( qunatity_id ).text();
		foodprice   = $( price_id).val();
		
		foodpricenew = parseInt( foodquntity )*parseInt( foodprice );
		
		foodprice   = $( updatedprice ).text( foodpricenew );
		
		total += foodpricenew ; 
		
		$( "#total" ).text( parseInt(total) );
		
		
		//setting values for teh hidden input feilds
		$( food_pricetopass ).val( foodpricenew );
		$( food_quntitytopass ).val( foodquntity );
		
	}
	
		
	// $.ajax({
			// type: "POST",
			// url: baseurl+"shoppingcart/updatecart", // this will pass the post data to the controller ->administrator, login function
			// dataType: "json",
			// data : form.serialize(),
			// cache:false,
			// success: 
          		// function(data){
					// console.log(data);
					// if(data.validation_result == "passed" ){
// 						
						// //alert(' You are successfully log in .. ' );
						// //	$().toastmessage('showSuccessToast', "You are successfully log in .. ");
// 								
						// window.location.href = baseurl+"home"; //this will load the administrator main panel after user log in
			 		// }
// 					
					// else if( data.registration == "falied" ){
						// alert('please enter a correct user name & password');
						// }
// 						
					// else{
						// if(data.cutomername)
						// {
							// alert(data.cutomername);
						// }
						// if(data.custpass)
						// {
							// alert(data.custpass);
// 							
						// }
					// }
				// }
// 						
			// });
// 	
	// return false;	
});

