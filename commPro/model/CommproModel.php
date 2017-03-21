<?php
function createPhone($data){
	 $db = openDatabaseConnection();

	 $query = $db->prepare('INSERT INTO phones (`serial`, `imei`, `type`, `brandid`) VALUES (:serial, :imei, :type, :brandid)');

	 $query->bindParam(':serial', $data['serial']);
	 $query->bindParam(':imei', $data['imei']);
	 $query->bindParam(':type', $data['type']);
	 $query->bindParam(':brandid', $data['brandid']);

	 $query->execute();

}
?>