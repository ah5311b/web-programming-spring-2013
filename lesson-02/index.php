<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lesson 2 Homework</title>
</head>

<body style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">

<h2 style="color: #090;">Lesson 2 Homework: Input Form and Date Calculation</h2>

<p>To find out if you are old enough to drive with full privileges in the state of California, please submit your birthdate.</p>

<?php
//check to see if the page is loading from a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
	
// if there was a POST, create a confirmation page
// the age function calculates age in years based on a date passed as an argument
function age($birthdate) {
return (strtotime('now') - strtotime($birthdate))/(60*60*24*365);
}	

// assign the result of calling the age( ) function passing the input date as the argument to a variable
$age = age($_POST['birthdate']);

// determine if the value of the variable is greater than 18
if ($age > 18) {

// if so, display a positive result , including the age and a smiley face image
?>
<h4>You are <?php echo intval($age) ?>: old enough to drive! Please do so responsibly.</h4>
<img src="http://i.telegraph.co.uk/multimedia/archive/01381/trafficlights_1381131c.jpg" width=230 height=144 />
<?php

} else {

//otherwise display a negative result, with a frowny face
?>
<h4>Sorry, you are <?php echo intval($age) ?>: too young. However, you can drive provisionally between the ages of 16-18, get a ride, or take public transport.</h4>
<img src=http://www.quirkycottages.com/Editor/assets/stop%20sign.gif width=100 height=100 />
<?php
}

} else {
?>
<form action="" method="post">
<input name="birthdate" type="date">
<input name="" type="submit">
</form>
<?php
}
?>

</body>
</html>