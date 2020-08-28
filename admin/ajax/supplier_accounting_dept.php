<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$sales_contact= new Adminuser();
 $user_id=$_POST['userid'];
$genders=$_POST['genders'];
$adfname=$_POST['adfname'];
$adlname=$_POST['adlname'];
$adphone=$_POST['adphone'];
$admobile=$_POST['admobile'];
$ademail=$_POST['ademail'];
$adskype=$_POST['adskype'];
$success=$sales_contact->addAccountingDept($genders,$adfname,$adlname,$adphone,$admobile,$ademail,$adskype,$user_id  );
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
