<?php
	$db = new mysqli($_ENV["MYSQL_HOST"], $_ENV["MYSQL_USER"], $_ENV["MYSQL_PASSWORD"], $_ENV["MYSQL_DB"]);

	if (isset($_POST['msgContent'])) {
		$db->query("INSERT INTO messages VALUES(null, '{$_POST['msgContent']}')");
		echo $db->error;
	}

	echo "<form method='POST'>";
	echo "<textarea name='msgContent'></textarea></br>";
	echo "<button type='submit'>Dodaj wiadomość</button>";
	echo "</form>";

	$messages = $db->query("SELECT * FROM messages");
	while ($message = $messages->fetch_assoc()) {
		echo "<div>{$message['message']}</div>";
	}