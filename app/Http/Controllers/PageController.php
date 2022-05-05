<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $myTrains = Train::all();

        $data = [
            'treni' => $myTrains,
        ];

        return view('TrainList', $data);
    }
}
