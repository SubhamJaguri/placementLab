<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   //user pages
    public function index(){
        return view('user.index');
    }

    public function faq(){
        return view('user.faq');
    }

    public function companies(){
        return view('user.companies');
    }

    

    


    //admin pages
    public function adminIndex(){
        return view('admin.index');
    }

    
}
