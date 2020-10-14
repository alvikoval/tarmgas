<?php
	try
	{ 
		$pdo = new PDO
		(
			'mysql:host=localhost;dbname=test',
			'root', 
			'1707',
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
		); 
	} 
	catch (PDOException $e) 
	{ 
		echo $e;
	}
?>