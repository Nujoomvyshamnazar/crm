
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
                            <li role="presentation" class="active"><a href="#home" data-toggle="tab">SUBMIT OFFERS</a></li>
                            <li role="presentation" ><a href="#profile" data-toggle="tab">SUBMIT REQUESTS</a></li>
                            <?
                          }
                          ?>


                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                      Coming Soon
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                  Coming Soon
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>






</section>
