<?php include('../constants.php'); ?>
<!DOCTYPE html>
<html>
 
<head>

<meta charset="utf-8"><title>Hazard Assessment Request</title>
<meta content="php, contact, form, thinking" name="keywords">
<meta content="Contact us and let us know if we can help you out further." name="description">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/mobile.css" />


<style>

#form_wrapper {
	margin: auto;	
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
font-size: 100%;
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
input[type=submit] {
width: 100%;
background: #90ad39; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzkwYWQzOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ5JSIgc3RvcC1jb2xvcj0iIzVkOTkxYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUxJSIgc3RvcC1jb2xvcj0iIzYxYTMwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM2MGEzMjUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #90ad39 0%, #5d991a 49%, #61a300 51%, #60a325 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#90ad39), color-stop(49%,#5d991a), color-stop(51%,#61a300), color-stop(100%,#60a325)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #90ad39 0%,#5d991a 49%,#61a300 51%,#60a325 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #90ad39 0%,#5d991a 49%,#61a300 51%,#60a325 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #90ad39 0%,#5d991a 49%,#61a300 51%,#60a325 100%); /* IE10+ */
background: linear-gradient(to bottom,  #90ad39 0%,#5d991a 49%,#61a300 51%,#60a325 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#90ad39', endColorstr='#60a325',GradientType=0 ); /* IE6-8 */


border: 1px solid #360;
font-size: 1.5em;
color: white;
margin: 27px auto;
}
input[type=submit]:hover {


background: #9dd53a; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzlkZDUzYSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iI2ExZDU0ZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUxJSIgc3RvcC1jb2xvcj0iIzgwYzIxNyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3Y2JjMGEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #9dd53a 0%, #a1d54f 50%, #80c217 51%, #7cbc0a 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#9dd53a), color-stop(50%,#a1d54f), color-stop(51%,#80c217), color-stop(100%,#7cbc0a)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%); /* IE10+ */
background: linear-gradient(to bottom,  #9dd53a 0%,#a1d54f 50%,#80c217 51%,#7cbc0a 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=0 ); /* IE6-8 */


cursor: pointer;
}
input[type=submit]:active {
background-color: #4A6F00;
}
 
h1 {
	text-align: center;
 	font-family: 'Source Sans Pro', Helvetica, "Helvetica Neue",  Arial, "Lucida Grande", sans-serif;
	font-size: 1.5em;
	color: #fff;
	text-shadow: 1px 1px 1px #000;
	margin-top: 0;
	padding-top: 15px;
}
body {
padding: 0;

}
.input_field {
	width: 100%;	
}
</style>
 
</head>
 
<body>

<?php include('../nav.php');?>

<div class="page" >
 
<div id="content-secondary">
<div id="form_wrapper">

<h1>Hazard Assessment<br>Request Form</h1>
<form action="mailer_hazard.php" method="POST">

<div class="info_text">
<p>The Fire Department is currently offering a free residential fire hazard assessment to assisst residents in identifying risk to their homes from wildfires. For more information on this valuable service please fill out the information below.</p>
</div>

<div class="input_field">
<p>Contact Name</p>
<input name="name" type="text"> <br> </div>

<div>


<div>
<p>Address</p>
<input name="address" type="text"> <br> </div>

<div>
<p>Telephone</p>
<input name="phone" type="text"> <br> </div>

<div>
<p>E-Mail (Optional)</p>
<input name="email" type="text">
<br>
</div>


<div>
<input name="submit" type="submit" value="Send!"> </div>
</form>

</div>



<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.min.js"></script>
<script src="js/min/jquery.idealforms.js"></script>
<script>



  var options = {

    onFail: function() {
      alert( $myform.getInvalid().length +' invalid fields.' )
    },

    inputs: {
      'password': {
        filters: 'required pass',
      },
      'username': {
        filters: 'required username',
        data: {
          //ajax: { url:'validate.php' }
        }
      },
      'file': {
        filters: 'extension',
        data: { extension: ['jpg'] }
      },

      'comments': {
        filters: 'min max',
        data: { min: 50, max: 200 }
      },
      'states': {
        filters: 'exclude',
        data: { exclude: ['default'] },
        errors : {
          exclude: 'Select a State.'
        }
      },
      'langs[]': {
        filters: 'min max',
        data: { min: 2, max: 3 },
        errors: {
          min: 'Check at least <strong>2</strong> options.',
          max: 'No more than <strong>3</strong> options allowed.'
        }
      }
    }
  };

  var $myform = $('#my-form').idealforms(options).data('idealforms');

  $('#reset').click(function(){ $myform.reset().fresh().focusFirst() });
  $myform.focusFirst();

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

</div>
</div>

 <?php include('../footer.php'); ?> 
 
</body>
 
</html>