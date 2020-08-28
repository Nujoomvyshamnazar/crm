
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
                      SUPPLIER OFFERS
                            </h2>


                        </div>
                        <div class="body">

<?php

//$db = new Ashtel();

$inventory = new Inventory();
$check = new Usefullclass();
$result = $inventory->getSupplierOffers();

?>



                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
            <th>Supplier Name</th>
                                          <th>Product Name</th>

                                              <th>Qty</th>
                                                      <th>Offer Price</th>

                                                                            <th>verified</th>
                                                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
  <th>Supplier Name</th>
                                            <th>Product Name</th>

                                                <th>Qty</th>
                                                        <th>Offer Price</th>

                                                                        <th>verified</th>
                                                                          <th>Action</th>

                                        </tr>
                                    </tfoot>
                                    <tbody id="dataTable">
                                      <?php
                                      if (! empty($result)) {
                                          foreach ($result as $k => $v) {

                                              ?>
                                        <tr <? if($result[$k]["admin_verified"]==1) {?>class="success" <?} ?>>
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

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <script>
    function loadSupplierOffer()
    {
    $("#dataTable").load("ajax/load_supplier_Offer.php");
    }

    loadSupplierOffer();

    function acceptSupplierOffer(id)
    {
      var request_id=id;

      $.ajax({
        url: "ajax/acceptsupplieroffer.php",
        type: "POST",
        data: {
          request_id: request_id

        },
        cache: false,
        success: function(dataResult){
        loadSupplierOffer();
        swal("Accepted", "Admin Accepted Supplier Offer", "success");

        }
      });


    }

    function rejectSupplierOffer(id)
    {
      var request_id=id;
      $.ajax({
        url: "ajax/rejectsupplieroffer.php",
        type: "POST",
        data: {
          request_id: request_id

        },
        cache: false,
        success: function(dataResult){
        loadSupplierOffer();
      swal("Rejected", "Admin Rejected Supplier Offer", "error");
    //loadRole();

        }
      });

    }

    </script>
