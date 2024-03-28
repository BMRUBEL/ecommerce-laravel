<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Featur;
use App\Models\Vegetable;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
        {
            $list = Hero::all();
            $featur = Featur::all();
            $vege = Vegetable::all();
            $cont = Contact::all();

            return view('frontend.index', compact('list','featur','vege','cont'));
        }

     
    
}
