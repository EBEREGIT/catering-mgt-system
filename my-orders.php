<?php 
// include header files here
	include_once('head.php'); 
	include_once('nav.php');
?>

	<div class="accordion" id="accordionExample">
	<h3 class="bg-light order-title">ALL ORDERS FOR OLELEWE R. U.</h3>

<?php 
	$i = 0;
	$order_query = $db->query("SELECT * FROM placed_orders");
	while ($orders = mysqli_fetch_assoc($order_query)) {
		$i++;
?>
	<!-- card 1 -->
	<div class="card">
		<div class="card-header" id="heading<?php echo $i; ?>">

		<!-- header to toggle the card -->
		<h2 class="mb-0">
			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">

			<?php echo pretty_date($orders['date_added']); ?>

			</button>
		</h2>
		</div>

		<!-- body of the card -->
		<div id="collapse<?php echo $i; ?>" class="collapse show" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
		<div class="card-body">
			<ul>
				<li><b>Name:</b> <?php echo $orders['full_name']; ?></li>
				<li><b>Email Address:</b> <?php echo $orders['email']; ?></li>
				<li><b>Phone No:</b> <?php echo $orders['phone_number']; ?></li>
				<li><b>Date of Event:</b> <?php echo pretty_date($orders['date_of_event']); ?></li>
				<li><b>Type of Event:</b> <?php echo $orders['type_of_event']; ?></li>
				<li><b>Size:</b> <?php echo $orders['size']; ?></li>
				<li><b>Colour Theme:</b> <?php echo $orders['color']; ?></li>
			</ul>
			
		</div>
		</div>
	</div>
</div>

<?php } include_once('foot.php'); ?>