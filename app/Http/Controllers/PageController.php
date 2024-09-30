<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
        $title = 'Главная';

        return view('index', [
            'title'=>$title
        ]);
    }
    public function deals(){
        $title = 'Сделки';
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://b24-hjsb9q.bitrix24.ru/rest/1/pjhgmuam8h4ogr2w/crm.deal.list",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_COOKIE => "qmb=0.",
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "User-Agent: insomnia/8.5.1"
          ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);

        $res = json_decode($response, true);
        
        curl_close($curl);
          
        return view('deals', [
            'title'=>$title,
            'res'=>$res
        ]);
    }
    public function contact(){
        $title = 'Контактная информация';

        return view('contact', [
            'title'=>$title
        ]);
    }
    public function joke(){
        $title = 'Анекдот';

        return view('joke', [
            'title'=>$title
        ]);
    }
    public function update($id){
        $title = 'Редактирование сделки';
        $curl = curl_init();

        curl_setopt_array($curl, [
          CURLOPT_URL => "https://b24-hjsb9q.bitrix24.ru/rest/1/pjhgmuam8h4ogr2w/crm.deal.list",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_COOKIE => "qmb=0.",
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "User-Agent: insomnia/8.5.1"
          ],
        ]);
        
        $response = curl_exec($curl);

        $err = curl_error($curl);

        curl_close($curl);

        $res = json_decode($response, true);

        $deal = collect($res['result'])->firstWhere('ID', $id);
        
        return view('update',[
            'title'=>$title,
            'deal'=>$deal
        ]);
    }
}
