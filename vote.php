<?php
include("config.php"); // Veritabani Baglandi.
$yazi = $db->query("select * from post where id '1'")->fetch();
echo $yazi['name'].""
 ?>