Defensible Space Calculator for Wildfires
by Sean L Mooney 


ABOUT THIS PROJECT

This reponsive web application was built with the Mill Valley Fire Department in an effort to calculate the hazard assessment matrix of vegetation fuels, provide residents with forms to communicate with the fire department, and consolidate fire prevention resources.

The files are written in PHP, HTML, CSS, and Javascript. 


CUSTOMIZE THIS APPLICATION

To customize this for your use you can edit variables in the "constants.php" file located in the root directory.


Variables to be edited in "constants.php":

BASEREF: Editing this to match your site's domain will allow all navigation to function relative to your site root.

   $baseref='http://www.yoursite.com';


EMAIL ADDRESS: Replace the email address in "constants.php" with the email address you want all forms to be sent to.
 
   $fire_email='email@youremail.com';


PHONE NUMBER: Replace the phone number in "constants.php" with the phone number of your Fire Department.
 
   $fire_phone='(555) 555-5555';


LOGO IMAGE: Replace the path in the "constants.php" file with the path to your logo file.

   $logo_img='[PATH TO YOUR LOGO FILE]';



ADDITIONAL CUSTOMIZATION

Fuel Types:

If you have different fuel types than used in this file you can edit the HTML directly in the matrix_calculator.php file (located in forms folder) to reflect the fuel types you encounter. Corresponding images are located in the "images" folder. This site uses a shadow box effect to open images as an overlay on the site.


Additional Resources:

The existing resources are all Marin County based. You can edit the name and hyperlink in the "index.php" file.


Background image:

The background image on the home page is defined in the "mobile.css" file in "#bradning."


Feel free to fork this project and develop it for your own fire department or make improvements. The project was built quickly and without interacting with a database to save time in development. That would probably be my next step if I had more time to develop it.

