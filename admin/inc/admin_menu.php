<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="uploads/images/user-lg.jpg" width="48" height="48" alt="User" />
            </div>

            <?php
$adminlist = new Adminuser();

             ?>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nujoom Nazar</div>
                <div class="email">nujoom@gmail.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="home.php?page=profile"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>

                        <li role="separator" class="divider"></li>
                        <li><a href="home.php?page=logout"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="home.php?page=admin">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>




                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">group</i>
                        <span>User Management</span>
                    </a>
                    <ul class="ml-menu">
                      <li >
                          <a href="home.php?page=roles">
                              <i class="material-icons">pages</i>
                              <span>Role</span>
                          </a>
                      </li>

                      <li >
                          <a href="home.php?page=users">
                              <i class="material-icons">person_add</i>
                              <span>Users</span>
                          </a>
                      </li>

                      <li >
                          <a href="home.php?page=suppliers">
                              <i class="material-icons">person_add</i>
                              <span>Suppliers</span>
                          </a>
                      </li>


            </ul>

            <li>

              <li>
                  <a href="javascript:void(0);" class="menu-toggle">
                      <i class="material-icons">add_shopping_cart</i>
                      <span>Inventory Management</span>
                  </a>
                  <ul class="ml-menu">
                    <li>
                          <a href="home.php?page=brands">
                              <i class="material-icons">style</i>
                              <span>brands</span>
                          </a>
                      </li>

                      <li>
                          <a href="home.php?page=models">
                              <i class="material-icons">bookmark</i>
                              <span>models</span>
                          </a>
                      </li>

                      <li>
                          <a href="home.php?page=series">
                              <i class="material-icons">bookmarks</i>
                              <span>Series</span>
                          </a>
                      </li>

                      <li>
                          <a href="home.php?page=products">
                              <i class="material-icons">shopping_cart</i>
                              <span>products</span>
                          </a>
                      </li>


          </ul>



            <li>
                <a href="home.php?page=available-stock">
                    <i class="material-icons">fact_check</i>
                    <span>Available stock</span>
                </a>
            </li>

            <li>
                <a href="home.php?page=supplier-offers">
                    <i class="material-icons">card_giftcard</i>
                    <span>Supplier Offers</span>
                </a>
            </li>

            <li>
                <a href="home.php?page=supplier-requests">
                    <i class="material-icons">assignment</i>
                    <span>Supplier Requests</span>
                </a>
            </li>
            <li>
                <a href="home.php?page=customer-enquiry">
                    <i class="material-icons">announcement</i>
                    <span>Customer Enquiry</span>
                </a>
            </li>

      <!--      <li>
                <a href="home.php?page=logout">
                    <i class="material-icons">clear</i>
                    <span>Logout</span>
                </a>
            </li>-->

        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy;   <?php echo date("Y"); ?>  <a href="javascript:void(0);">ASHTEL GROUP</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <!--    <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>-->
            <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
        </ul>
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active in active" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                      <!--  <ul class="setting-list">
                    <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>-->

                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label><input type="checkbox"><span class="lever"></span></label>
                            </div>
                        </li>
                  <!--      <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label><input type="checkbox" checked><span class="lever"></span></label>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>
