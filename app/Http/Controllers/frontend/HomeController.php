<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Featur;

class HomeController extends Controller
{
    public function index()
        {
            $list = Hero::all();
            $featur = Featur::all();

            return view('frontend.index', compact('list','featur'));
        }

     
    
}
