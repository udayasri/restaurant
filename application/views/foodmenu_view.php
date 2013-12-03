<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Macdonald Admin Panel</title>

<?php include 'header.php';?>
<style type="text/css">

#dialog
{
	display: none;
	width: 300px; 
}
#editfood_info
{
	display: none;
	/*width: 300px;*/ 
}
#deletefood_info
{
	display: none;
}
.no-close .ui-dialog-titlebar-close {
  display: none;
}
.select2-container 
{
	display: block;
}
.uploader
{
	display:block;
}
</style>


<!-- <script>
	// -- This function will pop up the edituser dialogbox & pass data to the model using ajax 
	$("#edit_food").live("click",function()
	{
		
		//This will get the values of the user_name & the user_type when user click the edit icon using js.
		$("#data-table tbody").on( "click", "td", function()
		{
			//var firstCellText = $(this).closest('tr').find('td:eq(0)').text();
			var secondCellText = $(this).closest('tr').find('td:eq(1)').text();
			var thirdCellText = $(this).closest('tr').find('td:eq(2)').text();
			var fourthCellText = $(this).closest('tr').find('td:eq(3)').text();
			
			$("#food_name").val(secondCellText);
			$("#food_price").val(thirdCellText);
			$("#food_category option:contains(" + fourthCellText + ")").attr('selected', 'selected'); //set the combo box selected value.
			 
		} );
		
		//pop up the edituser jquery dialog box	
		$( "#editfood_info" ).dialog
		( {
			resizable: false,
		    modal: true,
		    title:"Edit the Food",
		    width:600,
			buttons: 
					[
					    {
					      text: "Save " ,
					      click: function() 
					      {
						      var user_name = $("#user_name_edit").val();
					  		  var account_type = $("#i_account_type_edit").val();
	
					  		  if( user_name == '' )
					  		  {
						  		  
					  			$("#insert_user_edit").css("display" , "block");
						  	   }
					  		  else
					  		  {
		
						  		  $.ajax({
							             type:"post",
							             url: "vfvdfv",
							             data: "user_name=" + user_name + "&account_type=" + account_type,
							             success:function(data)
							             {
											location.reload();
							  			 
							             }
							         });
					  		  }
					      	}
					    },
					    {
					    	text: " Cancel",
			  		     	click: function() 
			  		     	{	
			      		     	$( this ).dialog( "close" );
			  		    	}   
		  		 		}
			  		]
			});	
	});
</script> -->

<!-- <script>

var baseurl =  "<?php echo base_url() ?>";

	$("#delete_food").live( "click", function()
	{
		//This will get the values of the user_name & the user_type when user click the edit icon using js.
		$("#data-table tbody").delegate("tr", "click", function() 
		{
			var fifthCellText = $(this).closest('tr').find('td:eq(4)').text();

		
	
		//pop up the edituser jquery dialog box	
		$("#deletefood_info").dialog
		( {
			resizable: false,
		    modal: true,
		    title:"Delete Food Item",
		    width:600,
			buttons: 
					[
					    {
					      text: "Yes " ,
					      click: function() 
					      {
						      var food_id = $("#food_id").val();
		
						  		  $.ajax({
							             type:"post",
							             url: baseurl+"foodmenu/deleteFood",
							             data: "food_id=" + fifthCellText  ,
							             success:function()
							             {
											location.reload();
							  			 
							             }
							         });
					  		  }
					    },
					    {
					    	text: " No",
			  		     	click: function() 
			  		     	{	
			      		     	$( this ).dialog( "close" );
			  		    	}   
		  		 		}
			  		]
			});	
			
		});
		
	});
</script> -->


</head>


<body>
	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<a href="index.html" title="" class="logo"><!-- <img src="<?php echo base_url();?>assets/img/logo.png" alt="" /> -->
				<span style="color: #fff">Macdonald Administration Panel</span> 
			</a>
			<ul class="top-menu">
				<li><a class="fullview"></a></li>
				<li class="dropdown">
					<a class="user-menu" data-toggle="dropdown"><span>Hi, <?php echo $this->session->userdata('username');?> <b class="caret"></b></span></a>
					<ul class="dropdown-menu">
						<!-- <li><a href="#" title=""><i class="icon-user"></i>Profile</a></li> -->
						<li><a href="<?php echo base_url();?>login/log_out" ><i class="icon-remove"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /fixed top -->

<!-- Content container -->
	<div id="container">

		<!-- Sidebar -->
		<div id="sidebar">

			<div >
		        <!-- <ul class="tabs-nav two-items">
		            <li><a href="#general" title=""><i class="icon-reorder"></i></a></li>
		            <li><a href="#stuff" title=""><i class="icon-cogs"></i></a></li>
		        </ul> -->

		        <div id="general">

			        <!-- Sidebar user -->
			        <div class="sidebar-user widget">
						<div class="navbar"><div class="navbar-inner"><h6>Hi, <?php echo $this->session->userdata('username');?> !</h6>
							<br />
							<h6>Last Logged Time : <?php echo $this->session->userdata('lastloggedTime') ; ?></h6>
						</div></div>
			            
			        </div>

				    <!-- Main navigation -->
			        <ul class="navigation widget">
			            <li class="active"><a href="<?php echo base_url();?>foodmenu" title=""><i class="icon-list"></i>Food Menu</a></li>
			            <li><a href="<?php echo base_url();?>newfood" title=""><i class="icon-plus-sign"></i>Add New Food</a></li>
			            <li><a href="<?php echo base_url();?>orders" title=""><i class="icon-asterisk"></i>Orders<strong><?php echo count($orderDetails); ?></strong></a></li>
			            <li><a href="<?php echo base_url();?>reports" title=""><i class="ico-file"></i>Reports</a></li>
			        </ul>
			        <!-- /main navigation -->

		        </div>
		    </div>
		</div>
		<!-- /sidebar -->
		
	<div id="content">
		<div class="wrapper">
		    <h5> </h5>
		    <br />           
                <!-- Default datatable -->
                <div class="widget">
                	<div class="navbar"><div class="navbar-inner"><h6>Orders Information</h6></div></div>
                    <div class="table-overflow">
                        <table class="table table-striped table-bordered" id="data-table">
                            <thead>
                                <tr>
                                    <th>Food Image </th>
                                    <th>Food Name</th>
                                    <th>Food Price</th>
                                    <th>Food Categoty</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($foodDetails as $row) 
						  	{
						  		echo '<tr>';
	                                echo '<td>'; echo '<img src = "'.base_url().'assets/img/foods/'.$row->food_image.'">';	echo '</td>';
	                                echo '<td>'; echo $row->food_name; 		echo '</td>';
	                                echo '<td>'; echo $row->food_price; 			echo '</td>';
	                                echo '<td>'; echo $row->category_name; 	echo '</td>';
	                                echo '<td>';
	                                        echo '<ul class="table-controls">
	                                            <li><a href="'.base_url().'foodmenu/editfood/'.$row->food_id.'" class="tip" title="Edit Food" id = "#"><i class="fam-pencil"></i></a> </li>
	                                            <li><a href="'.base_url().'foodmenu/deleteFood/'.$row->food_id.'"  class="tip" title="Remove Food" id = "#" ><i class="fam-cross"></i></a> </li>
	                                        </ul>';
	                                echo  '</td>';
                                echo '</tr>';
						  		
						  	}
						  	?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--  datatable -->
                
           </div>  
           </div>   
	</div>

	<!-- Footer -->
	<div id="footer">
		<div class="copyrights">Powered by &copy; <a href="http://zkylark.com">Zkylark</a></div>
		<!-- <ul class="footer-links">
			<li><a href="" title=""><i class="icon-cogs"></i>Contact admin</a></li>
			<li><a href="" title=""><i class="icon-screenshot"></i>Report bug</a></li>
		</ul> -->
	</div>
	<!-- /footer -->
	
	
	<!-- edit food info up content div -->
	 <div id="editfood_info" >
		 <!-- form statrts  -->
		 <form class="form-horizontal" action="#">
			 <fieldset>
				 <div class="widget row-fluid">
				     <div class="well">
						 <div class="control-group">
					             <label class="control-label">Food Name</label>
					             <div class="controls"><input type="text" id="food_name" name="regular" class="span12" /></div>
					     </div>
					     <div class="control-group">
					             <label class="control-label">Food Price</label>
					             <div class="controls"><input type="text" name="regular" class="span12" id="food_price" /></div>
					     </div>
					     <div class="control-group">
	                         <label class="control-label">Food Category</label>
	                         <div class="controls">
	                             <select data-placeholder="Food Category" class="select" tabindex="2" id="food_category">
	                                 <option value="Favourite">Favourite</option> 
	                                 <option value="Breakfast">Breakfast</option> 
	                                 <option value="Deserts">Deserts</option> 
	                                 <option value="Beverages">Beverages</option> 
	                             </select>
	                         </div>             
	                     </div>
	                     <div class="control-group">
	                         <label class="control-label">Food Image </label>
	                         <div class="controls">
	                             <input type="file" class="styled">
	                         </div>
	                     </div> 	                    
	                     <!-- <div class="form-actions">
	                         <button type="submit" class="btn btn-primary">Save</button>
	                     </div> -->	                    
	                 </div>
				 </div>
			 </fieldset>
		 </form>
	 </div>
	
	<div id="deletefood_info">
	  <p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Do you want to delete this food item ? </p>
	</div>

</body>
</html>