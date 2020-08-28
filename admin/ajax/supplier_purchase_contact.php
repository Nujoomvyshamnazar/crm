<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$sales_contact= new Adminuser();
 $user_id=$_POST['userid'];
$genders=$_POST['genders'];
$pcfname=$_POST['pcfname'];
$pclname=$_POST['pclname'];
$pcphone=$_POST['pcphone'];
$pcmobile=$_POST['pcmobile'];
$pcemail=$_POST['pcemail'];
$pcskype=$_POST['pcskype'];
$success=$sales_contact->addPurchaseContact($genders,$pcfname,$pclname,$pcphone,$pcmobile,$pcemail,$pcskype,$user_id  );
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
