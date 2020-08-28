<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$directors= new Adminuser();
 $user_id=$_POST['userid'];
$genders=$_POST['genders'];
$dfname=$_POST['dfname'];
$dlname=$_POST['dlname'];
$daddress=$_POST['daddress'];
$dpostalcode=$_POST['dpostalcode'];
$dcity=$_POST['dcity'];
$dcountry=$_POST['dcountry'];
$demail=$_POST['demail'];
$dphone=$_POST['dphone'];
$dpassport=$_POST['dpassport'];
$success=$directors->addDirectors($genders,$dfname,$dlname,$daddress,$dpostalcode,$dcity,$dcountry,$dphone,$dpassport,$demail,$user_id  );
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
