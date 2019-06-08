<?php
  if ($_POST) {
    phone_number_validation();
    email_validation();
    empty_fields_check();

    if (!empty($errors)) {
			//display errors if any
			echo display_errors($errors);
		}else{
			//add order to db
			$db->query ("INSERT INTO placed_orders (full_name, email, phone_number, date_of_event, type_of_event, size, color) 
        VALUES ('$full_name', '$email', '$phone_number', '$date_of_event', '$type_of_event', '$size', '$color')");
        
      //display success message
			$_SESSION['success_flash'] = 'We have received your order... thank you';
			header('Location: my-orders.php');
		}
  }
?>
<div class="row">
  <div class="col-md-6 offset-md-6 sign-form">
    <form class='sign-up' action="index.php" method="post" enctype="multipart/form-data">
      <legend>Place Order Here</legend>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
        <label for="" class="col-md-4 col-form-label">Name</label>

        <div class="col-md-8">
          <input
            type="name"
            name="full_name"
            class="form-control"
            placeholder="Full Name"
            value="<?php echo $full_name; ?>"
          />
        </div>
        
      </div>
    
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
        <label for="" class="col-md-4 col-form-label">Email Address</label>

        <div class="col-md-8">
          <input
            type="email"
            name="email"
            class="form-control"
            placeholder="Email address"
            value="<?php echo $email; ?>"
          />
          </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
        <label for="" class="col-md-4 col-form-label">Phone Number</label>
        
        <div class="col-md-8">
          <input
            type="text"
            name="phone_number"
            class="form-control"
            placeholder="Phone Number"
            value="<?php echo $phone_number; ?>"
          />
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
        <label for="" class="col-md-4 col-form-label">Date of Event</label>
        
        <div class="col-md-8">
          <input
            type="date"
            name="date_of_event"
            class="form-control"
            placeholder="Date of Event"
            value="<?php echo $date_of_event; ?>"
          />
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
        <label for="" class="col-md-4 col-form-label">Type of Event</label>

        <div class="col-md-8">
        <select class="form-control" name="type_of_event" >
          <option value="" <?php echo (($type_of_event == '')?' selected':''); ?>>Select Type Event</option>
          <option value="birthDay" <?php echo (($type_of_event == 'birthDay')?' selected':''); ?>>Birth Day</option>
          <option value="wedding" <?php echo (($type_of_event == 'wedding')?' selected':''); ?>>wedding</option>
          <option value="anniversary" <?php echo (($type_of_event == 'anniversary')?' selected':''); ?>>anniversary</option>
        </select>
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
        <label for="" class="col-md-4 col-form-label">Size</label>

        <div class="col-md-8">
          <input
            type="number"
            name="size"
            class="form-control"
            placeholder="Size"
            value="<?php echo $size; ?>"
          />
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
        <label for="" class="col-md-4 col-form-label">Colour Theme</label>
        
        <div class="col-md-8">
          <input
            type="color"
            name="color"
            class="form-control"
            placeholder="Colour Theme"
            value="<?php echo $color; ?>"
          />
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" id="buttons">
        <input type="submit" name="submit" value="Order Now" class="btn btn-primary btn-outline-success btn-sign btn-block">
      </div>
    </form>
  </div>
</div>