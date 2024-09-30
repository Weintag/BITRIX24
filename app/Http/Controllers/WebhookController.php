<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Log;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class WebhookController extends Controller
{



    public function handleWebhook(Request $request, $id)
    {
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://b24-hjsb9q.bitrix24.ru/rest/1/pjhgmuam8h4ogr2w/crm.deal.update",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\t\"id\" : \"$id\",\n\t\"fields\" : {\"TITLE\": \"$request->TITLE\",\n\t\"COMPANY_ID\":\"$request->COMPANY_ID\",\n\t\"COMMENTS\":\"$request->COMMENTS\",\n\t\"STAGE_ID\": \"$request->STAGE_ID\", \n\t\"DATE_CREATE\":\"$request->DATE_CREATE\"}\n}\n",
  CURLOPT_COOKIE => "qmb=0.",
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
    "User-Agent: insomnia/10.0.0"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}


        return redirect()->route('render-deals')->withSuccess('Deal updated successfully!');

    }
    }