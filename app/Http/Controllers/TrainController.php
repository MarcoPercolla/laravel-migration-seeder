<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {

        $dati = [
            "trains" => Train::all()
        ];

        return view('home', $dati);
    }
}
