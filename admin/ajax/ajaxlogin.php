<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$user = new Adminuser();
$result = $user->processLogin($username, $password);


if (! empty($result)) {
    foreach ($result as $k => $v) { ?>

<?=$result[$k]["email"];?>

      <? } }?>
