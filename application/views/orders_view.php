<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Macdonald Admin Panel</title>

<?php include 'header.php';?>


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
						<div class="navbar"><div class="navbar-inner"><h6>Hi, <?php echo $this->session->userdata('username');?> !</h6></div></div>
			            
			        </div>

				    <!-- Main navigation -->
			        <ul class="navigation widget">
			            <li ><a href="<?php echo base_url();?>foodmenu" title=""><i class="icon-list"></i>Food Menu</a></li>
			            <li><a href="<?php echo base_url();?>newfood" title=""><i class="icon-plus-sign"></i>Add New Food</a></li>
			            <li class="active" ><a href="<?php echo base_url();?>orders" title=""><i class="icon-asterisk"></i>Orders<strong>3</strong></a></li>
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
                                    <th>Ordered By </th>
                                    <th>Contact</th>
                                    <th>Items</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            foreach ($orderDetails as $row) 
						  	{
						  		echo '<tr>';
	                                echo '<td>'; 	echo $row->ordered_by ;		echo '</td>';
	                                echo '<td>'; 	echo $row->contact; 		echo '</td>';
	                                echo '<td>'; 	echo $row->items; 			echo '</td>';
	                                echo '<td>'; 	echo $row->time; 			echo '</td>';
	                                echo '<td>'; 	echo $row->status; 			echo '</td>';
	                                echo '<td>';
	                                        echo '<ul class="table-controls">
	                                            <li><a href="#" class="tip" title="Delivered"><i class="fam-tick"></i></a> </li>
	                                            <li><a href="#" class="tip" title="Remove order"><i class="fam-cross"></i></a> </li>
	                                        </ul>';
	                                echo  '</td>';
                                echo '</tr>';
						  		
						  	}
						  	?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /default datatable -->
                
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