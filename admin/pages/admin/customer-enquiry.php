
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <section class="content">
        <div class="container-fluid">


            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                        CUSTOMER ENQUIRY
                            </h2>


                        </div>
                        <div class="body">

<?

//$db = new Ashtel();
$inventory = new Inventory();
$customers= new Customer();
$check = new Usefullclass();

$result = $customers->getAllCustomerDetails();

?>



                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                          <th>name</th>
                                            <th>Email</th>

                                            <th>Phone</th>
<th>Product</th>
<th>Stock Request</th>
<th>Comment</th>
        <th>status</th>                                    <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>name</th>
                                            <th>Email</th>

                                            <th>Phone</th>
<th>Product</th>
<th>Stock Request</th>
<th>Comment</th>
<th>status</th>
                                            <th>Action</th>

                                        </tr>
                                    </tfoot>
                                    <tbody id="dataTable">
                                      <?php
                                      if (! empty($result)) {
                                          foreach ($result as $k => $v) {
                                              ?>
                                        <tr  <? if($result[$k]["status"]==1) {?>class="success" <?} ?>>
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
                                               <button class="btn bg-green waves-effect  waves-float" data-color="orange" onclick="acceptCustomerEnquiry(<?=$result[$k]["id"];?>)">
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
                                        </tr>
<? }} ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- For Material Design Colors -->
            <!-- For Material Design Colors -->
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Coming soon
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script>


function loadCustomeRequest()
{
$("#dataTable").load("ajax/load_customer_request.php");
}

loadCustomeRequest();

function acceptCustomerEnquiry(id)
{
  var request_id=id;

  $.ajax({
    url: "ajax/acceptcustomerenquiry.php",
    type: "POST",
    data: {
      request_id: request_id

    },
    cache: false,
    success: function(dataResult){
loadCustomeRequest();
    swal("Accepted", "Admin Accepted Customer Request", "success");

    }
  });


}

function rejectCustomerEnquiry(id)
{
  var request_id=id;
  $.ajax({
    url: "ajax/rejectcustomerenquiry.php",
    type: "POST",
    data: {
      request_id: request_id

    },
    cache: false,
    success: function(dataResult){
      loadCustomeRequest();
  swal("Rejected", "Admin Rejected Customer Request", "error");
//loadRole();

    }
  });

}

</script>
