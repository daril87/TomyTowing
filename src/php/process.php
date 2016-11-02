<?php

$errors = array(); // array to hold validation errors
$data = array(); // array to pass back data
// validate the variables ======================================================
if (empty($_POST['name']))
$errors['name'] = 'Name is required.';
if (empty($_POST['age']))
$errors['email'] = 'Age is required.';
/*if (empty($_POST['email']))
$errors['email'] = 'Email is required.';
if (empty($_POST['message']))
$errors['message'] = 'Message is required.';*/
// return a response ===========================================================
// response if there are errors
if ( ! empty($errors)) {
  // if there are items in our errors array, return those errors
  $data['success'] = false;
  $data['errors'] = $errors;
  $data['messageError'] = 'Please check the fields in red';
} else {
  // if there are no errors, return a message
  $data['success'] = true;
  $data['errors'] = false;
  $data['messageSuccess'] = 'Hey! Thanks for reaching out. I will get back to you soon';


  // CHANGE THE TWO LINES BELOW
  $email_to = "daril8710@gmail.com";
  $email_subject = "TomyTowing & Truck Repair";
  $name = $_POST['name']; // required
  $age = $_POST['age'];
  $email_from = 'leidy.sosa93@gmail.com';
  /*$company = $_POST['company']; // required
  $email_from = $_POST['email']; // required
  $message = $_POST['message']; // required*/
  $email_message = 'Form details below'."\r\n";
  $email_message .= "Name: ".$name."\r\n";
  /*$email_message .= "Company: ".$company."\r\n";
  $email_message .= "Email: ".$email_from."\r\n";
  $email_message .= "Message: ".$message."\r\n";*/
  $headers = 'From: '.$email_from."\r\n".
  'Reply-To: '.$email_from."\r\n" .
  'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);


}
// return all our data to an AJAX call
echo json_encode($data);