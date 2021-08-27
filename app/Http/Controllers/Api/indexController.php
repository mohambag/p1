<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class indexController extends Controller
{

    public function index()
    {
$response=Http::get('https://api.accessban.com/v1/data/sana/json')['sana'];
$total=$response['data'];
$dol=$total['0'];
$eur=$total['1'];
$der=$total['2'];

return view('welcome',compact('dol','eur','der'));

    }
}
