<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dat Bot</title>
</head>
<body>
<?php 
if ($_GET['name'] == NULL):
?>
<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="Send!">
</form>

<?php 
else:

$name = $_GET['name'];
$half_name_length = (int) (mb_strlen($name) / 2);
$remaining_chars = mb_strlen($name) - $half_name_length;
$name_end = mb_substr($name, $half_name_length, $remaining_chars);
$name_beginning = mb_substr($name, 0, $half_name_length);
$botname = $name_end . $name_beginning;
?>

<p><strong><?= $botname ?>:</strong> Hej <?= $name ?></p>

<form>
	<label for="fråga">Ask me anything<br></label>
	<input type="text" name="reply">
	<input type="hidden" name="name" value="<?= $name ?>">
	<input type="submit" value="Reply!">
</form>

<?php endif ?>

</body>
</html>
