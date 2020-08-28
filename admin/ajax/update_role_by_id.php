<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});
$role_id= $_POST['roleid'];
$name=$_POST['rolename'];
$status=$_POST['status'];
$updaterole= new Adminuser();
$updaterole->updateRole($role_id,$name,$status);

if($result)
{
  return 1;
}
else {
  return 0;
}

?>
