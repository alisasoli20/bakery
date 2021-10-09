<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Validator;
use Session;

class registerController extends Controller
{
    public function store(Request $user){
        $validator = Validator::make($user->all(),[
            'name'=>'required|min:5',
            'username'=>'required|unique:users|min:5',
            'email'=>'required|unique:users|email',
            'phone'=>'required|min:5',
            'password'=>'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'required'
        ]);
            if(!$validator->passes()){
                return response()->json(['status'=>0,'error'=>$validator->errors()->toarray()]);
            }
            else{
                $values = [
                    'name'=>$user->name,
                    'username'=>$user->username,
                    'email'=>$user->email,
                    'phone'=>$user->phone,
                    'password'=>Hash::make($user->password)
                ];

                $query = DB::table('users')->insert($values);
                if($query){
                    return response()->json(['status'=>1,'msg'=>'Signup SuccessFull Kindly Login!']);
                }
            }
    }

    public function user_login(Request $user_login){
        $validator = Validator::make($user_login->all(),[
            'username'=>'required|min:5',
            'password'=>'required'
        ]);
            if(!$validator->passes()){
                return response()->json(['status'=>0,'error'=>$validator->errors()->toarray()]);
            }
            else{
                $username = $user_login->input('username');
                $email = $user_login->input('email');
                $password = $user_login->input('password');

                $check_details = User::where(['username'=>$username])->first();
                $check_emails = User::where(['email'=>$email])->first();
                if($check_details){
                    if(!password_verify($password,$check_details->password)){
                        return response()->json(['status'=>2,'msg2'=>'Incorrect password']);
                    }
                    // $user_id= $user_login->input('id');
                    $user_name= $user_login->input('username');
                    $user_email= $user_login->input('email');

                    Session::put('user', ['name' => $user_name, 'email' => $user_email]);
                    Auth::login($check_details);

                    return response()->json([
                        'redirect' => url('Home')
                    ]);
                }
                else if($check_emails)
                {
                    // $user_id= $user_login->input('id');
                    $user_name= $user_login->input('username');
                    $user_email= $user_login->input('email');

                    Session::put('user', ['name' => $user_name, 'email' => $user_email]);

                    return response()->json([
                        'redirect' => url('Home')
                    ]);
                }
                else
                {
                    return response()->json(['status'=>2,'msg2'=>'Username or password is incorrect!']);
                }
            }
    }

}


