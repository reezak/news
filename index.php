<?php
	require __DIR__ . '/models/news.php';

	$res = News_getAll();

	require __DIR__ . '/views/index.php';
?>