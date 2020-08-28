<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});
$brand_id= $_POST['brandid'];
$name=$_POST['brandname'];
$status=$_POST['status'];
$updaterole= new Inventory();
$result = $updaterole->updateBrand($brand_id,$name,$status);

if($result)
{
  return 1;
}
else {
  return 0;
}

?>
