<?php 
	require (ROOT . '/model/CommproModel.php');
	function add ($brandid = 1){
		render('commpro/index', array ('brandid'=>$brandid));

	}

	function save(){
		if(isset($_POST['type'])){
			
			$data=array();
			$data['type']= $_POST['type'];
			$data['serial']= $_POST['serial'];
			$data['imei']= $_POST['imei'];
			$data['brandid']= $_POST['brandid'];
	
			createPhone($data);

		}
	
	}
 ?>