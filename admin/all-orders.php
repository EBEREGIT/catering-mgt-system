<?php 
	include_once 'admin-head.php';
    include_once 'admin-nav.php';

	// if(isset($_GET['edit'])){
				
	// 	include("edit_admin.php");
	
	// }else{

	// if (isset($_GET['delete'])) {
	// 	$delete_id = sanitize($_GET['delete']);
	// 	$db->query("DELETE FROM user WHERE user_id = '$delete_id'");
	// 	$_SESSION['success_flash'] = 'User Deleted Successfully!';
	// 	header('Location: users_admin.php');
	// }

	// $user_query = $db->query("SELECT * FROM user ORDER BY full_name");
	// $i = 0;
?>


<div class="container-fluid sign-up">
	<table class="table table-bordered table-striped table-condensed">
		<legend><h3>Orders</h3></legend>
		<thead>
			<th>S/N</th>
			<th>Action</th>
			<th>Name</th>
			<th>Email</th>
            <th>Phone Number</th>
            <th>Date of Event</th>
            <th>Type of Event</th>
            <th>Size</th>
            <th>Colour Theme</th>
			<th>Date Recieved</th>
			<th>Last Modified</th>	
		</thead>

		<tbody>
			<!-- <?php while ($user = mysqli_fetch_assoc($user_query)) :?>	
				<?php $i++; ?> -->
					<tr>
						<td><?php echo $i; ?></td>
						<td>
							<a href="users_admin.php?delete=<?php echo $user['user_id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-sign"></span></a>
							<a href="users_admin.php?edit=<?php echo $user['user_id']; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
						</td>
						<td><?php echo $user['full_name']; ?></td>
						<td><?php echo $user['email']; ?></td>
						<td><?php echo $user['phone_number']; ?></td>
						<td><?php echo $user['account_name']; ?></td>
						<td><?php echo $user['account_number']; ?></td>
						<td><?php echo pretty_date($user['date_joined']); ?></td>
						<td><?php echo (($user['last_login'] == '0000-00-00 00:00:00')?'Never':pretty_date($user['last_login'])); ?></td>
						<td><?php echo (($user['last_modified'] == '0000-00-00 00:00:00')?'Never':pretty_date($user['last_modified'])); ?></td>
						<td><?php echo $user['user_role']; ?></td>
					</tr>
			<!-- <?php endwhile; ?> -->
		</tbody>
	</table>
</div>

<?php 
    // }
     include_once 'admin-foot.php';
?>