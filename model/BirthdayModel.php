<?php
function getDataList(){
	$db = openDatabaseConnection();
	
	$query = $db->prepare("SELECT * FROM birthdays ORDER BY month");
	
	$query->execute();
	
	return $query->fetchAll();
	
}

?>