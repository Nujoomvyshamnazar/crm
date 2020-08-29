
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

        <?

        //$db = new Ashtel();

        $inventory = new Inventory();
        $check = new Usefullclass();
        $result = $inventory->getSupplierOffers();
        $result2 = $inventory->getSupplierRequests();
        $countries=$check->getAllCountrys();
        $brands = $inventory->getAllBrands();
        $models = $inventory->getAllModels();
        $series = $inventory->getAllSeries();
        $products = $inventory->getAllProducts();
        $productcondition = $inventory->getAllProductConditions();
        $stock_availability=$inventory->getAllPhysicalStock();
        $retailer_type=$inventory->getAllRetailerType();


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
                            <li role="presentation" class="active"><a href="#home" data-toggle="tab"><h2>SUPPLIER APPLICATION FORM</h2></a></li>

                            <?
                          }
                          ?>


                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                              <div class=" ">

                                <div class="body">
                                <h2 class="card-inside-title">Choose Application Type</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <select class="form-control show-tick" id="supplier_type">
                                                  <option>Select Type</option>
                                                        <option value="1">SUPPLIER OFFER</option>
                                                        <option value="2">SUPPLIER REQUEST</option>
                                                    </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <h2 class="card-inside-title">Choose Product</h2>
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">

                                            <input type="text" class="form-control" placeholder="Type Your Brand" id="brand" name="brand" value="" onkeyup="fetchBrand()">
                                              <input type="hidden" id="brandid" name="brandid">
                                            <div id="brandresult" style="margin: -30px 0px 0px -1px;
    font-size: 16px;
    line-height: 25px;
    text-transform: uppercase;
    text-align: left;
    background-color: #fff;
    position: absolute;
    top: 71px;
    z-index: 999;
    padding: 0px 20px 20px 20px;
    cursor: grabbing;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <input type="text" class="form-control" placeholder="Type Your Model" id="model" name="model" value="" onkeyup="fetchModel()">
                                                <input type="hidden" id="modelid" name="modelid">
                                              <div id="modelresult" style="margin: -30px 0px 0px -1px;
      font-size: 16px;
      line-height: 25px;
      text-transform: uppercase;
      text-align: left;
      background-color: #fff;
      position: absolute;
      top: 71px;
      z-index: 999;
      padding: 0px 20px 20px 20px;
      cursor: grabbing;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <input type="text" class="form-control" placeholder="Type Your Series" id="series" name="series" value="" onkeyup="fetchSeries()">
                                                <input type="hidden" id="seriesid" name="seriesid">
                                              <div id="seriesresult" style="margin: -30px 0px 0px -1px;
      font-size: 16px;
      line-height: 25px;
      text-transform: uppercase;
      text-align: left;
      background-color: #fff;
      position: absolute;
      top: 71px;
      z-index: 999;
      padding: 0px 20px 20px 20px;
      cursor: grabbing;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                              <input type="text" class="form-control" placeholder="Type Your Product" id="product" name="product" value="" onkeyup="fetchProduct()">
                                                <input type="hidden" id="productid" name="productid">
                                              <div id="productresult" style="margin: -30px 0px 0px -1px;
      font-size: 16px;
      line-height: 25px;
      text-transform: uppercase;
      text-align: left;
      background-color: #fff;
      position: absolute;
      top: 71px;
      z-index: 999;
      padding: 0px 20px 20px 20px;
      cursor: grabbing;"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">

  <input type="text" class="form-control" placeholder="Type Your Product" id="status" value="Not Negotiable" name="status">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
<input type="text" class="form-control" placeholder="Quantity" id="quantity" name="quantity">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select class="form-control show-tick" id="supplier_type">
                                              <option>Select Type</option>
                                                    <option value="1">SUPPLIER OFFER</option>
                                                    <option value="2">SUPPLIER REQUEST</option>
                                                </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select class="form-control show-tick" id="supplier_type">
                                              <option>Select Type</option>
                                                    <option value="1">SUPPLIER OFFER</option>
                                                    <option value="2">SUPPLIER REQUEST</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select class="form-control show-tick" id="supplier_type">
                                              <option>Select Type</option>
                                                    <option value="1">SUPPLIER OFFER</option>
                                                    <option value="2">SUPPLIER REQUEST</option>
                                                </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <select class="form-control show-tick" id="supplier_type">
                                              <option>Select Type</option>
                                                    <option value="1">SUPPLIER OFFER</option>
                                                    <option value="2">SUPPLIER REQUEST</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              </div>


                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>






</section>
<script>
function placebrand(id,name)
{
brand = $('#brand').val(name);
$('#brandresult').html('');
}


function placemodel(id,name)
{
model = $('#model').val(name);
$('#modelresult').html('');
}


function placeseries(id,name)
{
series = $('#series').val(name);
$('#seriesresult').html('');
}

function placeProduct(id,name)
{

  product = $('#product').val(name);
  $('#productresult').html('');
}
function fetchBrand()
{
var brandval = $("#brand").val();
$.ajax({
  url: "ajax/loadbrandbysearch.php",
  type: "POST",
  data: {
    brandval:brandval,


  },
  cache: false,
  success: function(dataResult){

$("#brandresult").html(dataResult);

  }
});
}

function fetchModel()
{

  var modelval = $("#model").val();
  $.ajax({
    url: "ajax/loadmodelbysearch.php",
    type: "POST",
    data: {
      modelval:modelval,


    },
    cache: false,
    success: function(dataResult){

  $("#modelresult").html(dataResult);

    }
  });
}

function fetchSeries()
{
  var seriesval = $("#series").val();
  $.ajax({
    url: "ajax/loadseriesbysearch.php",
    type: "POST",
    data: {
      seriesval:seriesval,


    },
    cache: false,
    success: function(dataResult){

  $("#seriesresult").html(dataResult);

    }
  });
}

function fetchProduct()
{
  var productval = $("#product").val();
  $.ajax({
    url: "ajax/loadproductbysearch.php",
    type: "POST",
    data: {
      productval:productval,


    },
    cache: false,
    success: function(dataResult){

  $("#productresult").html(dataResult);

    }
  });
}
</script>
