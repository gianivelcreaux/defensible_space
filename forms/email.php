<!DOCTYPE HTML>
<!--[if IE 8]> <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Testing Form</title>






<link href="jquery.idealforms.min.css" rel="stylesheet" type="text/css" />

</head>

<body>



 <div class="eightcol last">

    <!-- Begin Form -->

    <form action="mailer.php" method="post" enctype="text/plain" id="my-form">

        <section name="Step 1">
          <div>
            <h2>Essential:</h2>
            <p>The Mill Valley Fire Department is currently offering a free residential fire hazard assessment to assist Mill Valley residents in identifying risk to their homes from wildfires. For more information on this valuable service, please fill out the form bel</p>
          </div>
          <div><label>Contact name:</label><input id="name" name="name" type="text"/></div>
 
          <div><label>E-Mail:</label><input id="email" name="email" data-ideal="required email" type="email"/></div>
          <div><label>Date:</label><input name="date" class="datepicker" data-ideal="date" type="text" placeholder="mm/dd/yyyy"/></div>
          <div><label>Phone:</label><input type="tel" name="phone" data-ideal="phone"/></div>
          <div><label>Address:</label><input name="address"  type="text"/></div>
        </section>

      

      <div><hr/></div>

      <div>
        <button type="submit">Submit</button>
        <button id="reset" type="button">Reset</button>
      </div>

    </form>

    <!-- End Form -->

  </div>




<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.min.js"></script>
<script src="js/min/jquery.idealforms.js"></script>
<script>



  var options = {

    onFail: function() {
      alert( $myform.getInvalid().length +' invalid fields.' )
    }
    
  };

  var $myform = $('#my-form').idealforms(options).data('idealforms');

  $('#reset').click(function(){ $myform.reset().fresh().focusFirst() });
  $myform.focusFirst();

</script>


</body>
</html>