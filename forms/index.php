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

    <form id="my-form">

        <section name="Step 1">
          <div>
            <h2>Essential:</h2>
            <p>What? Custom file inputs? Oh yeah!</p>
          </div>
          <div><label>Username:</label><input id="username" name="username" type="text"/></div>
          <div><label>Password:</label><input id="pass" name="password" type="password"/></div>
          <div><label>E-Mail:</label><input id="email" name="email" data-ideal="required email" type="email"/></div>
          <div><label>Date:</label><input name="date" class="datepicker" data-ideal="date" type="text" placeholder="mm/dd/yyyy"/></div>
          <div><label>Image:</label><input id="file" name="file" multiple type="file"/></div>
          <div><label>Website:</label><input name="website" data-ideal="url" type="text"/></div>
        </section>

        <section name="Step 2">
          <div>
            <h2>Options:</h2>
            <p>Wow, nice radios and checkboxes!</p>
          </div>
          <div id="languages">
            <label>Languages:</label>
            <label><input type="checkbox" name="langs[]" value="English"/>English</label>
            <label><input type="checkbox" name="langs[]" value="Chinese"/>Chinese</label>
            <label><input type="checkbox" name="langs[]" value="Spanish"/>Spanish</label>
            <label><input type="checkbox" name="langs[]" value="French"/>French</label>
          </div>
          <div><label>Radios:</label>
            <label><input type="radio" name="radio" checked/>One</label>
            <label><input type="radio" name="radio"/>Two</label>
            <label><input type="radio" name="radio"/>Three</label>
          </div>
        </section>

        <section name="Step 3">
          <div>
            <h2>Contact:</h2>
            <p>What about that handsome select!</p>
          </div>
          <div><label>Phone:</label><input type="tel" name="phone" data-ideal="phone"/></div>
          <div><label>State:</label>
          <select id="states" name="states">
            <option value="default">&ndash; Select a State &ndash;</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </div>
        <div><label>Zip:</label><input type="text" name="zip" data-ideal="zip"/></div>
        <div><label>Comments:</label><textarea id="comments" name="comments"></textarea></div>
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


</body>
</html>