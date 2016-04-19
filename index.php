<?php require_once "index.logic.php";?>

<!DOCTYPE html>
<html>
<head>
	<title> </title>

</head>
<body>
		<?= $content["content"]; ?>

		<?php function getContent($content) {
   			 return $content;
		}

		echo getContent();
		?>
</body>
</html>
