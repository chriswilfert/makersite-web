<?php 
/* Template Name: create_subscription */

// If you're using Composer, use Composer's autoload:
require_once('stripe-php-5.8.0/init.php');

// Be sure to replace this with your actual test API key
// (switch to the live key later)
\Stripe\Stripe::setApiKey("pk_test_YweStvYIqtUZLaZCkUhqMDlz");

try
{
  $customer = \Stripe\Customer::create(array(
    'email' => $_POST['stripeEmail'],
    'source'  => $_POST['stripeToken'],
    'plan' => 'weekly_box'
  ));

  header('Location: thankyou.html');
  exit;
}
catch(Exception $e)
{
  header('Location:oops.html');
  error_log("unable to sign up customer:" . $_POST['stripeEmail'].
    ", error:" . $e->getMessage());
}


?>