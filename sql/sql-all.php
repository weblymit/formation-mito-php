<?php
//1-  Query to get all games
$sql = "SELECT * FROM products ORDER BY name";
//2- Prépare la query (preformatter)
$query = $pdo->prepare($sql);
//3 - Execute ma requette
$query->execute();
//4 - stock my query in variable
$products = $query->fetchAll();
// debug_array(count($products));
// $rows = $query->rowCount();
// // debug_array($rows);
