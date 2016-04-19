<?php

$db = new mysqli('localhost','root','','doomla');

$page = isset($_GET['page']) ? $_GET['page'] : "home";

$sql = "SELECT * FROM `pagecontent` WHERE page='$page'";

$result = $db->query($sql);

if ($result->num_rows > 0) {
	$content = $result->fetch_assoc();
} else {
	$content['content'] = "<h1>Error</h1><p>Pagina bestaat niet</p>";
}

?>
