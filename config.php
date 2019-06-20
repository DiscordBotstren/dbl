<?php
try {
    $db = new PDO("mysql:host=sql205.epizy.com;dbname=epiz_23193514_sananes", "	bYh7s2Pf", "");
}catch (PDOException $e) {
	print $e->getMessage();
}
 ?>