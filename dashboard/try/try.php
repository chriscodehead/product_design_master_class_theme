<?php require_once('../../library.php'); 
$blockchain_root = "https://blockchain.info/";
$root_url = 'https://api.blockchain.info/v2/receive';
$secret = '??ZzsMLGKCJe??162CfA5Ec??G6j&*cnjhj';
$my_xpub = '';
$my_api_key = '0b9da7ee-b055-42fc-ac3f-1872f7641577';

$my_callback_url = $site.'/dashboard/callback.php?secret='.$secret.'&tranID='.$_SESSION['TIDer'];

$parameters = 'xpub=' .$my_xpub. '&callback=' .urlencode($my_callback_url). '&key=' .$my_api_key;

$response = file_get_contents($root_url . '?' . $parameters);

$object = json_decode($response);
if($object){
	$address = 'bc1qvr2qmwnf79jz7q0r9makvhaxxdp4p30yxwf0uq';//$object->address;
}else{
	$address = 'bc1qvr2qmwnf79jz7q0r9makvhaxxdp4p30yxwf0uq';//$object_address[$rand_ad];
}
$coin_value = sprintf('%.08f',($_SESSION['amt']/$_SESSION['btc_value']));
//echo 'Send Payment To : ' . $object->address;

if($_SESSION['currency']=="BTC"){
			$field = array('btc_address','coin_value','expire_time','status_url');
			$value = array($address,$coin_value,'Active','https://www.blockchain.com/btc/address/'.$address);//.$object->address
			$cal->update($deposit_tb, $field, $value, 'transaction_id',$_SESSION['TIDer']);
}else if($_SESSION['currency']=="ETH"){
			$field = array('ethereum_address','coin_value','expire_time','status_url');
			$value = array($object->address,$coin_value,'Active','https://www.blockchain.com/btc/address/'.$address);
			$cal->update($deposit_tb, $field, $value, 'transaction_id',$_SESSION['TIDer']);
		}
$_SESSION['your_txn_id'] = $_SESSION['TIDer'];
$_SESSION['your_amount'] = $coin_value;
$_SESSION['your_confirms_needed'] = 3;
$_SESSION['currency'];
$_SESSION['plan'];
$_SESSION['your_address'] = $address;
$_SESSION['your_timeout'] = 9994949;
$_SESSION['your_qrlcode_url'] = '';
$_SESSION['your_status_url'] = 'https://www.blockchain.com/btc/address/'.$address;
//header("location:../payment-invoice");
header("location:../check_payment.php");
?>