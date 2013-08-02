<?php include('../constants.php'); ?>
<!DOCTYPE html>
<html>
 
<head>

<meta charset="utf-8">

<title>Defensible Space Calculator</title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/mobile.css" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png"> 
<link rel="apple-touch-startup-image" href="images/startup.png">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />


<style>

#form_wrapper {
	margin: auto;	
}

 p {
	margin: 0;
	padding: 5% 0;
	line-height: 130%;	
}


form {
	width:90%;
	margin: auto;
}	

input, textarea {
padding: 5px;
margin: 10px;
 font-family: 'Source Sans Pro', Helvetica, "Helvetica Neue",  Arial, "Lucida Grande", sans-serif;
font-size: 1.2em;
font-weight: normal;
outline: none;

}
p {
 font-family: 'Source Sans Pro', Helvetica, "Helvetica Neue",  Arial, "Lucida Grande", sans-serif;
font-size: large;
margin-bottom: 1px;
color: #fff;
}

input[type=text], textarea {
width: 96%;
margin: auto;
background-color: #fff;
border: 1px solid #CCC;
-moz-box-shadow:  -1px -1px -1px  #666;
-webkit-box-shadow: -1px  -1px -1px  #666;
box-shadow: -1px  -1px -1px   #666;

/* For IE 8 */

-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000')";

/* For IE 5.5 - 7 */

filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#000000');
}

 
h1 {
	 
 	font-family: 'Source Sans Pro', Helvetica, "Helvetica Neue",  Arial, "Lucida Grande", sans-serif;
	font-size: 2em;
	color: #756755;
	 
	margin-top: 0;
	padding-top: 15px;
}

.calc_step h3 {
	 
 	font-family: 'Source Sans Pro', Helvetica, "Helvetica Neue",  Arial, "Lucida Grande", sans-serif;
	font-size: 1.5em;
	color: #000;
	margin-bottom: 2%;
}

body {
padding: 0;

}
.input_field {
	width: 100%;	
}

a:link.light {
	 display: inline;	
}

</style>


<script type="text/javascript" src="../js/html5lightbox/html5lightbox.js"></script>
 <!-- JAVASCRIPT JQUERY -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<script type="text/javascript">
function UpdateCost() {
  var sum = 0;
  var elem;

  var i = 0;
  while (document.getElementById('vegetation'+i)) {


    elem = document.getElementById('vegetation'+i);
    if (elem.type=='checkbox')
    {
        sum += (elem.checked) ? Number(elem.value) : 0;
    }
    else if (elem.type=='select-one')
    {
        sum += Number(elem.options[elem.selectedIndex].value);
    }
    i++;
  }
  document.getElementById('totalcost').value = sum.toFixed(2);
} //
</script>

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


 
    
</head>
 
<body>

<?php include('../nav.php');?>


<div class="page">

	
    <div id="content-secondary">
    
    <div id="form_wrapper">

<div class="info_text">
<p>Calculate how much defensible space you need around your home by filling out the fields in this form.</p>
</div>

<div class="input_field">


<div class="calc_step shadow">


<form id="matrix" action="" method="post">


<h1>Step 1</h1>
<h3>Vegetation</h3>

<p>What type of vegetation (fuel) do you have around your house? Check all boxes that apply. Click the (?) next to each plant type for pictures and definitions of vegetation groups.</p>

<ul id="menu3" class="menu collapsible">  
                      
<!--  Vegetation 0'-30' -->		
            
<li><a href="#" class="category">Fuel 0 - 30ft</a>
         
<ul class="inner checklist">
<li><input type="checkbox" id='vegetation0' name="Specimen_Garden" value="1"  onclick="UpdateCost()"><label for="Specimen_Garden">Specimen Garden	<a href="http://millvalleylibrary.net/wildfires/images/Specimen.jpg"  class="html5lightbox light" data-group="set1">(?)</a></label></li>
<li><input type="checkbox" id='vegetation1' name="Hardwood" value="2" onclick="UpdateCost()"><label for="Hardwood">Hardwood		<a href="../images/Hardwood.jpg"  class="html5lightbox light" data-group="set2"  title="Hardwood">(?)</a></label></li>
<li><input type="checkbox" id='vegetation2' name="Grass" value="3" onclick="UpdateCost()"><label for="Grass">Grass		<a href="../images/Grass.jpg"  class="html5lightbox light" data-group="set2"  title="Grass">(?)</a></label></li>
<li><input type="checkbox" id='vegetation3' name="Mostly_Grass" value="4" onclick="UpdateCost()"><label for="Mostly_Grass">Mostly Grass		<a href="../images/mostly_grass.jpg"  class="html5lightbox light" data-group="set2"  title="Mostly Grass">(?)</a></label></li>
<li><input type="checkbox" id='vegetation4' name="Mostly_Brush" value="5" onclick="UpdateCost()"><label for="Mostly_Brush">Mostly Brush		<a href="../images/mostly_brush.jpg"  class="html5lightbox light" data-group="set2"  title="Mostly Brush">(?)</a></label></li>
<li><input type="checkbox" id='vegetation5' name="Chapparal" value="6" onclick="UpdateCost()"><label for="Chapparal">Pyrophoric Hardwood/ Chapparal		<a href="../images/Chaparral_California_DP23.jpg"  class="html5lightbox light" data-group="set2"  title="Chapparal">(?)</a></label></li>
<li><input type="checkbox" id='vegetation6' name="Conifer" value="7" onclick="UpdateCost()"><label for="Conifer">Conifer		<a href="../images/Conifer.jpg"  class="html5lightbox light" data-group="set2"  title="Conifer">(?)</a></label></li>
<li><input type="checkbox" id='vegetation7' name="Conifer_understory" value="8" onclick="UpdateCost()"><label for="Conifer_understory">Conifer with Brush Understory		<a href="../images/conifer_brush_understory.jpg"  class="html5lightbox light" data-group="set2"  title="Conifer with Brush Understory">(?)</a></label></li>
</ul>

</li> <!--  END Vegetation 0'-30' -->		


                      
<!--  Vegetation 30'-100' -->		
            
<li><a href="#" class="category">Fuel 30ft - 100ft</a>
         
<ul  class="inner checklist">
<li><input type="checkbox" id='vegetation8' name="Grass2" value="1"  onclick="UpdateCost()"><label for="Grass2">Grass		<a href="../images/Grass.jpg"  class="html5lightbox light" data-group="set2"  title="Grass">(?)</a></label></li>
<li><input type="checkbox" id='vegetation9' name="Brush2" value="2" onclick="UpdateCost()"><label for="Brush2">Mostly Brush		<a href="../images/mostly_brush.jpg"  class="html5lightbox light" data-group="set2"  title="Mostly Brush">(?)</a></label></li>
<li><input type="checkbox" id='vegetation10' name="Chapparal2" value="4" onclick="UpdateCost()"><label for="Chapparal2">Pyrophoric Hardwood/ Chapparal		<a href="../images/Chaparral_California_DP23.jpg"  class="html5lightbox light" data-group="set2"  title="Chapparal">(?)</a></label></li>
<li><input type="checkbox" id='vegetation11' name="Conifer_understory2" value="5" onclick="UpdateCost()"><label for="Conifer_understory2">Conifer with Brush Understory		<a href="../images/conifer_brush_understory.jpg"  class="html5lightbox light" data-group="set2"  title="Conifer with Brush Understory">(?)</a></label></li>
</ul>

</li>
</ul>
</div>



<div class="input_field">
<div class="calc_step shadow">
<div class="info_text">
<h1>Step 2 </h1>
<h3>Aspect</h3>
</div>
<div class="info_text">
<p>What direction does the land face?</p>

<select name="Aspect" class="styled-select" id="vegetation12" onchange="UpdateCost()">
<option value="2">North</option>
<option value="1">Northeast</option>
<option value="2">Northwest</option>
<option value="4">South</option>
<option value="3">Southeast</option>
<option value="5">Southwest</option>
<option value="1">East</option>
<option value="3">West</option>
</select>
</div>
</div>
</div>

 

<div class="calc_step shadow">
<div class="info_text">
<h1>Step 3</h1>
<h3>Slope</h3>

<p>What is the degree of slope on your land? <a class="html5lightbox light" href="../images/Degree-Protractor.jpg">Click here for help</a>.</p>
</div>
 

<div class="info_text"><select name="Slope" class="styled-select" id="vegetation13" onchange="UpdateCost()">
<option value="0">0</option>
<option value="2">0 - 10&#176;</option>
<option value="4">11&#176; - 20&#176;</option>
<option value="6">21&#176; - 30&#176;</option>
<option value="8">31&#176;+</option>
</select>
</div>
 
</div>

 

<hr>

<div class="calc_step shadow">

<div class="info_text">
<h1>Total</h1> 


<input type="text" id="totalcost" value="">

<p> Compare the total number to the matrix at the bottom to find out how much space you must clear around each side of your home.* If you have questions please <a href="mailto:<?php echo $fire_email;?>">email the Fire Department</a> or schedule a <a href="hazard_assessment.php">Hazard Assessment</a>.</p>
<div id="result">
<h1>Matrix:</h1>

<h3>1 - 7:</h3>
<p>
<strong>30' x 30' x 30' x 30'</strong> <br/>
Clear vegetation in a 30 foot perimeter around your house.
</p>
<hr>

<h3>8 - 14:</h3>
<p>
<strong>30' x 30' x 30' x 50'</strong><br/>
Clear vegetation in a 30 foot perimeter around your house. Clear 50 feet either uphill or downhill of your residence based on vegetation types listed above. Typically more defensible space is required downhill of your home. </p>

<hr>

<h3>15 - 25:</h3>
<p>
<strong>50' x 50' x 50' x 100'</strong><br/>
Clear vegetation in a 50 foot perimeter aroundyour house. Clear 100 feet either uphill or downhill of your residence based on vegetation types listed above. Typically more defensible space is required downhill of your home.</p>
<hr>
<p>*If some of this space lies on an adjacent property contact your neighbor to help inform them in how they can prepare their property in case of a wildfire.</p>

<!-- LINK TO GOOGLE MAPS API  
<p><a href="../mapping/geocoding_address.html"><strong>Click here to visualize 30' - 100' diameters on your parcel.</strong></a></p>

-->

</div>
</div>
</div>

</form>
</div>


<!-- JAVASCRIPT JQUERY -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        
 <!-- JAVASCRIPT JQUERY MENU -->
<script src="../js/menu2.js" type="text/javascript"></script>


<script type="text/javascript">
// Using JQuery selectors to add onFocus and onBlur event handlers

$(document).ready( function() {

  // Add the "focus" value to class attribute 
  $('ul.checkbox li').focusin( function() {
    $(this).addClass('focus');
  }
  );

  // Remove the "focus" value to class attribute 
  $('ul.checkbox li').focusout( function() {
    $(this).removeClass('focus');
  }
  );

}
);
</script>
    
    
    
    
    
    </div>

</div>

<?php include('../footer.php'); ?> 

 </body>
    
</html>
