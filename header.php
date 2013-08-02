<?php include('constants.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<title>Defensible Space Calculator</title>


	<meta charset="UTF-8" /> 
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    
     <!-- BE SURE TO CHANGE THIS TO THE HOME PATH OF YOUR SITE IN CONSTANTS.PHP -->
   	<base href="<?php echo $baseref; ?>">
	
	<link rel="stylesheet" href="css/mobile.css" /> 
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'> 
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png"> 
    <link rel="apple-touch-startup-image" href="images/startup.png">
    
         
       
        
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

<script type="text/javascript" src="js/html5lightbox/html5lightbox.js"></script>


<script type="text/javascript">
 if(navigator.userAgent.match(/Android/i)){
    window.scrollTo(0,1);
 }
</script>



    </head>

    <body>
    		