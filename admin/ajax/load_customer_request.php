<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$loadcustomer= new Customer();

$check = new Usefullclass();
$inventory = new Inventory();
$result = $loadcustomer->getAllCustomerDetails();
?>

      <?php
      if (! empty($result)) {
          foreach ($result as $k => $v) { ?>
            <tr  <? if($result[$k]["admin_verified"]==1) {?>class="success" <?} ?>>>
            <td><?=$result[$k]["name"]; ?></td>
        <td><?=$result[$k]["email"]; ?></td>
        <td><?=$result[$k]["phone_number"]; ?></td>
        <td><?=$inventory->getProNameById($result[$k]["product_id"]); ?></td>

        <td><?=$result[$k]["required_stock"]; ?></td>
        <td><?=$result[$k]["comment"]; ?></td>
        <td><?=$check->checkRequest($result[$k]["status"]); ?></td>
        <td>
        <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Take Action <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
        <li><a href="javascript:void(0);" class=" waves-effect waves-block">
        <div class="js-modal-buttons">
        <button class="btn bg-orange waves-effect  waves-float" data-color="orange" onclick="acceptCustomerEnquiry(<?=$result[$k]["id"];?>)">
        Accept
        </button>
        </div>
        </a></li>
        <li>
        <a href="javascript:void(0);" class=" waves-effect waves-block">
        <div class="js-sweetalert">
        <button class="btn bg-red waves-effect  waves-float" data-type="confirm" onclick="rejectCustomerEnquiry(<?=$result[$k]["id"];?>)">Reject</button>
        </div>   </a>                         </li>


        </ul>
        </div>

        </td>

          <?
              ?>
</tr>
<? }} ?>
