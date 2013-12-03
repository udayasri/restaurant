<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>              
<script type="text/javascript">
  
    function desktopRedirect(){
        var redirectPath = "";  
        var useragent = navigator.userAgent;
        var domain = "www.mcdonalds.ca";
  
        if ( useragent.indexOf('BlackBerry') != -1 || useragent.indexOf('iPhone OS 4') != -1 || useragent.indexOf('iPhone OS 5') != -1 || useragent.indexOf('iPhone OS 6') != -1 || useragent.indexOf('Android 2') != -1 || useragent.indexOf('Android 4') != -1 || useragent.indexOf('Opera') != -1 || useragent.indexOf('Windows Phone') != -1 ) {    
          var alertURL = "";            
          var getAlertPage = "false";
          var fullSite = "no";
          if(getCookie("fullsite") != null){
            fullSite = getCookie("fullsite");
          }
   
      if(fullSite == "yes"){
                //cookie set for full site
                var pagePath = '/ca/en/menu/full_menu/breakfast';
                alertURL = "http://"+domain+pagePath+".html";
      }else{
            if(redirectPath != ""){
                    //redirecting to path specified in page properties
            var pagePath = '/ca/en/menu/full_menu/breakfast';
            var url= "http://"+domain+pagePath+".html";
                    var redPath = "";
                    
                    if((redirectPath.indexOf("/content/")>-1)){
                        redPath = "http://"+domain+redirectPath+".html";
                    }else{
                        redPath = redirectPath;
                    }  
            alertURL = redPath;
         }else{                
            //check if intermediate page is required or not               
            if(getAlertPage == "true"){
                var pagePath = '/ca/en/menu/full_menu/breakfast';
                var url= "http://"+domain+pagePath+".html";
                                          
                        if(("".indexOf("/content/")>-1)){
                             alertURL = "http://"+domain+".html?desktopurl="+url;
                        }else{
                             alertURL = "?desktopurl="+url;
                        }
                    }else{
                        //do nothing
                    }
                }      
            }          
            
            var mobileAlert = "no"
            if(getCookie("mobilealert") != null){
                mobileAlert = getCookie("mobilealert");
            }
            var desktopVal = "no";
            var fullSiteRedirect = ""; 
            if(getCookie("fullsiteredirect") != null){
                fullSiteRedirect = getCookie("fullsiteredirect");
            } 
            
            if(fullSiteRedirect == "yes" && mobileAlert == "no" && desktopVal == "no"){
                setCookie("fullsiteredirect","no");
                window.location.href = alertURL;
            }
            
            if(mobileAlert == "no" && desktopVal == "no"){
                if(fullSiteRedirect == "yes" || fullSiteRedirect == "no"){
                    //do nothing
                }
                else{
                    if(alertURL != ""){
                        window.location.href = alertURL;
                    }
                }    
            } 
                                      
        }
        else{
            // For desktop do nothing 
        }
    }         
    function getCookie(name){ 
        var re = new RegExp(name + "=([^;]+)"); 
        var value = re.exec(document.cookie); 
        return (value != null) ? unescape(value[1]) : null; 
    }  
    function setCookie(cookieName,cookieValue) {
        var today = new Date();
        var expire = new Date();
        expire.setTime(today.getTime() + 15 * 60 * 1000);
        document.cookie = cookieName+"="+escape(cookieValue)+ ";expires="+expire.toGMTString();
    }
    
   var allowIntRed= "true";
   if("yes" == "yes"){  
   if(allowIntRed == "true"){
       desktopRedirect();  
       } 
   }    
</script> 
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"> 
<meta name="title" content="Breakfast :: McDonalds.ca" />
<meta name="description" content="Enjoy your wakeup call with our freshly-cracked eggs, premium roast coffee, baked fresh daily buttermilk biscuits, savoury sausage and so much more." />
<meta name="keywords" content="morning, rush hour, coffee, egg, bacon, mcgriddle, hurry, quick, hash brown, mcmuffin, fresh, biscuit, blt, bagel, breakfast, hotcakes, pancakes, sausage, buttermilk, hash browns, orange juice" />
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META name="_market" content="" />
<META name="_language" content="" />
<META name="_breadcrumb" content="/ca/en/menu/full menu/breakfast" />

<?php include 'frontend_header.php'?>
<title>Breakfast :: McDonalds</title>

<style>
button.button 
{
	overflow: visible;
	width: auto;
	border: 0;
	padding: 0;
	margin: 0;
	background: transparent;
	cursor: pointer;
}
button.color1 > span 
{
	background: #c40404;
}

button.button > span 
{
	float: left;
	height: 27px;
	padding: 0;
	font: normal 13px/26px "Lato", Lato, Helvetica, sans-serif;
	text-align: center;
	white-space: nowrap;
	color: #fff;
	text-transform: uppercase;
	border-radius: 0px;
}

button.button span span {
padding: 0 10px;
display: block;
float: left;
}
</style>
</head>  
 
<body class="page genericpage " style="background:#FFFFFF; background-image: url('images/1336914254629.jpg'); background-repeat: no-repeat; background-position:center top;">
    <div id="document_wrapper">
        
        <a name="top"></a>
   
<div id="top_wrapper"> 
    <div id="top_content">
        <div id="logo">
            <div class="logo mlogo parbase">
    <a href="<?php echo base_url()?>home">
<img src="images/1336914409746.png" width="113" height="98" alt=""/>
  
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
    <div id="everythingcontainer" style="padding:140px 0px 0px 25px;margin:0px 0px 10px 0px" >
            <div class="everythingmain" id="everythingmain" style="overflow:hidden;background-color:#; border:px solid #">
        
            <table class="everythingtable" cellspacing="0" cellpadding="0"> 
              <tr>
                    <tr>
                
                    <td align="left" valign="top" style="text-align:left; ">
                    <div  style="width:100%; " align="left">
                    <div id="image everything" class="image " style="width:590.0px">
                    
                
                <script type="text/javascript">
                $(document).ready(function() {                
                    $('[title]').removeAttr('title');
                });
                </script>               
                <img title="Love every morning." style="padding:0px 0px 0px 0px " alt="Love every morning." width="590.0" class="cq-dd-image" src="images/tagline_breakfast.png"></a><br>
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
div.products table tr td {
text-align: center;
vertical-align:top;
}
</style>
    <div class="products" style="background:#fffdea; margin-top:0px; padding:45px; -moz-border-radius: 0px 0px 10px 10px; -webkit-border-radius:0px 0px 10px 10px; border-radius: 0px 0px 10px 10px;">
	<h1>Breakfast</h1>
	<p style="width:400px;">Enjoy your wakeup call with our irresistible, freshly-cracked  Grade A eggs with our Egg McMuffin, premium hot roast brewed coffee,  and so much more.  Enjoy breakfast with us from as early as 4AM until 11 a.m., seven days a week.<br><br>At participating McDonald's restaurants in Malayasia.</p>
	<table>
		<!-- row 1 -->
		<tr>
			<?php 
				$i = 0; 
	            foreach ($foodDetails as $row) 
			  	{
			  		if( $i%5 == 0 )
					{
						echo '</tr><tr>';
					}
			  		echo '<td width="134">';
					echo '<div style = "height:160px">';
			  		echo '<img src = "'.base_url().'assets/img/foods/'.$row->food_image.'">';
					echo '<p style="text-align:center"><span class="rtStyle_image_title">';
					echo $row->food_name; echo '</br>'; echo $row->food_price."$";
					echo '</span>';
					echo '</p>';
					
					echo '</div>';
					
					//echo '<a href="'.base_url().'shoppingcart/" class="button btn-cart color1" title="Edit Food" id = "#">Add to Cart</a>';
					echo '<button type="button" title="Add to Cart" class="button btn-cart color1" onclick="javascript:window.location.replace('."'".base_url()."breakfast/addtocart/".$row->food_id."'".')"><span><span>Add to Cart</span></span></button>';
					//echo '<button type="button" title="Add to Cart" class="button btn-cart color1" onclick="javascript:window.location.replace('."'".base_url()."shoppingcart'".')"><span><span>Add to Cart</span></span></button>'; ?>
					
					<?php echo '</td>';
					
					$i++;
			  	}
			?>
						  		
			<!-- <td width="134"><img src="images/thumb_egg-mcmuffin.png" border="0"/>
				<p style="text-align:center"><span class="rtStyle_image_title">Egg McMuffin</span></p>
			</td>
			<td width="134"><a href="/ca/en/menu/full_menu/breakfast/sausage_mcmuffin_with_egg.html"><img src="images/breakfast/thumb_sausage-mcmuffin-egg.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/sausage_mcmuffin_with_egg.html">Sausage McMuffin<sup>®</sup> with Egg</a></span></p>
			</td>
			<td width="134"><a href="/ca/en/menu/full_menu/breakfast/bacon_n_egg_mcmuffin.html"><img src="images/thumb_bacon-egg-mcmuffin.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/bacon_n_egg_mcmuffin.html">Bacon 'n Egg McMuffin<sup>®</sup></a></span></p>
			</td>
			<td width="134"><a href="/ca/en/menu/full_menu/breakfast/sausage_mcmuffin.html"><img src="images/thumb_sausage-mcmuffin.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/sausage_mcmuffin.html">Sausage McMuffin<sup>®</sup></a></span></p>
			</td>
<td width="134"><a href="/ca/en/menu/full_menu/breakfast/bacon_egg_cheese_mcgriddles.html"><img src="images/thumb_bacon-egg-cheese-mc-griddles.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/bacon_egg_cheese_mcgriddles.html">Bacon Egg & Cheese McGriddles<sup>®</sup></a></span></p>
			</td>
                        <td width="134"><a href="/ca/en/menu/full_menu/breakfast/bec_bagel.html"><img src="images/thumb_bacon-egg-bagel-multi.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/bec_bagel.html">Bacon 'N Egg Bagel</a></span></p>
			</td> -->
		</tr>
		
		<!-- row 2 -->
		<!-- <tr>
			
<td width="134"><a href="/ca/en/menu/full_menu/breakfast/bagel_blt.html"><img src="images/thumb_blt-bagel-multi.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/bagel_blt.html">BLT Bagel</a></span></p>
			</td>
<td width="134"><a href="/ca/en/menu/full_menu/breakfast/egg_lt_bagel.html"><img src="images/thumb_lt-egg-bagel-multi.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/egg_lt_bagel.html">Egg LT Bagel</a></span></p>
			</td>
<td width="134"><a href="/ca/en/menu/full_menu/breakfast/breakfast_burritos.html"><img src="images/thumb_breakfast-burritos.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/breakfast_burritos.html">Breakfast Burrito</a></span></p>
			</td>
<td width="134"><a href="/ca/en/menu/full_menu/breakfast/hash_browns.html"><img src="images/thumb_hash-browns.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/hash_browns.html">Hash Browns</a></span></p>
			</td>
			<td width="134" style="padding-top:4px"><a href="/ca/en/menu/full_menu/snacks/baked_muffins.html"><img src="images/thumb_baked-muffins.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/snacks/baked_muffins.html">Baked Muffins </a></span></p>
			</td>
<td width="134"><a href="/ca/en/menu/full_menu/breakfast/big_breakfast.html"><img src="images/thumb_big-breakfast.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/big_breakfast.html">Big Breakfast<sup>®*</sup></a></span></p>
			</td>
			
		</tr> -->
		<!-- row 3 -->
		<!-- <tr>
                
			
			
			
			<td width="134"><a href="/ca/en/menu/full_menu/breakfast/hotcakes_and_sausage.html"><img src="images/thumb_hotcakes-sausage.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/hotcakes_and_sausage.html">Hotcakes and Sausage</a></span></p>
			</td>
<td width="134"><a href="/ca/en/menu/full_menu/breakfast/oatmeal.html"><img src="images/thumb_oatmeal.png" border="0"/></a>
				<p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/breakfast/oatmeal.html">Oatmeal</a></span></p>
			</td>
<td width="134">
                   <a href="/ca/en/menu/full_menu/snacks/fruit_n_yogurt_parfait.html"><img src="images/thumb_parfait.png"/></a>
                    <p style="text-align:center"><span class="rtStyle_image_title"><a href="/ca/en/menu/full_menu/snacks/fruit_n_yogurt_parfait.html">Fruit N Yogurt Parfait</a></span></p>
                </td>
               </tr> -->
               <!-- row 4 -->
		<tr>
                       
			<td width="134">
			</td>
			<td width="134">
			</td>
			<td width="134">
			</td>
		</tr>
	</table>
	<sup style="color:#929292">At participating McDonald's restaurants. Product availability varies by restaurant.</sup><br/>

</div>
      </div>
</div>
</div>

        </div>
        
        
        <div id="content_section" style="  padding-bottom: 45px;">
        
                
 
  
    <div id="main_content_segment" class="clear">
        <div class="main_content_inner_ko" style="padding-top: 0px;">
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
        color: #686868;
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

<div id="page_footer_rule" style="border-color: #929292;"></div>

<!-- <table border="0" cellpadding="0" cellspacing="0">
    <tr>
    
        <td align="left" valign="middle" class="bigger_and_bolder">
 
                <div style="float:left;">
            <a href="#" onclick="javascript:;" title="">
                    <img align="absmiddle" src="images/twitter.png" alt=""/><span style="margin-left:3px;">Follow</span>
              </a> 
           </div>     
                      <div style="float:left; margin-left:8px;">
            <a class="external" href="#" onclick="javascript:;" title="">
                    <img align="absmiddle" src="images/facebook.png" alt=""/><span style="margin-left:3px;">Like</span>
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