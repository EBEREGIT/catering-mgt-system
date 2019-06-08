<?php
	include_once 'helpers.php';
	include_once 'validate.php';

		$full_name = ((isset($_POST['full_name']))?sanitize($_POST['full_name']):'');
		$full_name = trim($full_name);
		$email = ((isset($_POST['email']))?sanitize($_POST['email']):'');
		$email = trim($email);
		$phone_number = ((isset($_POST['phone_number']))?sanitize($_POST['phone_number']):'');
		$phone_number = trim($phone_number);
		$date_of_event = ((isset($_POST['date_of_event']))?sanitize($_POST['date_of_event']):'');
		$date_of_event = trim($date_of_event);
		$size = ((isset($_POST['size']))?sanitize($_POST['size']):'');
		$size = trim($size);
		$type_of_event = ((isset($_POST['type_of_event']))?sanitize($_POST['type_of_event']):'');
		$type_of_event = trim($type_of_event);
		$color = ((isset($_POST['color']))?sanitize($_POST['color']):'');
		$color = trim($color);

		$password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
		$password = trim($password);
		$hashed_password = ((isset($_POST['password']))?sanitize($_POST['password']):'');
		$hashed_password = trim($hashed_password);
		$errors = array();
		$confirm_password = ((isset($_POST['confirm_password']))?sanitize($_POST['confirm_password']):'');
		$confirm_password = trim($confirm_password);
		$old_password = ((isset($_POST['old_password']))?sanitize($_POST['old_password']):'');
		$old_password = trim($old_password);
		$user_role = ((isset($_POST['user_role']))?sanitize($_POST['user_role']):'');
		$user_role = trim($user_role);
		$search_user = ((isset($_POST['search_user']))?sanitize($_POST['search_user']):'');
		$search_user = trim($search_user);
		
		$date = date("Y-m-d H:i:s");
		
?>