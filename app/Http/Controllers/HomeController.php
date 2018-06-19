<?php

namespace App\Http\Controllers;
use App\President;
use Auth;
use Illuminate\Http\Request;

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

    public function addSecretary()
    {
        return view('home');
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

        return redirect('/home');
    }


    
}
