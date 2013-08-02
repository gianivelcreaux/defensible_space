<?php include('constants.php'); ?>
<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Checklist</title>
     
     <link rel="stylesheet" href="css/mobile.css" />
     
         <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
         
      
        
        <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

      
        
         <!-- JAVASCRIPT JQUERY -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        
        <!-- JAVASCRIPT JQUERY MENU -->
        <script src="js/menu2.js" type="text/javascript"></script>
        
        <!-- JAVASCRIPT SCROLL TO -->
        <script type="text/javascript">
function hideAddressBar()
{
  if(!window.location.hash)
  {
      if(document.height < window.outerHeight)
      {
          document.body.style.height = (window.outerHeight + 50) + 'px';
      }

      setTimeout( function(){ window.scrollTo(0, 1); }, 50 );
  }
}

window.addEventListener("load", function(){ if(!window.pageYOffset){ hideAddressBar(); } } );
window.addEventListener("orientationchange", hideAddressBar );
</script>


<script type="text/javascript">
 if(navigator.userAgent.match(/Android/i)){
    window.scrollTo(0,1);
 }
</script>     
     
     
     
     

<style type="text/css">

		p {
		font-family: 'Source Sans Pro', Helvetica, "Helvetica Neue",  Arial, "Lucida Grande", sans-serif;
		font-size: large;
		margin-bottom: 1px;
		color: #fff;
		margin-top: 0;
		padding: 5% 0;
		}

		/* Undo some styles from the master stylesheet */
		.checklist li { background: none; }
		
		/* CSS for checklists */
		.checklist {
			
			list-style: none;
			
			overflow: auto;
			width: 16em;
		}
		.checklist, .checklist li { margin-left: 0; padding: 0.8em 0; }
		.checklist label { display: block; padding-left: 25px; text-indent: -25px; }
		.checklist label:hover, .checklist label.hover { background: #777; color: #fff; }
		* html .checklist label { height: 1%; }
		
		/* Checklist 1 */
		.cl1 { font-size: 0.9em; width: 100%; height: 15em; }
		.cl1 .alt { background: #f5f5f5; }
		.cl1 input { vertical-align: middle; }
		.cl1 label:hover, .cl1 label.hover { background: #ddd; color: #000; }
		
		/* Checklist 2 */
		.cl2 {
			background-color: rgb(83, 75, 59);
			color: #fff;
			width: 50%;
		}
		.cl2 input { vertical-align: middle; margin: 3px 2em; }
		.cl2 label { border-bottom: 0px solid #769550; padding: 0.2em 0.2em 0.2em 25px; }
		.cl2 label:hover, .cl2 label.hover { background: #333; color: #fff; }
		
		/* Checklist 3 */
		.cl3 {
			border: 1px dotted #a17c04;
			color: #a05a04;
			font-family: "Trebuchet MS", Tahoma, Geneva, Arial, sans-serif;
			font-size: 0.9em;
			height: 19em;
		}
		.cl3 .alt { background: #f8f6ed; }
		.cl3 label { padding: 0.2em 0.2em 0.2em 25px; }
		.cl3 label:hover, .cl3 label.hover { background: #EFE9D4; color: #a05a04; }
	</style>
    
    <!-- JavaScript -->
	<script type="text/javascript">
		/*-----------------------------------------------------------+
		 | addLoadEvent: Add event handler to body when window loads |
		 +-----------------------------------------------------------*/
		function addLoadEvent(func) {
			var oldonload = window.onload;
			
			if (typeof window.onload != "function") {
				window.onload = func;
			} else {
				window.onload = function () {
					oldonload();
					func();
				}
			}
		}
		
		/*------------------------------------+
		 | Functions to run when window loads |
		 +------------------------------------*/
		addLoadEvent(function () {
			initChecklist();
		});
		
		/*----------------------------------------------------------+
		 | initChecklist: Add :hover functionality on labels for IE |
		 +----------------------------------------------------------*/
		function initChecklist() {
			if (document.all && document.getElementById) {
				// Get all unordered lists
				var lists = document.getElementsByTagName("ul");
				
				for (i = 0; i < lists.length; i++) {
					var theList = lists[i];
					
					// Only work with those having the class "checklist"
					if (theList.className.indexOf("checklist") > -1) {
						var labels = theList.getElementsByTagName("label");
						
						// Assign event handlers to labels within
						for (var j = 0; j < labels.length; j++) {
							var theLabel = labels[j];
							theLabel.onmouseover = function() { this.className += " hover"; };
							theLabel.onmouseout = function() { this.className = this.className.replace(" hover", ""); };
						}
					}
				}
			}
		}
	</script>
    
	

</head>

<body>