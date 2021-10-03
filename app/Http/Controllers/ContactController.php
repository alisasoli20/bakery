<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submitContact(Request $request){
        $rules =[
            'name' => 'required|min:3',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ];
        $this->validate($request,$rules);

        $data = $request->except("_token");

        $contact = new Contact($data);
        if($contact->save()){
            session()->flash("success","Submitted successfully");
            return redirect()->back();
        }
        session()->flash("errror","Invalid Input");
        return redirect()->back();
    }
}
