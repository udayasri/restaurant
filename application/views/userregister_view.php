<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> 
<meta name="title" content="Menu :: McDonalds.ca" />
<meta name="description" content="Menu :: McDonalds.ca" />
<meta name="keywords" content="" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META name="_market" content="" />
<META name="_language" content="" />
<META name="_breadcrumb" content="/ca/en/menu" />

<?php include 'frontend_header.php'?>
<!-- javascripts for login form validation-->
<script src="<?php echo base_url();?>assets/js/ajax_user_creater.js"></script>

<script>
	var baseurl =  "<?php echo base_url() ?>";
</script>

<title>User Register :: McDonalds</title>

     

</head>  

 
  
<body class="page genericpage " style="background:#000000; background-image: url('images/bg.jpg'); background-repeat: no-repeat; background-position:center top;">
    <div id="document_wrapper">
        
        <a name="top"></a>
        
        
 
     
<div id="top_wrapper"> 
    <div id="top_content">
        <div id="logo">
            <div class="logo mlogo parbase">
		    <a href="<?php echo base_url()?>home">
		<img src="images/1336914409746.png" width="113" height="98" alt="I'm lovin it."/>
		  
		 </a>   
</div>
        </div>
        <div id="main_navigation">
            <div class="mcdonaldsleftnav parbase">
 
     
        <!-- Start of Left Navigation div -->
        <div id="leftnavigation">
    
				<ul>
                    <li id="foodnav_li" class="first">
                        <a href="<?php echo base_url()?>breakfast" id="foodnav_link" class="nav_item firstLink" style="background-image: url('images/breakfast.png');"></a>
					</li>
            
                    <li id="simplenav_li">
                        <a href="<?php echo base_url()?>favourite" id="simplenav_link" class="nav_item" style="background-image: url('images/desert.png');"></a>
					</li>
            
                    <li id="promonav_li">
                        <a href="<?php echo base_url()?>beverages" id="promonav_link" class="nav_item" style="background-image: url('images/beverages.png');"></a>
					</li>
            
                    <li id="noflyout_last_li">
                        <a href="<?php echo base_url()?>desserts" id="noflyout_last_link" class="nav_item" style="background-image: url('images/favourite.png');"></a>
                    
					</li>
            
              
				</ul>
         
    
    </div>
    <div class="clear"></div>
    
<script>
String.prototype.trim = function () {
                return this.replace(/^\s*/, "").replace(/\s*$/, "");
        }  
        
function submitSearch(searchPath,searchReqMsg,searchText,country)
{
    var searchVal = document.search_frm.queryText.value.trim();
    
    if(searchVal=="" || searchVal==searchText)
    {
        alert(searchReqMsg);
        $("#leftnav_search_text").focus();
        //return false;
    }
    else
    {     
       // var formActionn = searchPath+"?queryText="+escape(searchVal)+"&collection="+country;
       var formActionn = searchPath+"?queryText="+escape(_utf8_encode(searchVal))+"&collection="+country;
       window.open(formActionn,"_self");  
        //document.search_frm.queryText.value = escape(searchVal);
        //document.search_frm.submit();   
    }
}


function submitLocator(formAction,locAlertText,locText,country,language)
{
    var primaryCity = document.locator_frm.primaryCity.value.trim();  
    
    if(primaryCity=="" || primaryCity==locText)
    {
        alert(locAlertText);
        $("#leftnav_restaurant_text").focus();
    }
    else
    {
       var postalCode = "";
       
       //alert('country==='+country);
       
       if('usa'==country && !isNaN(primaryCity))
       {
           postalCode = primaryCity;
       }
       
       if('sweden'==country)
       {       
         postalCode = primaryCity;       
       }
       
      
       //alert('postalCode ==='+postalCode);  
       
       
       var formActionn = formAction+"?country="+country+"&method=search&primaryCity="+escape(primaryCity)+"&postalCode="+escape(postalCode)+"&language="+language;
       window.open(formActionn,"_self");  
               
    }
      
} 
function _utf8_encode(string) {
            string = string.replace(/\r\n/g,"\n");
            var utftext = "";
 
            for (var n = 0; n < string.length; n++) {
 
                  var c = string.charCodeAt(n);
 
                  if (c < 128) {
                        utftext += String.fromCharCode(c);
                  }
                  else if((c > 127) && (c < 2048)) {
                        utftext += String.fromCharCode((c >> 6) | 192);
                        utftext += String.fromCharCode((c & 63) | 128);
                  }
                  else {
                        utftext += String.fromCharCode((c >> 12) | 224);
                        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                        utftext += String.fromCharCode((c & 63) | 128);
                  }
 
            }
 
            return utftext;
      } 



</script> </div>

        </div> 
        
             <div id="breadcrumb">
                <div class="mcdonaldsbreadcrumb breadcrumb">
		        	<div class="breadCrumb"> 
						<a href='<?php echo base_url()?>home'>Menu</a>&nbsp;<span class='bd_separator'>/</span>&nbsp;<a href='<?php echo base_url()?>breakfast' class='last'>Breakfast</a>      
		        	</div>      
		       </div>

            </div>
        
        <div id="notification">
       
         
            <div id="search">
               <div class="parbase search"> 
		     <script language="javaScript"> 
		     function submitSearch() {
		         var collection ="canada" ;
		         var searchVal = document.searchfrm.search.value;
		         if (searchVal.trim()==""){ 
		             alert('Please enter a query to search.');
		         }
		         else{
		             var formActionn = "/content/ca/en/search/search_results.html?queryText=" + searchVal.trim() + "&collection="+collection;
		             window.open(formActionn,"_self");  
		         }
		     }
		     </script></div>
		     
<div id="notification">
       
 <?php 
	if( $this->session->userdata('customername') != null )
	{
		echo '<div id="search">';
	   	echo '<div class="parbase search"> ';
		echo '<a href="'.base_url().'userlogin/log_out" class="last">Logout</a>';         
		echo '</div></div>';
		
		echo '<div id="searchxcv" style="float:right">';
   		echo '<div class="parbase "> ';
   		echo '<a href="'.base_url().'shoppingcart" class="last">Shoppingcart</a>';
   		echo '</div></div>';
		
        ?>
<div id="language">
    <div class="siteToggler">
    	<?php 
    		
	   		echo $this->session->userdata('customername') ;
	   		
    	?> 
</div> 
</div>
<?php } 
	else 
	{
		echo '<div id="search">';
   		echo '<div class="parbase search"> ';
   		echo '<a href="'.base_url().'userlogin" class="last">Login</a>';
   		echo '</div></div>';
		
		echo '<div id="searchxcv" style="float:right">';
   		echo '<div class="parbase "> ';
   		echo '<a href="'.base_url().'shoppingcart" class="last">Shoppingcart</a>';
   		echo '</div></div>';
	}

?>

</div>
		
		           </div>
      
   		</div>
   
        </div>
        
    </div>
     
 
  
    <div id="page_wrapper">
        <div id="page_content">
    
    
        <div id="page_narrow_hero" style="padding-top: 40px; #padding-top: 34px;padding-bottom: 0px; max-width:886px;overflow:hidden; margin-bottom:-2px; #margin-bottom:0px; _margin-bottom:0px;">
            <div class="parsys herosectionpar"><div class="uploadHtml section">


 
  
      <div id="import_html">
            <!-- Start Vizu Ad Catalyst control tag for control / Food Quality EN campaign running on mcdonalds -->
<script src="http://puma.vizu.com/cdn/00/00/45/57/control_flyover.js?siteid=mcdonalds;ord=[RANDOM]" type="text/javascript"></script>
<!-- End Vizu Ad Catalyst control tag / Food Quality EN campaign running on mcdonalds -->
      </div>
</div>
<div class="everything section">
 
  

  



    <div id="everythingcontainer" style="padding:130px 0px 9px 16px;margin:0px 0px 0px 0px" >
            <div class="everythingmain" id="everythingmain" style="overflow:hidden;background-color:#; border:px solid #">
        
            <table class="everythingtable" cellspacing="0" cellpadding="0"> 
              <tr>
              
            
                    <tr>
                
                    <td align="left" valign="top" style="text-align:left; ">
                    <div  style="width:100%; " align="left">
                    <div id="image everything" class="image " style="width:576.0px">
                    
                
                <script type="text/javascript">
                $(document).ready(function() {                
                    $('[title]').removeAttr('title');
                });
                </script>               
                <img title="tagline_menu" style="padding:0px 0px 0px 0px " alt="" width="576.0" class="cq-dd-image" src="images/tagline_menu.png"></a><br/>
                    </div>
                    
                
                    </div></td>
                
            
            </tr>
        </table>
        </div>
    </div>
    <div class="clear"></div>

                  </div>
<div class="uploadHtml section">


 
  
      <div id="import_html">
            
<style>

div table tr td {
line-height:25px;
color:#ffffff;
}

div tr, div tr td{
margin:0px;
padding:0px;
}

div table tr td a {
color:white;
text-decoration:none;
}

div table tr td h1 {
color:#ffffd9;
margin-bottom:10px;
}

div table tr td img {
margin:-2px 0 0 3px;
}

div p{
margin:5px auto;
padding:0px auto;
}

div p span{
font-size:11px;
}

/*override*/
#content_section{
height:0px;
margin:0px;
padding:0px;
}


</style>

    <div style="color:#000;background:#ffffff; margin-top:0px; padding:42px; -moz-border-radius: 0px 0px 10px 10px; 
    -webkit-border-radius:0px 0px 10px 10px; border-radius: 0px 0px 10px 10px; height: 360px">
        
    	<?php echo form_open('userregister/registerUser');?>
    	
		<div style="float: left; width: 100%; margin-bottom: 20px;">
	    	<label style="margin-right: 50px">First Name </label>
	    	<input type="text" id="firstname" name="firstname" />
        </div>
        
        <div style="float: left; width: 100%; margin-bottom: 20px;">
	    	<label style="margin-right: 51px">Last Name </label>
	    	<input type="text" id="lastname" name="lastname" />
        </div>
        
        <div style="float: left; width: 100%; margin-bottom: 20px;">
	    	<label style="margin-right: 50px">User Name  </label>
	    	<input type="text" id="username" name="username" />
        </div>
        <div style="float: left; width: 100%; margin-bottom: 20px; ">
	        <label style="margin-right: 58px">Password</label>
	        <input type="password" id="password" name="password" />
        </div>
        
        <div style="float: left; width: 100%; margin-bottom: 20px;">
	    	<label style="margin-right: 82px">Email</label>
	    	<input type="text" id="email" name="email" />
        </div>
        
        <div style="float: left; width: 100%; margin-bottom: 20px;">
	    	<label style="margin-right: 21px">Contact Number</label>
	    	<input type="text" id="contactnumber" name="contactnumber" />
        </div>
        
        <!-- <div style="float: left; width: 100%; margin-bottom: 20px;">
	    	<label style="margin-right: -1px">Credit Cartd Number</label>
	    	<input type="text" id="creditcardnum" name="creditcardnum" />
        </div>
        
        <div style="float: left; width: 100%; margin-bottom: 20px;">
	    	<label style="margin-right: 40px">CSV Number</label>
	    	<input type="text" id="csv" name="csv" />
        </div> -->
        <input type="hidden" id="creditcardnum" name="creditcardnum" value ="11" />
        <input type="hidden" id="csv" name="csv" value ="11"  />
        
        
        <div style="float:left; width: 100%">
        	<button type="button" id="user_create" name="user_create" style="margin-right: 36px; width: 80px">Submit</button>
        	<!-- <button type="button" id="register" style="width: 80px">Register</button> -->
        </div>
      </form>
        <!-- <table>
            <tr valign="top">
                <td width="290" valign="top">
				<h1>Menu</h1>
				<p><a href="/ca/en/menu/full_menu/mccafe.html">McCafe<sup></sup></a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Discover the rich, bold flavour.</span>
				</p>
				<p><a href="/ca/en/menu/full_menu/value_picks.html">Value Picks<sup></sup></a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Turn your change into something tasty.</span>
				</p>
				<p><a href="/ca/en/menu/full_menu/sandwiches.html">Burgers, Sandwiches, & Wraps</a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">You know you want one.</span>
				</p>
				<p><a href="/ca/en/menu/full_menu/chicken.html">Chicken</a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Juicy, tender and irresistible.</span>
				</p>
				<p><a href="/ca/en/menu/full_menu/breakfast.html">Breakfast</a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Love every morning.</span>
				</p>
				</td>
				                <td width="290" valign="top">
				<h1>&nbsp;</h1>
				<p><a href="/ca/en/menu/full_menu/salads.html">Salads</a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Fresh, yummy freedom in a bowl.</span>
				</p>
				<p><a href="/ca/en/menu/full_menu/snacks.html">Snacks & Sides</a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Delight your taste buds, any time.</span>
				</p>
				<p><a href="/ca/en/menu/full_menu/beverages.html">Beverages</a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Refreshing companions.</span>
				</p>
				<p><a href="/ca/en/menu/full_menu/desserts_shakes.html">Desserts & Shakes</a><img src="images/small_carrot.png" align="absmiddle"><br>
				<span style="color:#838383">Celebrate the sweet life.</span>
				</p>
				                </td>
				                <td width="200" valign="top">
				<h1>Meal Bundles</h1>
				<p><a href="/ca/en/menu/meal_bundles/extra_value_meals.html">Extra Value Meals</a><img src="images/small_carrot.png" align="absmiddle"><br><span style="color:#838383">Treat yourself to tasty deals.</span></p>
				<p><a href="/ca/en/menu/meal_bundles/happy_meal.html">Happy Meal</a><img src="images/small_carrot.png" align="absmiddle"><br><span style="color:#838383"> You want the very best for your kids, and so do we!</span></p>              
				                </td>                
            </tr>
        </table> -->
    </div>

      </div>
</div>
</div>

        </div>
        
        
        <div id="content_section" style="  ">
        
                
 
  
    <div id="main_content_segment" class="clear">
        <div class="main_content_inner_ko" style="">
            <div class="parsys genericpagecontent"></div>

        </div>
    
            <div>
                <div class="featuredcontent parsys iparsys"><div class="iparys_inherited"><div class="featuredcontent parsys iparsys"></div>
</div><div class="section"><div class="new"></div>
</div>
</div>

            </div>
              
    
    </div>
    
            
            </div>
        </div>
    
        <div id="page_footer">
            <div class="parsys iparsys footeripar"><div class="iparys_inherited"><div class="parsys iparsys footeripar"><div class="section"><div class="footer">
 
  

 

 
   
<style>
    #page_footer, #page_footer a 
    {
        color: #FFFFFF;
    }
</style>

<script>
    
    function twitterMCD() 
    { 
        Tracker('uri','/twitter/McDonalds','title','Go to Twitter.com/McDonalds');  
        window.open('http://www.twitter.com/McDonalds'); 
    }
      function YouTubeMCD() 
    { alert("inside function");
        Tracker('uri','/twitter/McDonalds','title','Go to Twitter.com/McDonalds');  
        window.open('http://www.YouTube.com/McDonalds'); 
    }
      function FlickerMCD() 
    { 
        Tracker('uri','/twitter/McDonalds','title','Go to Twitter.com/McDonalds');  
        window.open('http://www.Flicker.com/McDonalds'); 
    }
    function facebookMCD()
    {
        Tracker('uri','/facebook/McDonalds','title','Go to Facebook.com/McDonalds');
        window.open('http://www.facebook.com/McDonalds');
    }    
</script>

<div id="page_footer_rule" style="border-color: #FFFFFF;"></div>

<!-- <table border="0" cellpadding="0" cellspacing="0">
    <tr>
    
        <td align="left" valign="middle" class="bigger_and_bolder">
 
                <div style="float:left;">
            <a href="#" onclick="javascript:;" title="">
                    <img align="absmiddle" src="/content/dam/Canada/en/global/twitter.png" alt=""/><span style="margin-left:3px;">Follow</span>
              </a> 
           </div>     
                      <div style="float:left; margin-left:8px;">
            <a class="external" href="#" onclick="javascript:;" title="">
                    <img align="absmiddle" src="/content/dam/Canada/en/global/facebook.png" alt=""/><span style="margin-left:3px;">Like</span>
              </a> 
           </div>     

           
        
                </td>
            
        <td align="right" valign="right" class="not_bigger_but_bolder" >

      <a href="/ca/en/our_story/corporate_info.html">Corporate Info</a>
      
           <span>|</span> 

      <a href="/ca/en/our_story/corporate_info/press_room.html">Press Room</a>
      
           <span>|</span> 

      <a href="/ca/en/help.html">Help</a>
      
           <span>|</span> 

      <a href="/ca/en/privacy.html">Privacy</a>
      
           <span>|</span> 

      <a href="/ca/en/terms_conditions.html">Terms & Conditions</a>
        
  
     <span>|</span>                 
     <span style="color:#;font-size:px;"> &copy;2010-2013&nbsp;&nbsp;McDonald's</span>
       
       </td>
    </tr>
</table> -->
        </div>
</div></div>
</div><div class="section"><div class="new"></div>
</div>
</div>

        </div>
    </div>

<!--
<script type="text/javascript"> 
    $(function(){
        var height = $('#page_narrow_hero').height();
        //alert("hero height::"+height);
        if(height<600)
        {
            var contentHeight = (600-height).toString() + "px";
            //alert("content height::"+contentHeight);
            $('#content_section').css("min-height",contentHeight);
        }
    });
</script>
-->

    </div>
    
 

<script type="text/javascript">

    if ($.browser.mozilla) {
    
        $('.callout_body_segement').each(function () {

 

            if ($(this).children('a').length > 1) {

                $(this).children('a:last').hide();

                $(this).children('.msg').hide();

            }

        });

    }

</script>   
<script type="text/javascript">
        $(document).ready(function(){
            
            $('.featurecallout .callout_body_segement').callouts();
   //       $('.callouts .callout_body_segement').callouts(); 
             
        });
</script>  
   
           
</body>


<script type="text/javascript">

        var foodnav = new Image();

        foodnav.src = "/images/navigation/food_flyout_bg.png";

        var promonav = new Image();

        promonav.src = "/images/navigation/promotions_flyout_bg.png";

        var singlenav = new Image();

        singlenav.src = "/images/navigation/nav_single_column_bg.png";

        var inputnav = new Image();

        inputnav.src = "/images/navigation/input_flyout_bg.png";

</script>     

</html>   