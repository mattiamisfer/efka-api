<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    //


    public function index() {
        $locale = App::currentLocale();

        App::setLocale($locale);

      return view('front.index');

    }
}
