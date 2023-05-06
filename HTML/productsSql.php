<?php
	require "../connection.php";

	$sql = "SELECT ID, name, price, img1 FROM product";

	$statement = $pdo->prepare($sql);
	$statement->execute();
	$data = $statement->fetchAll();
	$pdo = null;

?>