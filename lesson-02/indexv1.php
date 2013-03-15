<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lesson 2 Homework</title>
</head>

<body style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
<h2>Lesson 2 Homework</h2>
<p>My name is Aashna Hossain. I have worked as a writer/editor in the past and am taking this class to enhance my professional skills, so as to maintain their relevancy for current requirements in publishing and communications.</p>

<p>It has been <span style="color: #F90">

<?php

function age($chknwngs) {
	return (strtotime('now') - strtotime($chknwngs))/(60*60*24);
}

$chknwngs = age('2013-01-20');
echo intval($chknwngs);

?>

</span>days since I have had chicken wings.</p>

</body>
</html>