<?php

namespace App\Http\Controllers;
use \Carbon\Carbon;
use \Worldpay\Worldpay;
use \Worldpay\WorldpayException;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

    	return view('pages.frontpanel.home');
    }
    public function getDonation(){
    	
    	return view('pages.frontpanel.donate');
    }
    public function postDonation(Request $request){
    	$data = $request->all();
    	dd($data);
    	$worldpay = new Worldpay(config('constants.keys.service_key'));
		// $worldpay = new Worldpay('your-test-service-key');
 
		// $billing_address = array(
		//     "address1"=>'123 House Road',
		//     "address2"=> 'A village',
		//     "address3"=> 'some where',
		//     "postalCode"=> 'EC1 1AA',
		//     "city"=> 'London',
		//     "state"=> '',
		//     "countryCode"=> 'NIG',
		// );

		 
		// try {
		//     $response = $worldpay->createOrder(array(
		//         'token' => $data['token'],
		//         'amount' => 500,
		//         'currencyCode' => 'GBP',
		//         'name' => '3D sandy',
		//         'billingAddress' => $billing_address,
		//         'orderDescription' => 'donation',
		//         'customerOrderCode' => 'Order code',
		//          'is3DSOrder' => true
		//     ));
  //   	  return $response;
		//     // dd($response);
		//     // $_SESSION['orderCode'] = $response['orderCode'];
		//     // $oneTime3DsToken = $response['oneTime3DsToken'];
		//     // $redirectURL = $response['redirectURL'];
		// } catch (WorldpayException $e) {
		// 	dd($e);
		//     echo 'Error code: ' .$e->getCustomCode() .'
		  
		//     HTTP status code:' . $e->getHttpStatusCode() . '
		  
		//     Error description: ' . $e->getDescription()  . '
		 
		//     Error message: ' . $e->getMessage();
		// }
		// $response = $worldpay->createOrder(array(

		// 	 "paymentPageConfig"=> array(
		//       "paymentMethods"=> ["ALL"],
		//       "installationId"=> 1107788
		//    ),
		// 	   "token" => $data['token'],
		// 	   "amount"=> 2000,
		// 	   "authorizeOnly"=> false,
		// 	   "pendingUrl"=> "http://www.worldpay.com/pending",
		// 	   "successUrl"=> "http://www.worldpay.com/success",
		// 	   "failureUrl"=> "http://www.worldpay.com/failure",
		// 	   "errorUrl"=> "http://www.worldpay.com/error",
		// 	   "cancelUrl"=> "http://www.worldpay.com/cancel",
		// 	   "orderDescription"=> "OrderDescriptionGoesHere",
		// 	   "environment"=> "LIVE",
		// 	   "settlementCurrency"=> "GBP",
		// 	   "name"=> "sandy",
		// 	   "currencyCode"=> "GBP",
		// 	   "shopperCoun
		// 	   ryCode"=> "GB",
		// 	   "shopperLanguageCode"=> "en"
		// ));
    	try{
		$response = $worldpay->createOrder(array(
		    'token' => $data['token'],
		    'amount' => 500,
		    'currencyCode' => 'NGN',
		    'name' => 'sandy',
		    'billingAddress' => array(
		        'address1'=>'35 ilufe Road ',
		        'address2' => 'Ojo Alaba',
		        'address3'=> '',
		        'postalCode' => 'EC1 1AA',
		        'city' => 'Lagos',
		        'state' => '',
		        'countryCode'=> 'NG',
		    ),
		    'orderDescription' => 'Donation',
		    'customerOrderCode' => 'No Order code',
		    

		));

		return $response;
		}
		catch(WorldpayException $e){
			echo 'Error code: ' .$e->getCustomCode() .'
  
		    HTTP status code:' . $e->getHttpStatusCode() . '
		  
		    Error description: ' . $e->getDescription()  . '
		 
		    Error message: ' . $e->getMessage();
		}

    }
}
