
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
        <div class="row clearfix">
      <!--      <div class="col-xs-12 col-sm-2">
                <div class="card profile-card">
                    <div class="profile-header">&nbsp;</div>
                    <div class="profile-body">
                        <div class="image-area">
                            <img src="uploads/images/user-lg.jpg" alt="AdminBSB - Profile Image" />
                        </div>
                        <div class="content-area">
                            <h3>Marc K. Hammond</h3>

                            <p>Supplier</p>
                        </div>
                    </div>

                </div>


            </div>-->
            <div class="col-xs-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div>
                          <ul class="nav nav-tabs" role="tablist">

                                <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab" data-toggle="tab">Profile</a></li>
                                <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
        <li role="presentation"><a href="#company_details" aria-controls="settings" role="tab" data-toggle="tab">Company Details</a></li>
    <li role="presentation"><a href="#delivery_address" aria-controls="settings" role="tab" data-toggle="tab">Delivery Address</a></li>
        <li role="presentation"><a href="#directors" aria-controls="settings" role="tab" data-toggle="tab">Directors</a></li>
                        <li role="presentation"><a href="#sales_contact" aria-controls="settings" role="tab" data-toggle="tab">Sales Contact</a></li>

                        <li role="presentation"><a href="#purchase_contact" aria-controls="settings" role="tab" data-toggle="tab">Purchase Contact</a></li>
                          <li role="presentation"><a href="#accounting_dept" aria-controls="settings" role="tab" data-toggle="tab">Accounting Department</a></li>
                      </ul>

                      <?

                      //$db = new Ashtel();

                      $adminlist = new Adminuser();
                      $check = new Usefullclass();
                      $user_id=$_SESSION['userid'] ;
                      $result = $adminlist->getSupplierUsers($user_id);


                      ?>

                            <div class="tab-content">

                          <!--      <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img src="../../images/user-lg.jpg" />
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Marc K. Hammond</a>
                                                    </h4>
                                                    Shared publicly - 26 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-heading">
                                                    <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>. I require little more information to use effectively.</p>
                                                </div>
                                                <div class="post-content">
                                                    <img src="../../images/profile-post-image.jpg" class="img-responsive" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">thumb_up</i>
                                                        <span>12 Likes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">comment</i>
                                                        <span>5 Comments</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">share</i>
                                                        <span>Share</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Type a comment" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default panel-post">
                                        <div class="panel-heading">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img src="../../images/user-lg.jpg" />
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        <a href="#">Marc K. Hammond</a>
                                                    </h4>
                                                    Shared publicly - 01 Oct 2018
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="post">
                                                <div class="post-heading">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </div>
                                                <div class="post-content">
                                                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/10r9ozshGVE" frameborder="0" allowfullscreen=""></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">thumb_up</i>
                                                        <span>125 Likes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">comment</i>
                                                        <span>8 Comments</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="material-icons">share</i>
                                                        <span>Share</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" placeholder="Type a comment" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <?php
                                if (! empty($result)) {
                                    foreach ($result as $k => $v) {
                                        ?>

                                <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                                    <form class="form-horizontal">
                                        <input type="hidden" id="userid" value="<?= $user_id?>">
                                        <div class="form-group">
                                            <label for="Name" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-10">

                                                    <input type="image" src="uploads/images/placeholder.png" id="profileDisplay" onClick="triggerClick()" alt="Upload Profile Image" style="display: block; width: 60%, margin: 10px auto; border-radius:50%">
                                                    <label for="Name" class="control-label" style="padding-left:65px;padding-top:4px;">Profile Image</label>
                                                    <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display:none">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label for="Name" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?=$result[$k]["name"]; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$result[$k]["email"]; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputExperience" class="col-sm-2 control-label">Phone</label>

                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="phone" class="form-control" id="phone" name="phone" placeholder="phone" value="<?=$result[$k]["phone"]; ?>" required>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="button" class="btn btn-success" onclick="updateProfile()">UPDATE</button>
                                            </div>
                                        </div>
                                    </form>
</div>
<script>
function triggerClick()
{
  // alert('yes');
  document.querySelector('#profileImage').click();
}
// function displayImage(e)
// {
//   if(e.files[0])
//   {
//     var reader= new FileReader();
//     reader.onload=function(e)
//     {
//       document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
//
//     }
//       reader.readAsDataURL(e.file[0]);
//   }
// }
function updateProfile()
{

 var userid= $("#userid").val();
var name= $("#name").val();
var email =$( "#email").val();
var phone =$( "#phone").val();
if(name!="" && email!="" && phone!=""){
			$.ajax({
				url: "ajax/supplier_profile.php",
				type: "POST",
				data: {
					name: name,
					email: email,
          phone: phone,
           userid: userid

				},
				cache: false,
				success: function(dataResult){

  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadRole();
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
}


</script>
<div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
    <form class="form-horizontal">
      <input type="hidden" id="userid" value="<?= $user_id?>">
        <input type="hidden" id="oldpwd" value="<?=$result[$k]["password"]; ?>">
        <div class="form-group">
            <label for="OldPassword" class="col-sm-3 control-label">Old Password</label>
            <div class="col-sm-9">
                <div class="form-line">
                    <input type="password" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="NewPassword" class="col-sm-3 control-label">New Password</label>
            <div class="col-sm-9">
                <div class="form-line">
                    <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password (Confirm)</label>
            <div class="col-sm-9">
                <div class="form-line">
                    <input type="password" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)" required>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="button" class="btn btn-danger" onclick="Password()">SUBMIT</button>
            </div>
        </div>
    </form>
</div>
<script>
function Password()
{
// alert('yes');
  var userid= $("#userid").val();
 var oldpwd= $("#oldpwd").val();
var oldpassword= $("#OldPassword").val();
var newpassword =$( "#NewPassword").val();
var confirmpassword =$( "#NewPasswordConfirm").val();
if(oldpwd==oldpassword)
{

  if(newpassword==confirmpassword)
  {

    			$.ajax({
    				url: "ajax/change_password.php",
    				type: "POST",
    				data: {
    					oldpwd: oldpwd,
    					oldpassword: oldpassword,
              newpassword: newpassword,
              confirmpassword: confirmpassword,
               userid: userid

    				},
    				cache: false,
    				success: function(dataResult){

      $(".modal-backdrop.in").hide();
    showSuccessMessage();
    loadRole();
    				}
    			});

  }
  else
 {
       alert('Your new and Retype Password is not match !!!');
   }
}
else
  {
      alert('Your old password is wrong !!!');
  }


}


</script>

<div role="tabpanel" class="tab-pane fade in" id="company_details">
                                    <form class="form-horizontal">
                                      <input type="hidden" id="userid" value="<?= $user_id?>">
                                        <div class="form-group">
                                            <label for="CompanyName" class="col-sm-2 control-label">Company Name</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_name" name="companyname" placeholder="Company Name" value="<?=$result[$k]["cd_company_name"]; ?> " required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_address" name="address" placeholder="Address" value=" <?=$result[$k]["cd_address"]; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="PostalCode" class="col-sm-2 control-label">Postal Code</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_postalcode" name="postalcode" placeholder="Postal Code" value="<?=$result[$k]["cd_postal_code"]; ?> "  required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="City" class="col-sm-2 control-label">City</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_city" name="city" placeholder="City" value=" <?=$result[$k]["cd_city"]; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Country" class="col-sm-2 control-label">Country</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_country" name="country" placeholder="Country" value="<?=$result[$k]["cd_country"]; ?> " required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" id="cd_email" name="Email" placeholder="Email" value="<?=$result[$k]["cd_email_address"]; ?> " required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Phone" class="col-sm-2 control-label">Phone</label>

                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="phone" class="form-control" id="cd_phone" name="phone" placeholder="Phone" value="<?=$result[$k]["cd_phone_number"]; ?> "  required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="VATNumber" class="col-sm-2 control-label">VAT Number</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_vatnumber" name="vatnumber" placeholder="VAT Number" value=" <?=$result[$k]["cd_vat_number"]; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="RegisterNumber" class="col-sm-2 control-label">Commercial register No.</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_rno" name="rno" placeholder="Commercial Register Number" value="<?=$result[$k]["cd_commercial_reg"]; ?> " required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Website" class="col-sm-2 control-label">Website</label>
                                            <div class="col-sm-10">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" id="cd_website" name="website" placeholder="Website" value="<?=$result[$k]["cd_website"]; ?> " required>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="button" class="btn btn-success" onclick="companyDetails()">UPDATE</button>
                                            </div>
                                        </div>
                                    </form>
  </div>
  <script>
  function companyDetails()
  {
    // alert('yes');
 var userid= $("#userid").val();
   var cdname= $("#cd_name").val();
  var cdaddress= $("#cd_address").val();
  var cdpostalcode =$( "#cd_postalcode").val();
  var cdcity =$( "#cd_city").val();
  var cdcountry= $("#cd_country").val();
  var cdemail =$( "#cd_email").val();
  var cdphone =$( "#cd_phone").val();
  var cdvatnumber= $("#cd_vatnumber").val();
  var cdrno =$( "#cd_rno").val();
  var cdwebsite =$( "#cd_website").val();
  if(cdname!="" && cdaddress!="" && cdpostalcode!="" && cdcity!="" && cdcountry!="" && cdemail!="" && cdphone!="" && cdvatnumber!="" && cdrno!="" && cdwebsite!=""  ){
  			$.ajax({
  				url: "ajax/supplier_company_details.php",
  				type: "POST",
  				data: {
  					cdname: cdname,
  					cdaddress: cdaddress,
            cdpostalcode: cdpostalcode,
             cdcity: cdcity,
             cdcountry: cdcountry,
             cdemail: cdemail,
              cdphone: cdphone,
               cdvatnumber: cdvatnumber,
               cdrno: cdrno,
               cdwebsite: cdwebsite,
               userid: userid


  				},
  				cache: false,
  				success: function(dataResult){
 // alert(userid);
    $(".modal-backdrop.in").hide();
  showSuccessMessage();
  loadRole();
  				}
  			});
  		}
  		else{
  			alert('Please fill all the field !');
  		}
  }


  </script>
  <div role="tabpanel" class="tab-pane fade in" id="delivery_address">
                                    <form class="form-horizontal">
                                      <input type="hidden" id="userid" value="<?= $user_id?>">
                                      <div class="form-group">
                                          <label for="Name" class="col-sm-2 control-label">Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="da_name" name="name" placeholder="Name" value="<?=$result[$k]["da_name"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Address" class="col-sm-2 control-label">Address</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="da_address" name="address" placeholder="Address" value=" <?=$result[$k]["da_address"]; ?>"  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="PostalCode" class="col-sm-2 control-label">Postal Code</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="da_postalcode" name="postalcode" placeholder="Postal Code" value="<?=$result[$k]["da_postal"]; ?> "   required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="City" class="col-sm-2 control-label">City</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="da_city" name="city" placeholder="City" value="<?=$result[$k]["da_city"]; ?> "  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Country" class="col-sm-2 control-label">Country</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="da_country" name="country" placeholder="Country" value="<?=$result[$k]["da_country"]; ?> "  required>
                                              </div>
                                          </div>
                                      </div>


                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="button" class="btn btn-success" onclick="deliveryAddress()">UPDATE</button>
                                            </div>
                                        </div>
                                    </form>
</div>
<script>
function deliveryAddress()
{
  // alert('yes');
var userid= $("#userid").val();
 var daname= $("#da_name").val();
var daaddress= $("#da_address").val();
var dapostalcode =$( "#da_postalcode").val();
var dacity =$( "#da_city").val();
var dacountry= $("#da_country").val();

if(daname!="" && daaddress!="" && dapostalcode!="" && dacity!="" && dacountry!=""){
      $.ajax({
        url: "ajax/supplier_delivery_address.php",
        type: "POST",
        data: {
          daname: daname,
          daaddress: daaddress,
          dapostalcode: dapostalcode,
           dacity: dacity,
           dacountry: dacountry,
             userid: userid


        },
        cache: false,
        success: function(dataResult){
// alert(userid);
  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadRole();
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
}


</script>



<div role="tabpanel" class="tab-pane fade in" id="directors">
                                  <form class="form-horizontal">
                                      <input type="hidden" id="userid" value="<?= $user_id?>">
                                      <div class="form-group">
                                          <label for="NameSurname" class="col-sm-2 control-label"></label>
                                          <div class="col-sm-10">
                                          <div class="demo-radio-button">
                                            <input name="group1" type="radio" value="1" id="radio_1" checked/>
                                              <label for="radio_1">Mr</label>
                                            <input name="group1" type="radio" value="2" id="radio_2" />
                                            <label for="radio_2">Mrs</label>
                                          </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_firstname" name="firstname" placeholder="First Name" value="<?=$result[$k]["d_first_name"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_lastname" name="lastname" placeholder="Last Name" value="<?=$result[$k]["d_last_name"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Address" class="col-sm-2 control-label">Address</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_address" name="address" placeholder="Address" value="<?=$result[$k]["d_address"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="PostalCode" class="col-sm-2 control-label">Postal Code</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_postalcode" name="postalcode" placeholder="Postal Code" value="<?=$result[$k]["d_postal"]; ?> "  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="City" class="col-sm-2 control-label">City</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_city" name="city" placeholder="City" value="<?=$result[$k]["d_city"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Country" class="col-sm-2 control-label">Country</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_country" name="country" placeholder="Country" value=" <?=$result[$k]["d_country"]; ?>" required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Email" class="col-sm-2 control-label">Email</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="email" class="form-control" id="d_email" name="Email" placeholder="Email" value="<?=$result[$k]["d_email"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Phone" class="col-sm-2 control-label">Phone</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_phone" name="phone" placeholder="Phone"  value="<?=$result[$k]["d_mobile"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Passport" class="col-sm-2 control-label">Passport Number</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="d_passport" name="passport" placeholder="Passport"  value="<?=$result[$k]["d_passport"]; ?> "  required>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-10">
                                              <button type="button" class="btn btn-success" onclick="directors()">UPDATE</button>
                                          </div>
                                      </div>
                                  </form>
</div>

<script>
function directors()
{
   // alert('yes');
var userid= $("#userid").val();
var genders = $('input[name=group1]:radio:checked').val();

 var dfname= $("#d_firstname").val();
 var dlname= $("#d_lastname").val();
 var daddress =$( "#d_address").val();
 var dpostalcode =$( "#d_postalcode").val();
var dcity= $("#d_city").val();
var dcountry =$( "#d_country").val();
var demail =$( "#d_email").val();
var dphone= $("#d_phone").val();
var dpassport =$( "#d_passport").val();


if(dfname!="" && dlname!="" && daddress!="" && dpostalcode!="" && dcity!="" && dcountry!="" && demail!="" && dphone!="" && dpassport!=""){
      $.ajax({
        url: "ajax/supplier_directors.php",
        type: "POST",
        data: {
          genders: genders,
           dfname: dfname,
          dlname: dlname,
          daddress: daddress,
           dpostalcode: dpostalcode,
           dcity: dcity,
           dcountry: dcountry,
            demail: demail,
            dphone: dphone,
              dpassport: dpassport,
             userid: userid


        },
        cache: false,
        success: function(dataResult){

  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadRole();
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
}


</script>


<div role="tabpanel" class="tab-pane fade in" id="sales_contact">
                                  <form class="form-horizontal">
                                    <input type="hidden" id="userid" value="<?= $user_id?>">
                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                        <div class="demo-radio-button">
                                          <input name="group1" type="radio" value="1" id="radio_1" checked/>
                                            <label for="radio_1">Mr</label>
                                          <input name="group1" type="radio" value="2" id="radio_2" />
                                          <label for="radio_2">Mrs</label>
                                        </div>
                                        </div>
                                    </div>

                                      <div class="form-group">
                                          <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="sc_firstname" name="firstname" placeholder="First Name" value="<?=$result[$k]["sc_first_name"]; ?>  " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="sc_lastname" name="lastname" placeholder="Last Name" value="<?=$result[$k]["sc_last_name"]; ?>  " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Phone" class="col-sm-2 control-label">Phone Number</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="phone" class="form-control" id="sc_phone" name="phone" placeholder="Phone" value="<?=$result[$k]["sc_phone_number"]; ?>  "  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Phone" class="col-sm-2 control-label">Mobile Phone</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="phone" class="form-control" id="sc_mobile" name="phone" placeholder="Mobile" value="<?=$result[$k]["sc_mobile_number"]; ?>  "  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Email" class="col-sm-2 control-label">Email</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="email" class="form-control" id="sc_email" name="Email" placeholder="Email" value=" <?=$result[$k]["sc_email"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label for="Skype" class="col-sm-2 control-label">Skype</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="sc_skype" name="skype" placeholder="Skype" value=" <?=$result[$k]["sc_skype"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-10">
                                              <button type="button" class="btn btn-success" onclick="salesContact()">UPDATE</button>
                                          </div>
                                      </div>
                                  </form>
</div>
<script>
function salesContact()
{
   // alert('yes');
var userid= $("#userid").val();
var genders = $('input[name=group1]:radio:checked').val();

 var scfname= $("#sc_firstname").val();
 var sclname= $("#sc_lastname").val();
 var scphone =$( "#sc_phone").val();
 var scmobile =$( "#sc_mobile").val();
var scemail= $("#sc_email").val();
var scskype =$( "#sc_skype").val();
if(scfname!="" && sclname!="" && scphone!="" && scmobile!="" && scemail!="" && scskype!=""){
      $.ajax({
        url: "ajax/supplier_sales_contact.php",
        type: "POST",
        data: {
          genders: genders,
           scfname: scfname,
          sclname: sclname,
          scphone: scphone,
           scmobile: scmobile,
           scemail: scemail,
           scskype: scskype,
             userid: userid


        },
        cache: false,
        success: function(dataResult){

  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadRole();
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
}


</script>
<div role="tabpanel" class="tab-pane fade in" id="purchase_contact">
                                  <form class="form-horizontal">
                                    <input type="hidden" id="userid" value="<?= $user_id?>">
                                      <div class="form-group">
                                          <label for="NameSurname" class="col-sm-2 control-label"></label>
                                          <div class="col-sm-10">
                                          <div class="demo-radio-button">
                                            <input name="group1" type="radio" value="1" id="radio_1" checked/>
                                              <label for="radio_1">Mr</label>
                                            <input name="group1" type="radio" value="2" id="radio_2" />
                                            <label for="radio_2">Mrs</label>
                                          </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="pc_firstname" name="firstname" placeholder="First Name" value="<?=$result[$k]["pc_first_name"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="pc_lastname" name="lastname" placeholder="Last Name" value=" <?=$result[$k]["pc_last_name"]; ?>" required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Phone" class="col-sm-2 control-label">Phone Number</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="phone" class="form-control" id="pc_phone" name="phone" placeholder="Phone" value="<?=$result[$k]["pc_phone"]; ?> "  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Phone" class="col-sm-2 control-label">Mobile Phone</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="phone" class="form-control" id="pc_mobile" name="phone" placeholder="Phone" value=" <?=$result[$k]["pc_mobile"]; ?>"  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Email" class="col-sm-2 control-label">Email</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="email" class="form-control" id="pc_email" name="Email" placeholder="Email" value="<?=$result[$k]["pc_email"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label for="Skype" class="col-sm-2 control-label">Skype</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="pc_skype" name="skype" placeholder="Skype" value="<?=$result[$k]["pc_skype"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-10">
                                              <button type="button" class="btn btn-success" onclick="purchaseContact()">UPDATE</button>
                                          </div>
                                      </div>
                                  </form>
</div>
<script>
function purchaseContact()
{
   // alert('yes');
var userid= $("#userid").val();
var genders = $('input[name=group1]:radio:checked').val();

 var pcfname= $("#pc_firstname").val();
 var pclname= $("#pc_lastname").val();
 var pcphone =$( "#pc_phone").val();
 var pcmobile =$( "#pc_mobile").val();
var pcemail= $("#pc_email").val();
var pcskype =$( "#pc_skype").val();
if(pcfname!="" && pclname!="" && pcphone!="" && pcmobile!="" && pcemail!="" && pcskype!=""){
      $.ajax({
        url: "ajax/supplier_purchase_contact.php",
        type: "POST",
        data: {
          genders: genders,
           pcfname: pcfname,
          pclname: pclname,
          pcphone: pcphone,
           pcmobile: pcmobile,
           pcemail: pcemail,
           pcskype: pcskype,
             userid: userid


        },
        cache: false,
        success: function(dataResult){

  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadRole();
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
}


</script>
<div role="tabpanel" class="tab-pane fade in" id="accounting_dept">
                                  <form class="form-horizontal">
                                    <input type="hidden" id="userid" value="<?= $user_id?>">
                                      <div class="form-group">
                                          <label for="NameSurname" class="col-sm-2 control-label"></label>
                                          <div class="col-sm-10">
                                          <div class="demo-radio-button">
                                            <input name="group1" type="radio" value="1" id="radio_1" checked/>
                                              <label for="radio_1">Mr</label>
                                            <input name="group1" type="radio" value="2" id="radio_2" />
                                            <label for="radio_2">Mrs</label>
                                          </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="ad_firstname" name="firstname" placeholder="First Name" value="<?=$result[$k]["ad_first_name"]; ?>  " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="ad_lastname" name="lastname" placeholder="Last Name" value="<?=$result[$k]["ad_last_name"]; ?>  " required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Phone" class="col-sm-2 control-label">Phone Number</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="phone" class="form-control" id="ad_phone" name="phone" placeholder="Phone" value="<?=$result[$k]["ad_phone"]; ?>  "  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Phone" class="col-sm-2 control-label">Mobile Phone</label>

                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="phone" class="form-control" id="ad_mobile" name="phone" placeholder="Mobile" value="<?=$result[$k]["ad_mobile"]; ?>  "  required>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="Email" class="col-sm-2 control-label">Email</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="email" class="form-control" id="ad_email" name="Email" placeholder="Email" value=" <?=$result[$k]["ad_email"]; ?> " required>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <label for="Skype" class="col-sm-2 control-label">Skype</label>
                                          <div class="col-sm-10">
                                              <div class="form-line">
                                                  <input type="text" class="form-control" id="ad_skype" name="skype" placeholder="Skype" value="<?=$result[$k]["ad_skype"]; ?>  " required>
                                              </div>
                                          </div>
                                      </div>


                                      <div class="form-group">
                                          <div class="col-sm-offset-2 col-sm-10">
                                              <button type="button" class="btn btn-success" onclick="accountingDept()">UPDATE</button>
                                          </div>
                                      </div>
                                  </form>
</div>
<script>
function accountingDept()
{
   // alert('yes');
var userid= $("#userid").val();
var genders = $('input[name=group1]:radio:checked').val();

 var adfname= $("#ad_firstname").val();
 var adlname= $("#ad_lastname").val();
 var adphone =$( "#ad_phone").val();
 var admobile =$( "#ad_mobile").val();
var ademail= $("#ad_email").val();
var adskype =$( "#ad_skype").val();
if(adfname!="" && adlname!="" && adphone!="" && admobile!="" && ademail!="" && adskype!=""){
      $.ajax({
        url: "ajax/supplier_accounting_dept.php",
        type: "POST",
        data: {
          genders: genders,
           adfname: adfname,
          adlname: adlname,
          adphone: adphone,
           admobile: admobile,
           ademail: ademail,
           adskype: adskype,
             userid: userid


        },
        cache: false,
        success: function(dataResult){

  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadRole();
        }
      });
    }
    else{
      alert('Please fill all the field !');
    }
}


</script>
<?}}?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
