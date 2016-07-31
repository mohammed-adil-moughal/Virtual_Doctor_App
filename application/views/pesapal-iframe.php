<ol class="breadcrumb bc-2 hidden-print">
    <li> <a href="<?php echo base_url(); ?>">Home</a> </li>
    <li> <a href="<?php echo base_url(); ?>user/view/<?php echo $user->id; ?>"><?php echo $user->firstname.' '.$user->lastname; ?></a></li>
    <li> <a href="<?php echo base_url(); ?>user/review/<?php echo $user->id; ?>">Invoice</a> </li>
    <li class="active"> <strong>Payment</strong> </li>
</ol>
<?php
include_once('OAuth.php');
/*
      username: mkahunyo
      email: msskah@gmail.com
      password: mkahunyo
*/

//pesapal params
$token = $params = NULL;
$consumer_key = 'sl/uqH+DsLlqyxUd1ZjgsllTNUmPcU0d';
$consumer_secret = 'CJdd1ryh+BgLl0zRQsaRDAJhAMM=';
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();
$iframelink = 'http://demo.pesapal.com/api/PostPesapalDirectOrderV4';//change to      
                   //https://www.pesapal.com/API/PostPesapalDirectOrderV4 when you are ready to go live!

//payment details
$amount = 1000; //$_POST['amount'];
$amount = number_format($amount, 2);//format amount to 2 decimal places

$desc = "Some Desc"; //$_POST['description'];
$type = "MERCHANT";//$_POST['type']; //default value = MERCHANT
$reference = "TEST";//$_POST['reference'];//unique order id of the transaction, generated by merchant
$first_name = "FNAME";//$_POST['first_name'];
$last_name = "LNAME";//$_POST['last_name'];
$email = "";//$_POST['email'];
$phonenumber = '254700123456';//ONE of email or phonenumber is required

$callback_url = 'http://localhost/daktari/pesapal/confirm'; //redirect url, the page that will handle the response from pesapal.

$post_xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?><PesapalDirectOrderInfo xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" Amount=\"".$amount."\" Description=\"".$desc."\" Type=\"".$type."\" Reference=\"".$reference."\" FirstName=\"".$first_name."\" LastName=\"".$last_name."\" Email=\"".$email."\" PhoneNumber=\"".$phonenumber."\" xmlns=\"http://www.pesapal.com\" />";
$post_xml = htmlentities($post_xml);

$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

//post transaction to pesapal
$iframe_src = OAuthRequest::from_consumer_and_token($consumer, $token, "GET", $iframelink, $params);
$iframe_src->set_parameter("oauth_callback", $callback_url);
$iframe_src->set_parameter("pesapal_request_data", $post_xml);
$iframe_src->sign_request($signature_method, $consumer, $token);

//display pesapal - iframe and pass iframe_src
?>
<iframe src="<?php echo $iframe_src;?>" width="100%" height="700px"  scrolling="no" frameBorder="0">
	<p>Browser unable to load iFrame</p>
</iframe>