<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class indexController extends Controller
{

    public function index()
    {
//        dd('ok');
//        $response = Http::get('https://api.accessban.com/v1/data/sana/json')['sana'];
//        $total = $response['data'];
//        dd($total);
//        $dol = $total['0'];
//        $eur = $total['1'];
//        $der = $total['2'];
        $response = Http::get('http://api.navasan.tech/latest/?api_key=free6FyutvrAGqcBlN2Lc6E4iElYYrsU');
//dd(json_decode($response));
$total=json_decode($response);
//dd($total);
//        $dol = $total['0'];
//        dd($dol);
//        $eur = $total['1'];
//        $der = $total['2'];
//        return view('welcome', compact('dol', 'eur', 'der'));
        return view('welcome', compact('total'));

    }
}
