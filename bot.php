<?php
header("Content-type: text/plain; charset=utf-8");
if ($_GET['meme'] == NULL) {
	echo "Hej!";
}

else if ($_GET['meme'] == "Random" || $_GET['meme'] ==  "random") {
	$memes = [
	"<img src ='thxobama.jpg'>",
	"<img src = 'https://media.giphy.com/media/10we3R8dLZQ7hS/giphy.gif'>",
	"<img src = 'meme1.jpg'>"];
	echo $memes[random_int(0, count($memes) - 1)];
}

else if ($_GET['meme'] == "Obama" || $_GET['meme'] ==  "obama") {
	echo "<img src ='thxobama.jpg' border='0'>";
}

else if ($_GET['meme'] == "Doge" || $_GET['meme'] == "doge") {
	$doges [
	"<img src='https://media.giphy.com/media/10we3R8dLZQ7hS/giphy.gif'>"];

	echo $doges[random_int(0, count($doges) - 1)];
}

else if ($_GET['meme'] == "rip" || $_GET['meme'] == "Rip") {
	echo "<img src ='meme1.jpg'>";
}

