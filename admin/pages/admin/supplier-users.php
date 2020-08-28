
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
                            SUPPLIER USERS
                            </h2>

                            <ul class="header-dropdown m-r--5">
<div class="js-modal-buttons">
                                  <button type="button" class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float" data-color="light-green">
                                        <i class="material-icons">add</i>
                                    </button>
</div>





                            </ul>
                        </div>
                        <div class="body">

<?

//$db = new Ashtel();

$adminlist = new Adminuser();
$check = new Usefullclass();
$result = $adminlist->getAllSupplierUsers();

?>



                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Phone</th>
                                          <th>Status</th>
                                          <th>Verified</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Verified</th>
                                            <th>Action</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <?php
                                      if (! empty($result)) {
                                          foreach ($result as $k => $v) {
                                              ?>
                                        <tr>
                                            <td><?=$result[$k]["name"]; ?></td>
                                            <td><?=$result[$k]["email"]; ?></td>
                                            <td><?=$result[$k]["phone"]; ?></td>
                                            <td><?=$check->checkActive($result[$k]["status"]); ?></td>
                                             <td><?=$check->checkStatus($result[$k]["admin_verified"]); ?></td>
                                            <td>
                                              <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          Take Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">
                                             <div class="js-modal-buttons">
                                               <button class="btn bg-orange waves-effect  waves-float" data-color="orange">
                                              Edit
                                            </button>
                                            </div>
                                          </a></li>
                                            <li>
                    <a href="javascript:void(0);" class=" waves-effect waves-block">
    <div class="js-sweetalert">
  <button class="btn bg-red waves-effect  waves-float" data-type="confirm">Delete</button>
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

            <div class="body">
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
                        <button type="button" class="btn btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                data-animate-enter="animated rotateInDownRight" text="User is deleted" data-animate-exit="animated rotateOutDownRight" data-color-name="bg-red">
                        User account is Deleted
                        </button>
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
