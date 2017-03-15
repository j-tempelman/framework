<?php
require(ROOT . "model/BirthdayModel.php");
function index(){
	$data = getDataList();
	
	render('birthday/index', array("datas" => $data));
}
?>