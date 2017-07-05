<?php
	require_once __DIR__ . '/../models/news.php';
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		foreach ($res as $news) {
			echo $news['title'] . ': ' . $news['text'];
			echo "\n";
		}
	?>	
</body>
</html>
	