$(document).ready(function(){
	// jQuery.ajax() gör en GET förfrågan till bot.php
	var jqxhr = jQuery.ajax( "bot.php" )
	// Funktionerna done, fail och always är "länkade" (_chained_)
	// så att nästa funktion får information från den föregående.
	// Som argument får funktionerna en anonym funktion som kan ses
	// som ett kodblock {} som kan ges information via ett argument
	// -> namnet på en variabel innanför parentesen för function()
	.done(function(meddelande) {
		// I denna anonyma funktion kommer svaret från sidan bot.php
		// in som ett argument. Koden i funktionen done() kallar på denna
		// anonyma funktion med svaret från bot.php som argument.
		// Innehållet i svaret kan man komma åt genom variabeln med
		// namnet meddelande
		console.log( "success" );
		console.log( meddelande );
		$("#chat_log").prepend( meddelande + "<br>" );
	})
	.fail(function() {
		console.log( "error" );
	})
	.always(function() {
		console.log( "complete" );
	});

	jQuery("#meme_form").submit(function(event) {
		
		var user_meme = event.target[0].value;

		jQuery.ajax("bot.php", {data: {meme: user_meme}})
		.done(function(meddelande) {
			console.log(meddelande);
			$("#chat_log").prepend( meddelande + "<br>" );
		});

		event.preventDefault();
	});
});