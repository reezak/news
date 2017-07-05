<?php
	function sql_connect() {
		mysql_connect('localhost', 'root', '');
		mysql_select_db('news');	
	}

	function sql_get_data($sql) {
		sql_connect();
		$res = mysql_query($sql);
		$data = [];
		while (false != ($row = mysql_fetch_assoc($res))) {
			$data[] = $row;
		}
		return $data;
	}

	function sql_set_data($sql) {
		sql_connect();
		return mysql_query($sql);
	}

/* paste into views
	$res = sql_get_data("SELECT title, text FROM news");

	foreach ($res as $news) {
		echo $news['title'] . ': ' . $news['text'];
		echo "\n";
	}
*/
?>
