<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    //
    public function index(){

        if(Auth::user()->admin == 0){
            return view('home');
   
        }else{
            $users['users']=\App\User::all();
           return view('admin.adminhome',$users); 
        }

    }

    public function secretary(){

        return view('admin.addSecretary');
    }
    
}
