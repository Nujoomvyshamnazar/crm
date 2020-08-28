<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});

$request_id=$_POST['request_id'];
$supplier = new Supplier();
$result = $supplier->rejectOffer($request_id);
if($result)
{
echo 1;
}
else {
  echo 0;
}
?>
