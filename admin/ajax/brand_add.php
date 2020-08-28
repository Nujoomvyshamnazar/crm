<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$addbrand= new Inventory();
$brand_name=$_POST['brandname'];
$status=$_POST['status'];
$success=$addbrand->addBrand($brand_name,$status);
if($success)
{
  echo 1;
}
else {
  echo 0;
}
?>
