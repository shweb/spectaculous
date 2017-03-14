<! DOCTYPE html>

<html lang ="en">
<head>

	<meta charset ="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="descirption" content="">
	<meta name="author" content="">
	
	<link href="\bootstrap\css\bootstrap.css" rel="stylesheet">
</head>

<body>

<?php

	require 'form.php';
	
	require 'BootstarpForm.php';
	
	$form = new BootstarpForm($_POST);
	
?>


<form action="#" method="post">
<?php
	
	echo $form->input('username');
	
	echo $form->input('prenom');
	
	echo $form->submit('mail');
?>

