<?php

require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});
$role_id= $_POST['role_id'];
$addrole= new Adminuser();
$result=$addrole->deleteRole($role_id);

if($result)
{
  echo 1;
}
else {
  echo 0;
}
?>
