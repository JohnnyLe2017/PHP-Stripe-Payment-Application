<?php
 require_once('vendor/autoload.php');
 require_once('config/db.php');
 require_once('lib/pdo_db.php');
 require_once('models/Customer.php');
 require_once('models/Transaction.php');

 \Stripe\Stripe::setApiKey('sk_test_Gkmiw7YpMZLodhr0Ab1WOO9g');


?>