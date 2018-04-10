 <?php 
 /* Template Name: signup stripe */
  get_header();
  the_content();
  $int_file=get_template_directory().'/php-stripe/init.php';
  include($int_file);
  \Stripe\Stripe::setApiKey("sk_test_kNNnfPk2Z5PxiiCuqF7yOcqG");
  //add customer
  // $customer = \Stripe\Customer::create(array(
  //   "email" => "mohit@test.com",
  // ));

  if(isset($_POST)){
      if(!empty($_POST)){
        $customer = \Stripe\Customer::create(array(
          "email" => $_POST['stripeEmail']
        )); 
        if($customer['object']=="customer"){
            echo "User Added Sucessfully";  
        }  
      }
  }
  
 ?>
 <form action="" method="POST">
   <script
     src="https://checkout.stripe.com/checkout.js" class="stripe-button"
     data-key="pk_test_YweStvYIqtUZLaZCkUhqMDlz"
     data-image="http://staging.makersite.net/wp-content/uploads/2017/06/makersite-logo-wo-background-small.png"
     data-name="Ecodesign PRO"
     data-description="Subscription for 7 days"
     data-amount="9000"
     data-label="Sign Me Up!">
   </script>
 </form>
 
 <?php 
   get_footer();  
  ?>
 