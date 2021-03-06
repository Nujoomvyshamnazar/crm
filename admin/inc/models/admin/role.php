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
                <h4 class="modal-title" id="defaultModalLabel">Add Role</h4>
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
                                                          <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter Role Name">
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

                <button type="button" class="btn btn-link waves-effect" onclick="addRole()" id="add">ADD</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" onclick="location.reload();">CLOSE</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="defaultModalupdate" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-red">
                <h4 class="modal-title" id="defaultModalLabel">Edit Role</h4>
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
                                                          <input type="text" class="form-control" id="role_name1" name="role_name1" placeholder="Enter Role Name">

                                                           <input type="hidden" id="roleId" name="roleId">
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
                <button type="button" class="btn btn-link waves-effect" onclick="updateRole()" id="Update">UPDATE</button>

                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal" onclick="location.reload();">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<script>

function updateRole()
{
  var rolename= $("#role_name1").val();
  var roleid=$("#roleId").val();
  var status=$("#status1").val();
//  alert(status);
$.ajax({
  url: "ajax/update_role_by_id.php",
  type: "POST",
  data: {
    rolename:rolename,
    status:status,
    roleid:roleid

  },
  cache: false,
  success: function(dataResult){
  swal("Updated", "Data Successfully Updated", "success");
  }
});


}


function loadRole()
{
$("#dataTable").load("ajax/load_role.php");

}

//loadRole();
function addRole()
{

if(rolename!="" && status!=""){
  var rolename= $("#role_name").val();
  var status =$( "#status option:selected").val();
			$.ajax({
				url: "ajax/role_add.php",
				type: "POST",
				data: {
					rolename: rolename,
					status: status

				},
				cache: false,
				success: function(dataResult){
  $(".modal-backdrop.in").hide();
showSuccessMessage();
loadRole();
var rolename= $("#role_name").val("");
var status =$( "#status").val("");
				}
			});
		}
		else{
		//	alert('Please fill all the field !');
        swal("Invalid Data", "Please fill all the field !.", "error");
		}
}

function editRole(role_id)
{
  var title="Edit Role";
  $("#defaultModalLabel").text(title);
    $("#Update").show();
    $("#add").hide();
    $.ajax({
      url: "ajax/role_read_by_id.php",
      type: "POST",
      data: {
        role_id: role_id,


      },
      cache: false,
      success: function(dataResult){
  var role = JSON.parse(dataResult);
  //alert(role.name);
$("#roleId").val(role.id);
$("#role_name1").val(role.name);
$("#status1 option:selected").attr(role.status);
//$("#status1 option:selected").val(role.status);
      }
    });
}

function deleteRole(role_id)
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
          url: "ajax/delete_role_by_id.php",
          type: "POST",
          data: {
            role_id: role_id,


          },
          cache: false,
          success: function(dataResult){
              swal("Deleted!", "Your imaginary file has been deleted.", "success");
        loadRole();

          }
        });

      } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
      }
  });





}

</script>
