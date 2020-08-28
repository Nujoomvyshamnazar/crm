<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$updateprofile= new Adminuser();
 $user_id=$_POST['userid'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
$success=$updateprofile->updateSupplierProfile($name,$email,$phone,$user_id);
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
