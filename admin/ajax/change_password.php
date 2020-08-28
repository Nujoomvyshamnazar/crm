<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$change_password= new Adminuser();
 $user_id=$_POST['userid'];
$oldpwd=$_POST['oldpwd'];
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];

$success=$change_password->updatePassword($confirmpassword,$user_id  );
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
