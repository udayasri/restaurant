var McDDefaultColorBoxSettings = {
    transition: "fade",
    speed: 100,
    initialHeight: 100,
    opacity: "",
    current: "{current} of {total}",
    onOpen: function() { 
            if( $(this).attr('title').length == 0 )
            {
                $(this).attr('title', '&nbsp;');
            }
    },
    onLoad: function() { },
    onComplete: function() {
        $("#cboxClose").addClass("loaded");
        if ($("#cboxLoadedContent #mcdColorboxConfirm").get().length > 0 ) {
            $("#cboxWrapper").attr({ "class": "contentTypeText" });
        } 
        else {
            $("#cboxWrapper").attr({ "class": "contentTypeImage" });
            
            var imgDesc = $('#cboxPhoto').attr('name');
            var splitVal = "";
            var descriptionReq = "";
            if(imgDesc != undefined){
                splitVal = imgDesc.split('||'); 
                descriptionReq = splitVal[1];
                imgDesc = splitVal[0];
            }
            if( descriptionReq  == "true"){        
                var imgPath=$('#cboxPhoto').attr('src');
            }  
(function(d){ 
  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT'); 
  p.type = 'text/javascript'; 
  p.async = true; 
  p.src = '//assets.pinterest.com/js/pinit.js'; 
  f.parentNode.insertBefore(p, f); 
}(document)); 
           if( descriptionReq  == "true"){
                $("<div style = 'float:left; background: none repeat scroll 0% 0% rgb(255, 255, 255); height:370px; width:113px; margin-left:-113px; padding: 0 0px; position:relative; z-index:9999;'  class='imgDesc'>  <div style='text-align: center;'><img src='/content/dam/Canada/en/logo/mcdonalds-logo.png' width='70%;' ></span></div>  </div><div style='clear:both;'></div></div><div class='gallery_context' align='center' style='position:absolute;z-index:9999;'></div>").insertBefore("#innerOverlay");  
                $(".imgDesc").append("<div class='innText' style='height:200px;overflow:auto;overflow-x:hidden; padding : 0 8px; '>"+imgDesc+"</div>"); 
                $(".imgDesc").append("<div style='text-align: center;position:relative;top:28px;/*top:193px;*//*top:245px;*/'><a data-pin-config='none' href='//pinterest.com/pin/create/button/?url="+location.href+"&media="+imgPath+"&description="+imgDesc+"' data-pin-do='buttonPin' ><img src='assets.pinterest.com/images/pidgets/pin_it_button.png' />Pin It</a></div>");   
                var bigImageTitle=$('#bigImageTitle').text();
                     $('#cboxPhoto').css('width', '87%');
                     $('#cboxPhoto').css('margin-left', '-2px');
                     var abc = $('#innerOverlay').height();
                     abc = abc - 150;
                     $('#innerOverlay').css('height',abc);
                $("<div id='bigImageTitle1'</div>").insertBefore("#cboxPhoto");            
                 $('img#cboxPhoto').wrap('<div style="float:left;"></div>');
                $("#bigImageTitle1").text(bigImageTitle);  
                $("#bigImageTitle1").css({'color':'white', 'align':'center'});       
           }else{
                $("<div class='gallery_context' align='center' style='position:absolute;z-index:9999;'></div>").insertBefore("#innerOverlay");
           }
        $('#cboxTitle').empty();
          //  $(".gallery_context").css("left",_w);
        }
        if ( $("#cboxLoadedContent iframe").get().length > 0 ) {
            $("#cboxWrapper").addClass( "iframe" );
        }
        /*
        if ($("#cboxTitle").html() == "") {
            $("#cboxLoadedContent").css({ "padding-bottom": "0px" });
        }
        */
        var _h = $("#colorbox, #cboxWrapper").height()
        $("#colorbox, #cboxWrapper").height(_h + 30);
        var _l = $("#colorbox").offset().left;
        $("#colorbox").css({left: _l + 16});
        

    },
    onCleanup: function() { 
        $("#cboxClose").removeClass("loaded"); 
    },
    onClosed: function() { }
};

(function($) {
    $.fn.mcdColorbox = function(options) {
        return this.each(function() {
            var opts = $.extend({}, McDDefaultColorBoxSettings, options);
            $(this).colorbox(opts);
            $('#bigImageTitle').hide(); 
        });
    }
})(jQuery);


(function($) {
    $.fn.mcdColorboxLegalBumper = function(options, colorboxoptions) {
        var param1 = (options) ? options : {};
        var param2 = (colorboxoptions) ? colorboxoptions : {};

        return this.each(function() {
            var options = {
                
                classname: "ColorBoxLegalBumper",
                question: "<strong>Leaving McDonald's Web Site.</strong><p>You are leaving the McDonald's Corporation web site for a site that is controlled by a third party, not affiliated with McDonald's. The content and policies, including the privacy policy, on the site you are entering may vary from McDonald's viewpoints and policies. Please be sure to review the policies of every site you visit. McDonald's is not responsible for the opinions, policies, statements or practices of any other companies, such as those that may be expressed in the web site you are entering.</p>",
                yescontrol: "Continue",
                nocontrol: "Cancel",
                yesfunction: function() {
                    if ($.fn.mcdColorboxConfirm.temps.url != null) {
                        //window.location = $.fn.mcdColorboxConfirm.temps.url;
                        window.open($.fn.mcdColorboxConfirm.temps.url,"_blank");   
                        return false;
                    }
                }
            };
            var opts = $.extend({}, options, param1);
            $(this).mcdColorboxConfirm(opts, colorboxoptions);
        });
    }
})(jQuery);

(function($) {

    $.fn.mcdColorboxDeleteConfirm = function(options, colorboxoptions) {
    //alert("MB");
        var param1 = (options) ? options : {};
        var param2 = (colorboxoptions) ? colorboxoptions : {};
        
        return this.each(function() {
            var options = {
                
                classname: "ColorBoxLegalBumper",
                question: "<p>Please note that this will remove all menu items from My Meal Builder.</p>",
                yescontrol: "Continue",
                nocontrol: "Cancel",
                yesfunction: function() {
                
                    if ($.fn.mcdColorboxConfirm.temps.url != null) {
                        //window.location = $.fn.mcdColorboxConfirm.temps.url;
                        window.open($.fn.mcdColorboxConfirm.temps.url,"_self");   
                        return false;
                    }
                }
            };
            var opts = $.extend({}, options, param1);
            $(this).mcdColorboxConfirm(opts, colorboxoptions);
        });
    }
})(jQuery);  

(function($) {
    $.fn.mcdColorboxConfirm = function(options, colorboxoptions) {
        var param1 = (options) ? options : {};
        var param2 = (colorboxoptions) ? colorboxoptions : {};

        var opts = $.extend({}, $.fn.mcdColorboxConfirm.defaults, param1);

        return this.each(function() {
            var $this = $(this);
            $this.click(function() {
                
                if (opts.forceurl && opts.url != null) {
                    
                  if ( window.console != undefined ) { console.dir(opts); }
                    $.fn.mcdColorboxConfirm.temps.forceurl = options.forseurl;
                    $.fn.mcdColorboxConfirm.temps.url = options.url;
                }
                else if (this.href) {
                    $.fn.mcdColorboxConfirm.temps.url = (this.href != "#") ? this.href : null;
                }

                setDisplay(opts);
                var locatlcopts = { minHeight: false, width: 700, inline: true, open: true, href: "#mcdColorboxConfirm" };
                var copts = $.extend({}, McDDefaultColorBoxSettings, locatlcopts, param2);
                $.fn.colorbox(copts);
                return false;
            });
        });
    };

    function setDisplay(opts) {
        var output = document.createElement("div");

        var haswildcard = (opts.wildcontrol.length > 0 && jQuery.isFunction(opts.wildfunction)) ? true : false;

        output = $(output);
        output.attr("id", "mcdColorboxConfirm").addClass("mcdColorboxCopyContent").addClass(opts.classname);
        output.append("<div id=\"inner_wrapper\" >" + opts.question + "</div>");
        var controlcontainer = $(document.createElement("div"));
        controlcontainer.addClass("mcdColorboxConfirmControls");

        output.append(controlcontainer);

        var controlyes = $(document.createElement("a"));
        controlyes.attr({ "href": "#" }).addClass("mcdColorboxConfirmYes").html("<span>" + opts.yescontrol + "</span>");
        controlcontainer.append(controlyes);

        var controlno = $(document.createElement("a"));
        controlno.attr({ "href": "#" }).addClass("mcdColorboxConfirmNo").html("<span>" + opts.nocontrol + "</span>");
        controlcontainer.append(controlno);

        if (haswildcard) {
            var controlwild = $(document.createElement("a"));
            controlwild.attr({ "href": "#" }).addClass("mcdColorboxConfirmWild").html("<span>" + opts.wildcontrol + "</span>");
            controlcontainer.append(controlwild);
            controlwild.click(function() { opts.wildfunction(); $.fn.colorbox.close(); return false; });
        }

        controlyes.click(function() { opts.yesfunction(); $.fn.colorbox.close(); return false; });
        controlno.click(function() { opts.nofunction(); $.fn.colorbox.close(); return false; });

        $("body #mcdColorBoxConfirmWrapper").remove();

        $("body").prepend("<div id='mcdColorBoxConfirmWrapper' style='display:none'/>");
        $("#mcdColorBoxConfirmWrapper").append(output);
    };

    $.fn.mcdColorboxConfirm.temps =
    {
        forceurl: false,
        url: null,
        iscontent: false
    }

    $.fn.mcdColorboxConfirm.defaults = {
        forceurl: false,
        url: null,
        question: "<strong>Are you sure?</strong>",
        yescontrol: "Yes",
        nocontrol: "No",
        wildcontrol: "",
        yesfunction: function() {
            $.fn.colorbox.close();
        },
        nofunction: function() {
            $.fn.colorbox.close();
        },
        wildfunction: null,
        classname: ""
    };

})(jQuery);      