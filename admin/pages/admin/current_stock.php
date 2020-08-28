
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
                        CURRENT STOCK
                            </h2>


                        </div>
                        <div class="body">

<?php

//$db = new Ashtel();

$inventory = new Inventory();
$check = new Usefullclass();
$result = $inventory->getAllProducts();

?>



                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                          <th>Brand Name</th>
                                            <th>Product Name</th>

                                                <th>Available Stock</th>
                                            <th>Sold Stocks</th>

                                            <th>Receaved Stock</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Brand Name</th>
                                            <th>Product Name</th>

                                                <th>Available Stock</th>
                                            <th>Sold Stocks</th>

                                            <th>Receaved Stock</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                      if (! empty($result)) {
                                          foreach ($result as $k => $v) {
                                              ?>
                                        <tr>
                                                      <td><?=$inventory->getBrandNameById($result[$k]["brand_id"]); ?></td>
                                            <td width="400"><?=$result[$k]["name"]; ?></td>
                                            <td><?=$result[$k]["id"]; ?></td>
                                              <td><?=$result[$k]["id"]; ?></td>

                        <td><?=$result[$k]["id"]; ?></td>
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
