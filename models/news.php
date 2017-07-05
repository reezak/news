<?php
	require_once __DIR__ . '/../functions/sql.php';

	function News_getAll() {
		$sql = "SELECT title, text FROM news";
		return sql_get_data($sql);
	}

	function News_insert($title, $text) {
		$sql = "INSERT INTO news (title, text) VALUES " . "('" . $title . "', '" . $text . "')";
		return sql_set_data($sql);
	}
?>