<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mode;
use App\Models\Operator;
use DB;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        //
       $user = new Mode();
       $services = new Operator();
        $user->Name = $request->input('FirstName');
        $user->Surname = $request->input('LastName');
        $user->Email = $request->input('Email');
        if($request->hasFile('Photo')){
            $file = $request->file('Photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.  $extension;
            $allowed = ['png','pdf','jpg','jpeg','docx'];
            $check = in_array($extension, $allowed);
            if($check) {
            $file->move('uploads' , $filename);
            $user->Photo = $filename;
        } 
        
            
        }else{
            $user->Photo = 'nofile';
        }
        $user->save();
        $tt = DB::table('iron')->pluck('id');
      
        $services->iron_id = $tt[0];
        $services->save();
        return redirect('/mail/send');

           

    }
       
}
