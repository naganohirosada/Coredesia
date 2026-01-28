<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;

class PageController extends BaseController
{
    // topページ表示
    public function top() {
        return view('top');
    }

    // aboutページ表示
    public function about() {   
        return view('about');
    }

    // contactページ表示
    public function contact() {
        return view('contact');
    }

    // servicesページ表示
    public function services() {
        return view('services');
    }

    // companyページ表示
    public function company() {         
        return view('company');
    }
}
