<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$sales_contact= new Adminuser();
 $user_id=$_POST['userid'];
$genders=$_POST['genders'];
$scfname=$_POST['scfname'];
$sclname=$_POST['sclname'];
$scphone=$_POST['scphone'];
$scmobile=$_POST['scmobile'];
$scemail=$_POST['scemail'];
$scskype=$_POST['scskype'];
$success=$sales_contact->addSalesContact($genders,$scfname,$sclname,$scphone,$scmobile,$scemail,$scskype,$user_id  );
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
