<?php include('header.php');?>
<script>
var users = <?php echo json_encode($users); ?>;
$(document).ready(function(){

});
</script>
<div class="content" style="background-color:gray;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
				<div class="card">
          <div class="content">
						<h4 class="title">Manage Users</h4>
          </div>
	      </div>
					<div class="card">
						<div class="header">
							<div class="row">
								<div class="col-md-12">
									<h5>List Of Users<h5>
								</div>
						</div>
	          <div class="content">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
    								if (!$users) {
    									echo '<tr><td><h4 class="m-0">No user exist</h4></td></tr>';
    								} else {
    									foreach ($users as $key => &$user):
    									  ?>
                        <tr id="user_row_<?php echo $user->user_id; ?>">
                          <th scope="row" class="srno"><?php echo $key+1; ?></th>
                          <td class="user-name"><?php echo $user->user_name; ?></td>
                          <td class="user-email"><?php echo $user->user_email; ?></td>
                          <td class="user-mobile"><?php echo $user->user_mobile; ?></td>
                          <td class="user-status"><?php echo $user->user_status; ?></td>
                          <td class="user-actions">
                            <span>
                              <button type="button" class="btn btn-primary btn-sm" onclick="approveUser(<?php echo $user->user_id; ?>)">Approve</button>
                            </span>
                          </td>
                        </tr>
                        <?php
    								 	endforeach;
    								}
    							 ?>
                </tbody>
              </table>
	          </div>
		      </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php include('footer.php');?>
<script>
function approveUser(userId) {
  var user = users.find((user) => {
    return parseInt(user.user_id) === userId;
  });
  user.user_status = 'approved';
  updateUser(user);
}
function updateUser(user) {
  $.ajax({
    url: "<?php echo site_url('admin/updateUser');?>",
    method: "POST",
    data: user,
    success: function(response){
      var res = JSON.parse(response);
      $('#user_row_'+res.user_id+' .user-name').text(res.user_name);
      $('#user_row_'+res.user_id+' .user-email').text(res.user_email);
      $('#user_row_'+res.user_id+' .user-mobile').text(res.user_mobile);
      $('#user_row_'+res.user_id+' .user-status').text(res.user_status);
    }
  });
}
</script>
