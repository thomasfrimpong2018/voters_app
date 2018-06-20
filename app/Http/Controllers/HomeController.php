<?php

namespace App\Http\Controllers;
use App\President;
use App\Secretary;
use App\Treasurer;
use App\Organiser;
use Auth;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function addSecretary(Request $request)
   {
    $this->validate($request, [
        'name'=>'required',
        'cover_image'=>'image|nullable|max:1999'
    ]);



     //Handle File Upload
     if($request->hasFile('cover_image')){

        //Get Filename with extension
        $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
        //Get just file
        $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //Get the ext
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //Upload Image
        $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);

    }else{
          $fileNameToStore='noimage.jpg';
    }
     
    $secretary=new Secretary;
    $secretary->name=$request->name;
    $secretary->picture= $fileNameToStore;
    $secretary->save();

    return redirect('/secretary')->with('success',$secretary->name.' Successfully added as Secretary');
  }

       
    

   


    public function addPresident(Request $request){


        $this->validate($request, [
            'name'=>'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);



         //Handle File Upload
         if($request->hasFile('cover_image')){

            //Get Filename with extension
            $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
            //Get just file
            $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            //Get the ext
            $extension=$request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //Upload Image
            $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);

        }else{
              $fileNameToStore='noimage.jpg';
        }
         
        $president=new President;
        $president->name=$request->name;
        $president->picture= $fileNameToStore;
        $president->save();

        return redirect('/president')->with('success',$president->name.' Successfully added as President');
    }


    public function addTreasurer(Request $request)
    {
     $this->validate($request, [
         'name'=>'required',
         'cover_image'=>'image|nullable|max:1999'
     ]);
 
 
 
      //Handle File Upload
      if($request->hasFile('cover_image')){
 
         //Get Filename with extension
         $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
         //Get just file
         $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
         //Get the ext
         $extension=$request->file('cover_image')->getClientOriginalExtension();
         //Filename to store
         $fileNameToStore=$filename.'_'.time().'.'.$extension;
         //Upload Image
         $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
 
     }else{
           $fileNameToStore='noimage.jpg';
     }
      
     $treasurer=new Treasurer;
     $treasurer->name=$request->name;
     $treasurer->picture= $fileNameToStore;
     $treasurer->save();
 
     return redirect('/treasurer')->with('success',$treasurer->name.' Successfully added as Treasurer');
   }
 



   public function addOrganiser(Request $request)
   {
    $this->validate($request, [
        'name'=>'required',
        'cover_image'=>'image|nullable|max:1999'
    ]);



     //Handle File Upload
     if($request->hasFile('cover_image')){

        //Get Filename with extension
        $fileNameWithExt=$request->file('cover_image')->getClientOriginalName();
        //Get just file
        $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //Get the ext
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //Filename to store
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //Upload Image
        $path=$request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);

    }else{
          $fileNameToStore='noimage.jpg';
    }
     
    $organiser=new Organiser;
    $organiser->name=$request->name;
    $organiser->picture= $fileNameToStore;
    $organiser->save();

    return redirect('/organiser')->with('success',$organiser->name.' Successfully added as Organiser');
  }



  public function votepresident(Request $request){
//code to increase vote of president
    $id= $request->id;
    $vote=President::find($id);
    $num=$request->votes;
    $num++;
    $vote->votes=$num;
    $vote->save();

    //code to indicate user has voted for president
    $id=auth()->user()->id;
    $user=User::find($id);
    $user->president_vote=1;
    $user->save();


    return redirect('/home');
  }



public function votesecretary(Request $request){
//code to increase vote of secretary
$id= $request->id;
$vote=Secretary::find($id);
$num=$request->votes;
$num++;
$vote->votes=$num;
$vote->save();

//code to indicate user has voted for secretary
$id=auth()->user()->id;
$user=User::find($id);
$user->secretary_vote=1;
$user->save();


return redirect('/home');


}

public function voteorganiser(Request $request){
    //code to increase vote of organiser
    $id= $request->id;
    $vote=Organiser::find($id);
    $num=$request->votes;
    $num++;
    $vote->votes=$num;
    $vote->save();
    
    //code to indicate user has voted for organiser
    $id=auth()->user()->id;
    $user=User::find($id);
    $user->organiser_vote=1;
    $user->save();
    
    
    return redirect('/home');
    
    
    }



    public function votetreasurer(Request $request){
        //code to increase vote of treasurer
        $id= $request->id;
        $vote=Treasurer::find($id);
        $num=$request->votes;
        $num++;
        $vote->votes=$num;
        $vote->save();
        
        //code to indicate user has voted for treasurer
        $id=auth()->user()->id;
        $user=User::find($id);
        $user->treasurer_vote=1;
        $user->save();
        
        
        return redirect('/home');
        
        
        }

    
}
