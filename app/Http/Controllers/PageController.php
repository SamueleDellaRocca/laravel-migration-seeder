<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $myTrains = Train::where('id', '>', 0)->paginate(25);
        // $myTrains = Train::all();
        // $myTrains = Train::all();


        $data = [
            'treni' => $myTrains,
        ];

        return view('TrainList', $data);
    }
}
