<?php 
	include_once 'admin-head.php';
    include_once 'admin-nav.php';
?>

<div class="container-fluid sign-up">
	<table class="table table-bordered table-striped">
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
		</thead>

<?php 
	$i = 0;
	$order_query = $db->query("SELECT * FROM placed_orders");
	while ($orders = mysqli_fetch_assoc($order_query)) {
		$i++;
?>

		<tbody>
			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<a href="users_admin.php?delete=<?php echo $user['user_id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove-sign"></span></a>
					<a href="users_admin.php?edit=<?php echo $user['user_id']; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
				</td>

				<td><?php echo $orders['full_name']; ?></td>
				<td><?php echo $orders['email']; ?></td>
				<td><?php echo $orders['phone_number']; ?></td>
				<td><?php echo pretty_date($orders['date_of_event']); ?></td>
				<td><?php echo $orders['type_of_event']; ?></td>
				<td><?php echo $orders['size']; ?></td>
				<td><?php echo $orders['color']; ?></td>
				<td><?php echo pretty_date($orders['date_added']); ?></td>
			</tr>
<?php } ?>
		</tbody>
	</table>
</div>

<?php include_once 'admin-foot.php'; ?>