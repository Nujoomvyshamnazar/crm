
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
        <div class="block-header">
            <h2>Available Stocks</h2>
        </div>
        <?

        //$db = new Ashtel();

        $inventory = new Inventory();
        $check = new Usefullclass();
        $result = $inventory->getSupplierOffers();
        $result2 = $inventory->getSupplierRequests();
        $brands = $inventory->getAllBrands();
        $models = $inventory->getAllModels();
        $series = $inventory->getAllSeries();
        $products = $inventory->getAllProducts();
        $countries=$check->getAllCountrys();

        ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">

                    <div class="body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs tab-nav-right" role="tablist">
                          <? if(isset($_GET['active']))
                          {
                            ?>
                            <li role="presentation" <?php if($_GET['active']=="offers"){?>class="active"<? } ?>><a href="#home" data-toggle="tab">OFFERS</a></li>
                            <li role="presentation" <?php if($_GET['active']=="requests"){?>class="active"<? } ?>><a href="#profile" data-toggle="tab">REQUESTS</a></li>
                            <?
                          }
                          else {
                            ?>
                            <li role="presentation" class="active"><a href="#home" data-toggle="tab">OFFERS</a></li>
                            <li role="presentation" ><a href="#profile" data-toggle="tab">REQUESTS</a></li>
                            <?
                          }
                          ?>


                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                              <!-- Advanced Select -->
                              <div class="row clearfix">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <div class="">

                                          <div class="body">
                                              <div class="row clearfix">
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>Brand</b>
                                                      </p>
                                                      <select class="form-control show-tick">
                                                          <option value="" style="z-index:999;">Select Brand</option>
                                                        <?php
                                                        if (! empty($brands)) {
                                                            foreach ($brands as $k => $v) {
                                                                ?>
                                                          <option value="<?=$brands[$k]["id"]; ?>" style="z-index:999;"><?=$brands[$k]["name"]; ?></option>

                                                        <? } } ?>
                                                      </select>

                                                  </div>
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>Model</b>
                                                      </p>
                                                      <select class="form-control show-tick" id="model">
                                                                <option value="" style="z-index:999;">Select Model</option>
                                                        <?php
                                                        if (! empty($models)) {
                                                            foreach ($models as $k => $v) {
                                                                ?>
                                                          <option value="<?=$models[$k]["id"]; ?>"><?=$models[$k]["name"]; ?></option>
                                                      <? } } ?>
                                                      </select>

                                                  </div>
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>Series</b>
                                                      </p>
                                                      <select class="form-control show-tick" id="series">
                                                                <option value="" style="z-index:999;">Select Series</option>
                                                        <?php
                                                        if (! empty($series)) {
                                                            foreach ($series as $k => $v) {
                                                                ?>
                                                          <option value="<?=$series[$k]["id"]; ?>"><?=$series[$k]["series_name"]; ?></option>
                                                      <? } } ?>
                                                      </select>

                                                  </div>
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>Products</b>
                                                      </p>
                                                      <select class="form-control show-tick" id="products">
                                                                <option value="" style="z-index:999;">Select Product</option>
                                                        <?php
                                                        if (! empty($products)) {
                                                            foreach ($products as $k => $v) {
                                                                ?>
                                                          <option value="<?=$products[$k]["id"]; ?>"><?=$products[$k]["name"]; ?></option>
                                                      <? } } ?>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="row clearfix">
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>All Company</b>
                                                      </p>
                                                      <select class="form-control show-tick">
                                                          <option>Mustard</option>
                                                          <option>Ketchup</option>
                                                          <option>Relish</option>
                                                      </select>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>Coundition</b>
                                                      </p>
                                                      <select class="form-control show-tick">
                                                          <option>Mustard</option>
                                                          <option>Ketchup</option>
                                                          <option>Relish</option>
                                                      </select>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>Country</b>
                                                      </p>
                                                      <select class="form-control show-tick" id="country">
                                                                <option value="" style="z-index:999;">Select Country</option>
                                                        <?php
                                                        if (! empty($countries)) {
                                                            foreach ($countries as $k => $v) {
                                                                ?>
                                                          <option value="<?=$countries[$k]["id"]; ?>"><?=$countries[$k]["name"]; ?></option>
                                                      <? } } ?>
                                                      </select>
                                                  </div>
                                                  <div class="col-md-3">
                                                      <p>
                                                          <b>Physical Stock</b>
                                                      </p>
                                                      <select class="form-control show-tick">
                                                          <option>Mustard</option>
                                                          <option>Ketchup</option>
                                                          <option>Relish</option>
                                                      </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- #END# Advanced Select -->


                              <div class="row clearfix">


                                <?php
                                if (! empty($result)) {
                                    foreach ($result as $k => $v) {
                                        ?>

                                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                      <div class="card">

                                          <div class="body">
                                            <div class="row clearfix">
                                                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                    <div class="model" style="margin-top:10px;margin-bottom:10px;"><h6 style="font-size:11px;"><?=$result[$k]["part_number"]; ?> </h6></div>
                                                    <div class="product"><h6 style="font-size:11px;"><?=$result[$k]["product_name"]; ?> </h6></div>
                                                    <div class="available font-bold col-pink"><h6 style="font-size:11px;">Available <?=$result[$k]["stock"]; ?> >></h6></div>
                                                    <div class="flag"><img src="https://www.countryflags.io/<?=$result[$k]["iso"]; ?>/shiny/32.png"></div>
                                                    <div class="chat align-left">
                                                      <a href="https://api.whatsapp.com/send?phone=+9809036628amp;text=<?=$result[$k]["product_name"]; ?>" style="text-align:left;size:62px;">
<h6>
<div class="demo-google-material-icon"> <i class="material-icons" style="font-size:12px;">chat</i> <span class="icon-name">Start Chat</span> </div></h6></a>
</div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <div class="new align-right">
                      <span class="badge bg-red">new</span>
                    </div>
                      <img src="uploads/images/<?=$result[$k]["image"]; ?>" width="80" />
                    </div>
                                          </div>
                                          </div>

                                      </div>
                                  </div>

                                <? } }?>




                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                              <div class="row clearfix">
                                  <div class="col-md-3">
                                      <b>Brand</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                          <b>Model</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                                <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Series</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                                  <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Products</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>All Company</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Condition</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Country</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                            <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
    <option>Select Countrys</option>


                                                                                      <option>India</option>
                                                                                      <option>China</option>
                                                                                      <option>UAE</option>




                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Physical Stock</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                      <i class="material-icons">search</i>
                                          </span>
                                          <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                            </select>
                                          </div>
                                      </div>
                                  </div>
                                  <!--<div class="col-md-3">
                                      <b>IP Address</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">computer</i>
                                          </span>
                                          <div class="form-line">
                                              <input type="text" class="form-control ip" placeholder="Ex: 255.255.255.255">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Credit Card</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">credit_card</i>
                                          </span>
                                          <div class="form-line">
                                              <input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Email Address</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">email</i>
                                          </span>
                                          <div class="form-line">
                                              <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <b>Serial Key</b>
                                      <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="material-icons">vpn_key</i>
                                          </span>
                                          <div class="form-line">
                                              <input type="text" class="form-control key" placeholder="Ex: XXX0-XXXX-XX00-0XXX">
                                          </div>
                                      </div>
                                  </div>-->
                              </div>
                              <div class="row clearfix">


                                <?php
                                if (! empty($result2)) {
                                    foreach ($result2 as $k => $v) {
                                        ?>

                                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                      <div class="card">
                                          <div class="header bg-red">
                                              <h2>
                                                <?=$result[$k]["product_name"]; ?>    </h2>
                      <hr>
                                                <small style="font-size:20px">Available: <?=$result[$k]["stock"]; ?>
                                                </small>


                                              <ul class="header-dropdown m-r--5">
                                                  <li class="dropdown">

                                                  </li>
                                              </ul>
                                          </div>
                                          <div class="body">
                                            <div class="row clearfix">
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="https://api.whatsapp.com/send?phone=+9809036628amp;text=<?=$result[$k]["product_name"]; ?>" style="text-align:center;size:62px;">
                      <i class="material-icons" style="color:green;text-align:center;font-size:62px;">maps_ugc</i>
                      </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <img src="uploads/images/<?=$result[$k]["image"]; ?>" width="100" />
                    </div>
                                          </div>
                                        </div>

                                      </div>
                                  </div>

                                <? } }?>




                              </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>






</section>
