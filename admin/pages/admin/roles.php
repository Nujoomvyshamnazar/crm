
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
                            ROLES
                            </h2>

                            <ul class="header-dropdown m-r--5">


                                  <button type="button" class="btn bg-green btn-circle-lg waves-effect waves-circle waves-float" data-color="light-green" data-toggle="modal" data-target="#defaultModal">
                                        <i class="material-icons" >add</i>
                                    </button>






                            </ul>
                        </div>
                        <div class="body">

<?

//$db = new Ashtel();

$adminlist = new Adminuser();
$check = new Usefullclass();
$result = $adminlist->getAllroles();

?>



                            <div class="table-responsive" >

                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                          <th>Name</th>

                                          <th>Status</th>

                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>

                                            <th>Status</th>

                                            <th>Action</th>

                                        </tr>
                                    </tfoot>
                                  <tbody id="dataTable">
                                      <?php
                                      if (! empty($result)) {
                                          foreach ($result as $k => $v) {
                                              ?>
                                        <tr>
                                            <td><?=$result[$k]["role_name"]; ?></td>


                                            <td><?=$check->checkActive($result[$k]["status"]); ?></td>

                                            <td>
                                              <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          Take Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">
                                             <div class="js-modal-buttons">
                                               <button class="btn bg-orange waves-effect  waves-float" data-color="orange" onclick="editRole(<?=$result[$k]["id"]; ?>)" data-toggle="modal" data-target="#defaultModalupdate">
                                              Edit
                                            </button>
                                            </div>
                                          </a></li>
                                            <li>
                    <a href="javascript:void(0);" class=" waves-effect waves-block">
    <div class="js-sweetalert">
  <button class="btn bg-red waves-effect  waves-float" onclick="deleteRole(<?=$result[$k]["id"]; ?>)" data-placement-from="bottom" data-placement-align="left"
          data-animate-enter="" data-animate-exit="" data-color-name="alert-danger">Delete</button>
</div>   </a>

                   </li>


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

        </div>
    </section>
    <script>

    </script>
