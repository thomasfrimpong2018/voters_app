<?php

namespace App\Http\Controllers;
use Auth;
use App\President;
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

            $presidents=President::all();

        return view('user.president-vote')->with('presidents',$presidents);
   
        }else{
            $users['users']=\App\User::all();
           return view('admin.adminhome',$users); 
        }

    }

    public function secretary(){

        return view('admin.addSecretary');
    }

    public function treasurer(){

        return view('admin.addTreasurer');
    }

    public function organiser(){

        return view('admin.addOrganiser');
    }
    public function president(){

        return view('admin.addPresident');
    }

    public function confirmPresident($id){

        $president=President::find($id);
        return view('user.confirm-president')->with('president',$president);
    }

}
