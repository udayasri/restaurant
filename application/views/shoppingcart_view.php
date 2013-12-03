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

<script src="<?php echo base_url()?>assets/js/ajax_update_shoppingcart.js"></script>
<script>
var baseurl =  "<?php echo base_url() ?>";

$('#place_order').live('click',function()
{
	logged_user = $("#loggeduser").val();
	
	if( logged_user == 'null' )
	{
		window.location.href = baseurl+"userlogin";
	}
	else
	{
		$("#cart").css("display","none");
		$("#bank_details").css("display","block");
	}
	
});

$('.bank').live('click',function()
{
	$( "#shopping_cart_update" ).submit();
});


	
</script>

<style>
	.everythingtable{
		height: 0;
	}
	/*.CSSTableGenerator tr { line-height: 14px; }*/
	
	.CSSTableGenerator {
		margin:0px;padding:0px;
		width:100%;
		box-shadow: 10px 10px 5px #888888;
		border:1px solid #000000;
		
		-moz-border-radius-bottomleft:0px;
		-webkit-border-bottom-left-radius:0px;
		border-bottom-left-radius:0px;
		
		-moz-border-radius-bottomright:0px;
		-webkit-border-bottom-right-radius:0px;
		border-bottom-right-radius:0px;
		
		-moz-border-radius-topright:0px;
		-webkit-border-top-right-radius:0px;
		border-top-right-radius:0px;
		
		-moz-border-radius-topleft:0px;
		-webkit-border-top-left-radius:0px;
		border-top-left-radius:0px;
	}.CSSTableGenerator table{
	    border-collapse: collapse;
	        border-spacing: 0;
		width:100%;
		
		margin:0px;padding:0px;
	}.CSSTableGenerator tr:last-child td:last-child {
		-moz-border-radius-bottomright:0px;
		-webkit-border-bottom-right-radius:0px;
		border-bottom-right-radius:0px;
	}
	.CSSTableGenerator table tr:first-child td:first-child {
		-moz-border-radius-topleft:0px;
		-webkit-border-top-left-radius:0px;
		border-top-left-radius:0px;
	}
	.CSSTableGenerator table tr:first-child td:last-child {
		-moz-border-radius-topright:0px;
		-webkit-border-top-right-radius:0px;
		border-top-right-radius:0px;
	}.CSSTableGenerator tr:last-child td:first-child{
		-moz-border-radius-bottomleft:0px;
		-webkit-border-bottom-left-radius:0px;
		border-bottom-left-radius:0px;
	}.CSSTableGenerator tr:hover td{
		
	}
	.CSSTableGenerator tr:nth-child(odd){ background-color:#ffffff; }
	.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }.CSSTableGenerator td{
		vertical-align:middle;
		
		
		border:1px solid #000000;
		border-width:0px 1px 1px 0px;
		text-align:left;
		padding:7px;
		font-size:13px;
		font-family:Arial;
		font-weight:normal;
		color:#000000;
	}.CSSTableGenerator tr:last-child td{
		border-width:0px 1px 0px 0px;
	}.CSSTableGenerator tr td:last-child{
		border-width:0px 0px 1px 0px;
	}.CSSTableGenerator tr:last-child td:last-child{
		border-width:0px 0px 0px 0px;
	}
	.CSSTableGenerator tr:first-child td{
			background:-o-linear-gradient(bottom, #ff0000 5%, #bc3200 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff0000), color-stop(1, #bc3200) );
		background:-moz-linear-gradient( center top, #ff0000 5%, #bc3200 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff0000", endColorstr="#bc3200");	background: -o-linear-gradient(top,#ff0000,bc3200);
	
		background-color:#ff0000;
		border:0px solid #000000;
		text-align:center;
		border-width:0px 0px 1px 1px;
		font-size:14px;
		font-family:Arial;
		font-weight:bold;
		color:#ffffff;
	}
	.CSSTableGenerator tr:first-child:hover td{
		background:-o-linear-gradient(bottom, #ff0000 5%, #bc3200 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff0000), color-stop(1, #bc3200) );
		background:-moz-linear-gradient( center top, #ff0000 5%, #bc3200 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff0000", endColorstr="#bc3200");	background: -o-linear-gradient(top,#ff0000,bc3200);
	
		background-color:#ff0000;
	}
	.CSSTableGenerator tr:first-child td:first-child{
		border-width:0px 0px 1px 0px;
	}
	.CSSTableGenerator tr:first-child td:last-child{
		border-width:0px 0px 1px 1px;
	}
	
	textarea:focus, input:focus{
    	outline: 0;
	}
	input
	{
		outline:none;
	}

</style>
<script>
	var baseurl =  "<?php echo base_url() ?>";
</script>


<title>Shopping Cart :: McDonalds</title>

     

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
						<a href='<?php echo base_url()?>home'>Menu</a>&nbsp;<span class='bd_separator'>/</span>&nbsp;<a href='<?php echo base_url()?>shoppingcart' class='last'>Shopping Cart</a>      
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

    <div id="cart" style="color:#000;background:#ffffff; margin-top:0px; padding:42px; -moz-border-radius: 0px 0px 10px 10px; -webkit-border-radius:0px 0px 10px 10px; border-radius: 0px 0px 10px 10px; height: auto">
      <h2>Shopping Cart </h2>
     <?php $attributes = array('id' => 'shopping_cart_update');?>
     <?php echo form_open('shoppingcart/placeorder' , $attributes );?>   
       <div class="CSSTableGenerator" style="margin-bottom: 20px"> 
		<table width="100%%" border="1" style="color: #000">
		  <tr>
		    <td>Food Item</td>
		    <td>Quantity</td>
		    <td>Price </td>
		    <td>Remove</td>
		  </tr>
		  <?php //print_r( $list ); 
        	$total = 0 ;
	        for($i =0; $i<count( $list );$i++)
	        {
				for($j = 0 ; $j<count($list[$i]);$j++)
				{
					echo '<tr>';
				    echo '<td>'; echo $list[$i][$j]->food_name; echo '</div></td>';
					echo '<td>  <div contenteditable id ="food_quntity'.$i.'" class = "food_quntitychange">'; echo '1'; ; echo '</div></td>';
					echo '<td>'; echo '<div id ="food_price'.$i.'">'. $list[$i][$j]->food_price. '</div>'; echo '</td>';
					echo '<td> <a href="'.base_url().'shoppingcart/removefood/'.$list[$i][$j]->food_id.'"><img src="'. base_url().'assets/img/delete.png" style="float:left; margin-top:9px; margin-right:9px; cursor:pointer" id="x" class="delete_image del"/></a> </td>';
				  	echo '</tr>';
					echo '<input type="hidden" name="food_priceamount1'.$i.'" id="food_priceamount1'.$i.'" value="'.$list[$i][$j]->food_price.'">'; //set the value of price of 1 food item
					
					
					echo '<input type="hidden" name="food_nametopass'.$i.'" id=food_nametopass'.$i.'" value="'.$list[$i][$j]->food_name.'">';
					echo '<input type="hidden" name="food_pricetopass'.$i.'" id="food_pricetopass'.$i.'" value="'.$list[$i][$j]->food_price.'">';
					echo '<input type="hidden" name="food_quntitytopass'.$i.'" id="food_quntitytopass'.$i.'" value="1">';
					
					$total +=  $list[$i][$j]->food_price;
					
				}
			}
			echo '<input type="hidden" name="count" id="count" value="'.$i.'">';
			
	        
	        ?>
		  
		    <td>Total</td>
		    <td>&nbsp;</td>
		    <td><?php echo '<div id = "total">'; echo $total ; echo '</div>' ; ?></td>
		    <td>&nbsp; </td>
		  </tr>
		</table>
       </div>
       <?php 
       	if( $this->session->userdata('customername') != null )
       	{
       		echo '<input type="hidden" name="loggeduser" id ="loggeduser" value = "'.$this->session->userdata('customername').'" >';
       	}
		else
		{
			echo '<input type="hidden" name="loggeduser" id ="loggeduser" value = "null" >';
		}
       
       ?>
       
       <!-- <p>*<?php echo $total; ?>$ will be deducted from your account  </p> -->
 
        <div style="float:left; width: 100%">
        	<button type="button" name="place_order" id="place_order" style="margin-right: 36px; width: 80px">Order </button>
        	<!-- <button type="button" name="updateshoppingcart" id="updateshoppingcart" style="margin-right: 36px; width: 80px">Update </button> -->
        	<a href="<?php echo base_url()?>breakfast"><button type="button" id="register" style="width: 160px" >Continue Shopping </button></a>
        </div>
       </form>
    </div>
    
    <div id="bank_details" style="display:none ;color:#000;background:#ffffff; margin-top:0px; padding:42px; -moz-border-radius: 0px 0px 10px 10px; -webkit-border-radius:0px 0px 10px 10px; border-radius: 0px 0px 10px 10px; height: 100px">
        
    	<h3 style="margin-bottom: 10px">Select a bank to pay your order </h3>
    	
    	<img src="<?php echo base_url()?>images/rhb_bank.png" style =" margin-right: 20px; cursor:pointer" class = "bank">
    	<img src="<?php echo base_url()?>images/mb_bank.png" style =" margin-right: 20px; cursor:pointer" class = "bank" >
    	<img src="<?php echo base_url()?>images/CIMB_bank.png" class = "bank" style ="cursor:pointer" >
 
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

        </div>
</div></div>
</div><div class="section"><div class="new"></div>
</div>
</div>

        </div>
    </div>


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