<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'danielharvey.com' // Put you mail domain here
	,
	'Daniel Harvey' // Put your site name / form name here
	,
	'daniel.harvey@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@danielharvey.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
