<?php
function getDataList(){
	$db = openDatabaseConnection();
	
	$query = $db->prepare("SELECT * FROM birthdays ORDER BY month, day");
	
	$query->execute();
	
	return $query->fetchAll();
	
}

?>