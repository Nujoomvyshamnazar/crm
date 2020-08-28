<!-- Modal Dialogs ====================================================================================================================== -->
<!-- Default Size -->

<?php
$role = new Adminuser();
//$role->addRole("admin",1);
//$role->deleteRole(1);
//$role->editRole("nuj","1",3);
?>


<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-red">
                <h4 class="modal-title" id="defaultModalLabel">Add Brand</h4>
            </div>
            <div class="modal-body">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                  <div class="card">

                                      <div class="body">
                                          <div class="row clearfix">
                                              <div class="col-xs-12">
                                                  <h2 class="card-inside-title">Name</h2>
                                                  <div class="form-group">
                                                      <div class="form-line" id="bs_datepicker_container">
                                                          <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Enter Brand Name">
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-xs-12">
                                                      <h2 class="card-inside-title">Status</h2>
                                                  <select class="form-control show-tick" id="status">
                                                      <option value="">-- Please select Status--</option>
    <option value="1">Enable</option>
    <option value="0">Disable</option>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
          </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-link waves-effect" onclick="addBrand()" id="add">ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" onclick="location.reload();">CLOSE</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="defaultModalupdate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-red">
                <h4 class="modal-title" id="defaultModalLabel">Edit Brand</h4>
            </div>
            <div class="modal-body">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                  <div class="card">

                                      <div class="body">
                                          <div class="row clearfix">

                                              <div class="col-xs-12">
                                                  <h2 class="card-inside-title">Name</h2>
                                                  <div class="form-group">
                                                      <div class="form-line" id="bs_datepicker_container">
                                                          <input type="text" class="form-control" id="brand_name1" name="brand_name1" placeholder="Edit Brand Name">

                                                           <input type="hidden" id="brandid" name="brandid">
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="col-xs-12">
                                                      <h2 class="card-inside-title">Status</h2>
                                                  <select class="form-control show-tick" id="status1">
                                                      <option value="">-- Please select Status--</option>
    <option value="1">Enable</option>
    <option value="0">Disable</option>
                                                  </select>
                                              </div>


                                          </div>
                                      </div>
                                  </div>
                              </div>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect"  id="updateBrand" onclick="updateBrand()">UPDATE</button>

                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" onclick="location.reload();">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<script>

function updateBrand()
{

  var brandname= $("#brand_name1").val();
  var brandid=$("#brandid").val();
  var status=$("#status1").val();
//  alert(status);
$.ajax({
  url: "ajax/update_brand_by_id.php",
  type: "POST",
  data: {
    brandname:brandname,
    status:status,
    brandid:brandid

  },
  cache: false,
  success: function(dataResult){
        swal("Updated!", "Your Data is Updated.", "success");
loadBrand();

  }
});


}


function loadBrand()
{
$("#dataTable").load("ajax/load_brand.php");

}

//loadRole();
function addBrand()
{

if(brandname!="" && status!=""){
  var brandname= $("#brand_name").val();
  var status =$( "#status option:selected").val();
			$.ajax({
				url: "ajax/brand_add.php",
				type: "POST",
				data: {
					brandname: brandname,
					status: status

				},
				cache: false,
				success: function(dataResult){
  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadBrand();
var brandname= $("#brand_name").val("");
var status =$( "#status").val("");
				}
			});
		}
		else{
		//	alert('Please fill all the field !');
        swal("Invalid Data", "Please fill all the field !.", "error");
		}
}

function editBrand(brand_id)
{


    $.ajax({
      url: "ajax/brand_read_by_id.php",
      type: "POST",
      data: {
        brand_id: brand_id,


      },
      cache: false,
      success: function(dataResult){
  var brand = JSON.parse(dataResult);
  //alert(role.name);
$("#brandid").val(brand.brandid);
$("#brand_name1").val(brand.name);
$("#status1 option:selected").attr(brand.status);
//$("#status1 option:selected").val(role.status);
      }
    });
}

function deleteBrand(brand_id)
{


    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {

          $.ajax({
            url: "ajax/delete_brand_by_id.php",
            type: "POST",
            data: {
              brand_id: brand_id,


            },
            cache: false,
            success: function(dataResult){
              if(dataResult==1)
              {
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
        loadBrand();
              }


            }
          });

        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });









}

</script>
