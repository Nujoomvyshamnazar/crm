<?
require_once ("../class/ADagency.php");
spl_autoload_register(function ($class) {
    include_once "../class/". $class . ".php";
});



$inventory = new Inventory();
$check = new Usefullclass();
$result = $inventory->getSupplierOffers();
?>

      <?php
      if (! empty($result)) {
          foreach ($result as $k => $v) {
              ?>
              <tr  <? if($result[$k]["admin_verified"]==1) {?>class="success" <?} ?>>>
                    <td><?=$result[$k]["username"]; ?></td>
                      <td width="400"><?=$result[$k]["product_name"]; ?></td>


                  <td><?=$result[$k]["stock"]; ?></td>
                      <td><?=$result[$k]["budget"]; ?></td>

                                <td><?=$check->checkVarified($result[$k]["admin_verified"]); ?></td>
                                <td>
                                  <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              Take Action <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">
                                  <div class="js-sweetalert">
                                <button class="btn bg-green waves-effect  waves-float" data-type="confirm" onclick="acceptSupplierOffer(<?=$result[$k]["id"]; ?>)">Approve</button>
                              </div>
                              </a></li>
                                <li>
        <a href="javascript:void(0);" class=" waves-effect waves-block">
<div class="js-sweetalert">
<button class="btn bg-red waves-effect  waves-float" data-type="confirm" onclick="rejectSupplierOffer(<?=$result[$k]["id"]; ?>)">Reject</button>
</div>   </a>                         </li>


                            </ul>
                        </div>

                                </td>


              </tr>
<? }} ?>
