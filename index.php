<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dat Bot</title>
</head>
<body>
<?
php if ($_GET['name'] == NULL):
?>
<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="Send!">
</form>

<?php endif ?>

</body>
</html>
