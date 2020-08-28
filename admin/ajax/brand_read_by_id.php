<?php
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});
$brand_id= $_POST['brand_id'];
$editbrand= new Inventory();
$result=$editbrand->editBrandById($brand_id);

if (! empty($result)) {
    foreach ($result as $k => $v) {
//$response=$result;
$response['brandid']=$result[$k]["id"];
$response['name']=$result[$k]["name"];
$response['status']=$result[$k]["status"];
    }
  }


  echo json_encode($response);
?>
