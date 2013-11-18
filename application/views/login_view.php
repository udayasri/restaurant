<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title>Macdonald Admin Panel</title>
<link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="<?php echo base_url(); ?>assets/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 9]><link href="<?php echo base_url(); ?>assets/css/ie9.css" rel="stylesheet" type="text/css" /><![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/jquery.uniform.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/files/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/files/login.js"></script>

<!-- javascripts for inline form validation -->
<script src="<?php echo base_url();?>assets/js/jquery.validationEngine.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validationEngine-en.js"></script>
	
<!-- javascripts for login form validation-->
<script src="<?php echo base_url();?>assets/js/ajax_admin_login.js"></script>

<script>
	jQuery(document).ready(function()
	{
		// binds form submission and fields to the validation engine
		jQuery("#login_form").validationEngine();
		
	});
	
	var baseurl =  "<?php echo base_url() ?>";
	
</script>
</head>

<body class="no-background">

	<!-- Fixed top -->
	<div id="top">
		<div class="fixed">
			<a href="index.html" title="" class="logo"><!-- <img src="img/logo.png" alt="" /> -->
				<span style="color: #fff">Macdonald Administration Panel</span> 
			</a>
			
		</div>
	</div>
	<!-- /fixed top -->


    <!-- Login block -->
    <div class="login">
        <div class="navbar">
            <div class="navbar-inner">
                <h6><i class="icon-user"></i>Login page</h6>
            </div>
        </div>
        <div class="well">
            <!-- <form action="foodmenu" class="row-fluid"> -->
            <?php $attributes = array('class' => 'row-fluid', 'id' => 'login_form');?>
			<?php echo form_open('login/login_validate',$attributes);?>
                <div class="control-group">
                    <label class="control-label">Username</label>
                    <div class="controls"><input class="span12 validate[required]" type="text" name="regular" placeholder="username" id="username" /></div>
                </div>
                
                <div class="control-group">
                    <label class="control-label">Password:</label>
                    <div class="controls"><input class="span12 validate[required]" type="password" name="pass" placeholder="password" id="password" /></div>
                </div>

                <div class="control-group">
                    <div class="controls"><label class="checkbox inline"><input type="checkbox" name="checkbox1" class="styled" value="" checked="checked">Remember me</label></div>
                </div>

                <div class="login-btn"><input type="submit" value="Log me in" class="btn btn-danger btn-block" id="login_submit" name="login_submit"/></div>

            </form>
        </div>
    </div>
    <!-- /login block -->


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