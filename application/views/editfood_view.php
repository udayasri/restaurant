<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Macdonald Admin Panel</title>

<?php include 'header.php';?>

<script type="text/javascript" src="<?php echo base_url()?>assets/js/live_thumbnails.js"></script>

<style>
	
	.del{ display:none; position:relative; z-index:200; float:left}
</style>
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

			<div>
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
			            <li ><a href="<?php echo base_url()?>foodmenu" title=""><i class="icon-list"></i>Food Menu</a></li>
			            <li><a href="<?php echo base_url();?>newfood" title=""><i class="icon-plus-sign"></i>Add New Food</a></li>
			            <li><a href="<?php echo base_url();?>orders" title=""><i class="icon-asterisk"></i>Orders<strong>3</strong></a></li>
			            <li><a href="<?php echo base_url();?>orders" title=""><i class="ico-file"></i>Reports</a></li>
			        </ul>
			        <!-- /main navigation -->

		        </div>
		    </div>
		</div>
		<!-- /sidebar -->
		
		<div id="content">
			<!-- Content wrapper -->
		    <div class="wrapper">
		    	<h5> </h5>
		    	<br />
		    	
				<!-- form statrts  -->
	 			<!-- <form class="form-horizontal" action="#"> -->
	 				<?php echo form_open_multipart(base_url().'editfood/update_foodinfo','id="food_info" name="food_info" class="form-horizontal"');?>
	 				<?php echo validation_errors(); ?>
	 				<fieldset>
						<div class="widget row-fluid">
							<div class="navbar">
						        <div class="navbar-inner">
						            <h6>Edit the Food </h6>
						        </div>
						    </div>
						    <div class="well">
								<div class="control-group">
							            <label class="control-label">Food Name</label>
							            <div class="controls"><input type="text" name="food_name" class="span12" id="food_name" value="<?php echo $foodDetails[0]->food_name ; ?>"/></div>
							    </div>
							    <div class="control-group">
							            <label class="control-label">Food Price</label>
							            <div class="controls"><input type="text" name="food_price" class="span12" id="food_price" value="<?php echo $foodDetails[0]->food_price ; ?>" /></div>
							    </div>
							    <div class="control-group">
		                            <label class="control-label">Food Category</label>
		                            <div class="controls">
		                                <select data-placeholder="selct the cateogry" class="select" tabindex="2" id="food_category" name="food_category">
		                                    <option value="1" <?php if ( $foodDetails[0]->food_category == "1" ) echo "selected='selected'";?> >Favourite</option> 
		                                    <option value="2" <?php if ( $foodDetails[0]->food_category == "2" ) echo "selected='selected'";?> >Breakfast</option> 
		                                    <option value="3" <?php if ( $foodDetails[0]->food_category == "3" ) echo "selected='selected'";?> >Deserts</option> 
		                                    <option value="4" <?php if ( $foodDetails[0]->food_category == "4" ) echo "selected='selected'";?> >Beverages</option> 
		                                </select>
		                            </div>             
		                        </div>
		                        <div class="control-group">
	                                <label class="control-label">Food Image </label>
	                                <div class="controls">
	                                    <input type="file" class="styled" onchange="readURL(this);" id="food_img" name="food_img">
	                                </div>
	                                <div class="controls">
	                                <div class="thumb_image_holder"><!--image holder div starts-->
					                    <img id="img_prev" src="#"  style="width:165px; height:122px; background-color: #FBFBFB"/>
					                    <img src="<?php echo base_url()?>assets/img/delete.png" style="float:left; margin-top:9px; margin-right:9px; cursor:pointer" id="x" class="delete_image del"/>
						               </div>
						              </div>
	                            </div>
	                            
	                            <input type="hidden" id="food_id" name="food_id" value="<?php echo $foodDetails[0]->food_id?>">
	                            
	                            <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <a href="<?php echo base_url()?>foodmenu" title=""><button type="button" class="btn">Go Back</button></a> 
                                </div>
		                        
	                        </div>
						</div>
					</fieldset>
	 			</form>
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

</body>
</html>