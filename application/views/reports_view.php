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
						<div class="navbar"><div class="navbar-inner"><h6>Hi, <?php echo $this->session->userdata('username');?> !</h6>
							<br />
							<h6>Last Logged Time : <?php echo $this->session->userdata('lastloggedTime') ; ?></h6>
						</div></div>
			            
			        </div>

				    <!-- Main navigation -->
			        <ul class="navigation widget">
			            <li ><a href="<?php echo base_url();?>foodmenu" title=""><i class="icon-list"></i>Food Menu</a></li>
			            <li><a href="<?php echo base_url();?>newfood" title=""><i class="icon-plus-sign"></i>Add New Food</a></li>
			            <li  ><a href="<?php echo base_url();?>orders" title=""><i class="icon-asterisk"></i>Orders<strong><?php echo count($orderDetails); ?></strong></a></li>
			        	<li class="active" ><a href="<?php echo base_url();?>reports" title=""><i class="ico-file"></i>Reports</a></li>
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
               	<!-- Invoice -->
                <div class="widget">
					<div class="navbar">
						<div class="navbar-inner">
							<h6>Monthly Report</h6>
							<!-- <button type="button" class="btn btn-success pull-right">Send</button> -->
							<!-- <button type="button" class="btn btn-danger pull-right">Print</button> -->
						</div>
					</div>

			        <div class="well invoice">

		                <div class="invoice-head">
		                    <a href="index.html" title="invoice" class="invoice-logo"><img src="<?php echo base_url()?>images/1336914409746.png" alt="logo" /></a>
		                    <ul class="pull-right minus-list invoice-data">
		                        <li>Report <strong class="text-info pull-right">#1258</strong></li>
		                        <li>Date <span class="pull-right"><?php echo date("Y-m-d"); ?></span></li>
		                        <!-- <li>Payment due by: <strong class="pull-right text-error">10/06/2012</strong></li> -->
		                    </ul>
		                </div>
		                
		                <div class="row-fluid">
		                    <div class="span6">
		                    	<div class="invoice-from pull-left">
		                        <h5>Macdonalds</h5>
		                        <ul class="plus-list">
		                        	<li>No : 8</li> 
		                        	<li>Persiaran Perdana</li> 
		                        	<li>Kuala Lumpur</li>
		                        	<li>Malayasia</li>
		                        	<li>Mobile Phone: <strong class="text-error">+60 3-6274 1559</strong></li>
		                        	<li>Send To: <a href="#">mac@malayasia.com</a></li>
		                        </ul>
			                    </div>
		                    </div>
		                    
		                    <!-- <div class="span6">
		                    	<div class="invoice-to pull-right">
			                        <h5>Client Company Name</h5>
			                        <ul class="plus-list">
			                        	<li>Client Address Line 2</li>
			                        	<li>Country</li>
			                        	<li>Town</li>
			                        	<li>Region/State</li>
			                        	<li>Zip/Postal Code</li>
			                        	<li>Mobile Phone: <strong class="text-error">+4530422244</strong></li>
			                        	<li>Email: <a href="#">client@company.com</a></li>
			                        </ul>
			                    </div>
		                    </div> -->
			            </div>
		                
		                <table class="table table-striped table-bordered">
		                    <thead>
		                        <tr>
		                            <th>Order Number</th>
		                            <th>Description</th>
		                            <th>Order Date</th>
		                            <th>Total</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                   	<?php 
		                   	
		                   	$totalamount = 0; 
                            foreach ( $reportDetails as $row ) 
						  	{
						  		$order_code = 1000+$row->report_id;
								
						  		echo '<tr>';
	                                echo '<td>'; 	echo $order_code;			echo '</td>';
	                                echo '<td>'; 	echo $row->order_description; 			echo '</td>';
									echo '<td>'; 	echo $row->order_date; 			echo '</td>';
	                                echo '<td>'; 	echo $row->order_total."RM" 		; echo '</td>';
                                echo '</tr>';
						  		
								$totalamount += $row->order_total;
						  	}
						  	?>
		                        <!-- <tr>
		                            <td>Concept</td>
		                            <td>Creating project concept and logic</td>
		                            <td>0</td>
		                            <td><strong>$1,100</strong></td>
		                        </tr>
		                        <tr>
		                            <td>General design</td>
		                            <td>Design prototype</td>
		                            <td>0</td>
		                            <td><strong>$2,000</strong></td>
		                        </tr>
		                        <tr>
		                            <td>Front end development</td>
		                            <td>Coding and connecting front end</td>
		                            <td>0</td>
		                            <td><strong>$1,600</strong></td>
		                        </tr>
		                        <tr>
		                            <td>Database</td>
		                            <td>Creating and connecting database</td>
		                            <td>0</td>
		                            <td><strong>$890</strong></td>
		                        </tr> -->
		                    </tbody>
		                </table>
		                
		                <div class="row-fluid">
		                    <div class="span6">
		                    	<div class="invoice-from pull-left">
			                        <!-- <h5>Payment method: <i class="text-error">Wire transfer</i></h5>
			                        <ul class="plus-list">
			                        	<li>Bank account #</li>
			                        	<li>SWIFT code</li>
			                        	<li>IBAN</li>
			                        	<li>Billing address</li>
			                        	<li>Name</li>
			                        </ul> -->
			                    </div>
		                    </div>
		                
		                    <div class="span6">
		                    	<div class="total pull-right">
			                        <span>Total Amount</span>
			                        <strong class="text-error"><?php echo $totalamount; ?>RM</strong>
		                        </div>
		                    </div>
		                </div>
		                
		                <div class="invoice-footer">
		                    <span class="footer-note">© 2013 Macdonals Corporation. All rights reserved.</span>
		                    <!-- <ul class="cards">
		                        <li class="discover"></li>
		                         <li class="visa"></li>
		                         <li class="mc"></li>
		                         <li class="pp"></li>
		                         <li class="amex"></li>
		                    </ul> -->
		                </div>

			        </div>

                </div>
                <!-- /invoice -->
                
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