<?php

namespace App\Http\Controllers;

use App\Models\signupmodel;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function signup(Request $req){
        $data = new signupmodel();

        $data->name = $req->usname;
        $data->email = $req->usemail;
        $data->password = $req->uspass;
        $data->save();
        return redirect()->back()->with('ContactMessage','your message has reached us');

    }

    public function signdata(){
        $datasign = signupmodel::all();
        return view ("admindashboard",compact('datasign'));
    }

    public function deletesignuprecord($uid){
        $signuprecord = signupmodel::find($uid);
        $signuprecord->delete();
        return redirect()->back()->with('Deletesignup','User deleted');


    }
    public function updatesignuprecord($uid){
        $data = signupmodel::find($uid);
        return view ("update",compact('data'));

    }
    public function updatesignup(Request $req){
        $data = signupmodel::find($req->id);

        $data->name = $req->usname;
        $data->email = $req->usemail;
        $data->password = $req->uspass;
        $data->save();
        return redirect()->back()->with('ContactMessage','your message has reached us');

    }
}
