<?php

include('../functions/Ashtel_crm.php');
$out = array('error' => false);
$db = new Ashtel();
$db->connect();

$crud = 'read_admin_users';

if(isset($_GET['crud'])){
	$crud = $_GET['crud'];
}




if($crud == 'read_admin_users'){
$db->select('tbrl_users','id,name,email,phone,status,admin_verified',NULL,NULL,'id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$admin_users = $db->getResult();
$members = array();
foreach($admin_users as $admin_user){
		array_push($members,$admin_user);
}

	$out['members'] = $members;

}









  header("Content-type: application/json");
  echo json_encode($out);
  die();
?>
