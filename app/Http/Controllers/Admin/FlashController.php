<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlashController extends Controller
{
    public function create(){
        return view('pages.flash');
    }
}
