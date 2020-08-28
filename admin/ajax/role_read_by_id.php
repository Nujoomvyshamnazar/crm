<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});
$role_id= $_POST['role_id'];
$addrole= new Adminuser();
$result=$addrole->editRoleById($role_id);

if (! empty($result)) {
    foreach ($result as $k => $v) {
//$response=$result;
$response['id']=$result[$k]["id"];
$response['name']=$result[$k]["role_name"];
$response['status']=$result[$k]["status"];
    }
  }


  echo json_encode($response);
?>
