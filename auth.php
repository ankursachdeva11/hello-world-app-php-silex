<?php
ini_set('display_errors', 1);
$curl = curl_init();
$url = "https://login.bigcommerce.com/oauth2/token";
$query = ['client_id' => '83uhqbudo5vowrxep8i9pu93i2j48xh',
        'client_secret'=>'equ4hsyb1blmy19xcfgh0tuvps8hldf','code'=>$_REQUEST['code'],'scope'=>$_REQUEST['scope'],'grant_type'=>'authorization_code','redirect_uri'=>'https://celigotest.io/demo/auth.php','context'=>$_REQUEST['context']];

        $url = $url .'?'.http_build_query($query);
curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: babe109b-d7d1-2548-6fd8-df4de0523c49"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}