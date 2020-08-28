<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="uploads/images/user-lg.jpg" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anees</div>
                <div class="email">anees@gmail.com</div>
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
                    <a href="home.php?page=supplier">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li>


          <!--  <li>
                <a href="home.php?page=available-stock">
                    <i class="material-icons">fact_check</i>
                    <span>Available stock</span>
                </a>
            </li>

            <li>
                <a href="home.php?page=supplier-offer">
                    <i class="material-icons">published_with_changes</i>
                    <span>Supplier Offers</span>
                </a>
            </li>

            <li>
                <a href="home.php?page=supplier-requests">
                    <i class="material-icons">announcement</i>
                    <span>Supplier Requests</span>
                </a>
            </li>-->


<li>

  <div id="supplier" style="text-align:center;">


                                        <h2 class="card-inside-title" style="font-size:18px;text-align:center;">Quick Search</h2>
<div style="width:150px; margin:0 auto;[B]padding:20px 0;[/B]">
                                                      <div class="form-group" style="margin-bottom: 5px;">
                                                          <div class="form-line">
                                                              <input type="text" class="form-control" placeholder="Product Name">
                                                          </div>
                                                      </div>
                                                  </div>



  <div class="btn-group btn-group-lg" role="group" aria-label="Large button group" style="">
                                          <button type="button" class="btn bg-pink waves-effect" style="margin-right:2px;margin-bottom:2px;" onclick="location.href = 'home.php?page=available-stock&active=offers';">OFFERS</button>

                                          <button type="button" class="btn bg-pink waves-effect" style="margin-left:2px;margin-bottom:2px;" onclick="location.href = 'home.php?page=available-stock&active=requests';">REQUESTS</button>
                                      </div>
                                        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group" style="width: 175px;">
                                        <a href="home.php?page=available-stock" style="padding: 0px 0px;">  <button type="button" class="btn bg-red btn-block btn-lg waves-effect" >ADVANCE SEARCH</button></a>
                                        </div>
      </div>
</li>
<li>

  <div id="supplier" style="text-align:center;">


                                        <h2 class="card-inside-title" style="font-size:18px;text-align:center;">Quick Add</h2>
<div style="width:150px; margin:0 auto;[B]padding:20px 0;[/B]">
                                                      <div class="form-group" style="margin-bottom: 5px;">
                                                          <div class="form-line">
                                                              <input type="text" class="form-control" placeholder="Product Name">
                                                          </div>
                                                      </div>
                                                  </div>

<div style="width:150px; margin:0 auto;[B]padding:20px 0;[/B]">
                              <div class="form-group" style="margin-bottom: 5px;">
                                  <div class="form-line">
                      <input type="text" class="form-control" placeholder="Quantity">
              </div>
            </div>
          </div>

  <div class="btn-group btn-group-lg" role="group" aria-label="Large button group" style="">
                                          <button type="button" class="btn bg-pink waves-effect" style="margin-right:2px;margin-bottom:2px;" onclick="location.href = 'home.php?page=supplier-offer&active=offers';">OFFERS</button>

                                          <button type="button" class="btn bg-pink waves-effect" style="margin-left:2px;margin-bottom:2px;" onclick="location.href = 'home.php?page=supplier-offer&active=requests';">REQUESTS</button>
                                      </div>
                                        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group" style="width: 175px;">
                                        <a href="home.php?page=supplier-offer" style="padding: 0px 0px;">  <button type="button" class="btn bg-red btn-block btn-lg waves-effect" >ADVANCED ADD</button></a>
                                        </div>
      </div>
</li>


  <li>
<div id="supplier" style="text-align:center;">



        </div>

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
