<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{

    //Front-end

    public function index(){
        return view('index');
    }
    public function mainnews(){
        return view('main');
    }
    public function news(){
        return view('news');
    }
    public function contact(){
        return view('contact');
    }
    public function others(){
        return view('other');
    }
    public function about(){
        return view('about');
    }

    public function changelang($locale){

        session(['lang' => $locale]);
        App::setLocale($locale);
        return redirect()->back();

    }

    //Back-end

    protected function admin(){
        return view('dashboard');
    }
    protected function adminpost(){
        return view('contac');
    }
    protected function admincat(){
        return view('categories');
    }


}
