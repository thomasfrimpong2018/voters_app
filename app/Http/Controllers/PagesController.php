<?php

namespace App\Http\Controllers;
use Auth;
use App\President;
use App\Secretary;
use App\Treasurer;
use App\Organiser;
use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    //
    public function index(){

        if(Auth::user()->admin == 0){

            //this ensures no one votes twice in the presidential votes
            $id=auth()->user()->id;
            $user=User::find($id);
            if($user->president_vote != '1'){

                $presidents=President::all();
             return view('user.president-vote')->with('presidents',$presidents);
            }
            elseif($user->secretary_vote != '1'){
               $secretary=Secretary::all();
               return view('user.secretary-vote')->with('secretaries',$secretary);
              

            }
            elseif($user->organiser_vote != '1'){
                $organiser=Organiser::all();
               return view('user.organiser-vote')->with('organisers',$organiser); 

            }
           elseif($user->treasurer_vote != '1'){
            $treasurer=Treasurer::all();
            return view('user.treasurer-vote')->with('treasurers',$treasurer);
            }
            elseif(($user->president_vote== '1')&& ($user->secretary_vote== '1')&& ($user->organiser_vote== '1') &&  ($user->treasurer_vote== '1')){
                $presidents=President::orderBy('votes','desc')->get();
                return view('user.president-results')->with('presidents',$presidents);

            }





   
        }else{
            $users['users']=\App\User::all();
           return view('admin.adminhome',$users); 
        }

    }

    public function secretary(){
        if(Auth::user()->admin == 1){

        return view('admin.addSecretary');
      }
   }

    public function treasurer(){

    if(Auth::user()->admin == 1){
        return view('admin.addTreasurer');
      }
   }

    public function organiser(){
        if(Auth::user()->admin == 1){

        return view('admin.addOrganiser');
      }
    }
    public function president(){
        if(Auth::user()->admin == 1){

        return view('admin.addPresident');
       }
    }

    public function confirmPresident($id){

        $president=President::find($id);
        return view('user.confirm-president')->with('president',$president);
    }

    public function confirmSecretary($id){

        $secretary=Secretary::find($id);
        return view('user.confirm-secretary')->with('secretary',$secretary);
    } 

    public function confirmOrganiser($id){

        $organiser=Organiser::find($id);
        return view('user.confirm-organiser')->with('organiser',$organiser);
    }

    public function confirmTreasurer($id){

        $treasurer=Treasurer::find($id);
        return view('user.confirm-treasurer')->with('treasurer',$treasurer);
    }

}
