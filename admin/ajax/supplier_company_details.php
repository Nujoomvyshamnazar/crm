<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$company_details= new Adminuser();
 $user_id=$_POST['userid'];
$cd_name=$_POST['cdname'];
$cd_address=$_POST['cdaddress'];
$cd_postalcode=$_POST['cdpostalcode'];
$cd_city=$_POST['cdcity'];
$cd_country=$_POST['cdcountry'];
$cd_email=$_POST['cdemail'];
$cd_phone=$_POST['cdphone'];
$cd_vatnumber=$_POST['cdvatnumber'];
$cd_rno=$_POST['cdrno'];
$cd_website=$_POST['cdwebsite'];
$success=$company_details->addCompanyDetails($cd_name,$cd_address,$cd_postalcode,$cd_city,$cd_country,$cd_phone,$cd_vatnumber,$cd_email,$cd_rno, $cd_website, $user_id  );
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
