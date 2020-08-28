<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$addrole= new Adminuser();
$roll_name=$_POST['rolename'];
$status=$_POST['status'];
$success=$addrole->addRole($roll_name,$status);
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
