<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mymail;
use App\Models\Mode;
use DB;

class MailController extends Controller
{
    //
      public function send(Request $locale) {
        $obj = new \stdClass();
        
         $roles = DB::table('iron')->pluck('Email')->last();
        Mail::to($roles)->send(new Mymail($obj));
        return redirect()->back();
    }


}
