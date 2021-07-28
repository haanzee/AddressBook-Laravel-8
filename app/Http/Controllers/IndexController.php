<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addressBook;

class IndexController extends Controller
{
    public function show() {
        $addbook = addressBook::paginate(9);
               
        return view('index', ['addbook'=>$addbook]);
    }
}
