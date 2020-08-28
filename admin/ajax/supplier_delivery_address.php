<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$delivery_address= new Adminuser();
 $user_id=$_POST['userid'];
$da_name=$_POST['daname'];
$da_address=$_POST['daaddress'];
$da_postalcode=$_POST['dapostalcode'];
$da_city=$_POST['dacity'];
$da_country=$_POST['dacountry'];
$success=$delivery_address->addDeliveryAddress($da_name,$da_address,$da_postalcode,$da_city,$da_country,$user_id  );
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
