<?php
  if ($_POST) {
    phone_number_validation();
    email_validation();
    empty_fields_check();

    if (!empty($errors)) {
			//display errors if any
			echo display_errors($errors);
		}else{
			//add user to db and assign bvn
			$db->query("INSERT INTO order (name, email, phone_number, date_of_event, type_of_event, color, date_recieved, last_modified, user_id) 
				VALUES ('$name', '$phone_number', '$bvn', '$email', '$hashed_password', '$user_role', '$account_number', '$account_name', '$db_path')");
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
                name="name"
                class="form-control"
                placeholder="Full Name"
                value="<?php echo $name; ?>"
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
              <select class="form-control" id="">
                <option>Birth Day</option>
                <option>Wedding</option>
                <option>Anniversary</option>
                <option>Burial</option>
                <option>Meetup</option>
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
<!-- 
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group row">
            <button type="button" name="submit" class="btn btn-primary btn-outline-success btn-sign btn-block">Order Now</button>
          </div> -->
        </form>

        
      </div>
        

    </div>
