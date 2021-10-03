<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin_signup;
use App\Models\product_categories;
use App\Models\product;
use Validator;
use Session;

class AdminController extends Controller
{
    public function admin_login(Request $admin_user)
    {
        $validator = Validator::make($admin_user->all(),[
            'username'=>'required',
            'password'=>'required'
        ]);
            if(!$validator->passes()){
                return response()->json(['status'=>0,'error'=>$validator->errors()->toarray()]);
            }
            else{
                $username = $admin_user->input('username');
                // $email = $admin_user->input('username');
                $password = $admin_user->input('password');

                $check_details = DB::table('admin_signups')->where(['username'=>$username,'password'=>$password])->get();
                $check_emails = DB::table('admin_signups')->where(['email'=>$username,'password'=>$password])->get();
                if(count($check_details)>0){
                    // $user_id= $user_login->input('id');
                    $user_name= $admin_user->input('username');
                    $user_email= $admin_user->input('email');
                    
                    Session::put('adminuser', ['name' => $user_name, 'email' => $user_email]);
                    
                    return response()->json([
                        'redirect' => url('admin_dashboard')
                    ]);  
                }
                else if(count($check_emails)>0)
                {
                    // $user_id= $user_login->input('id');
                    $user_name= $admin_user->input('username');
                    $user_email= $admin_user->input('email');

                    Session::put('adminuser', ['name' => $user_name, 'email' => $user_email]);
                    
                    return response()->json([
                        'redirect' => url('admin_dashboard')
                    ]);  
                }
                else
                {
                    return response()->json(['status'=>2,'msg2'=>'Username or password is incorrect!']);
                }
            }
    }
        public function addproductcategory(Request $addproduct_category){
            $validator = Validator::make($addproduct_category->all(),[
                'product_category'=>'required|unique:product_categories'
            ]);
                if(!$validator->passes()){
                    return response()->json(['status'=>0,'error'=>$validator->errors()->toarray()]);
                }
                else{
                    $values = [
                        'product_category'=>$addproduct_category->product_category,
                    ];
    
                    $query = DB::table('product_categories')->insert($values);
                    if($query){
                        return response()->json(['status'=>1,'msg'=>'Product Added Successfully']);
                    }

                }
        }

        public function ShowProductCatergory(){
            $showproduct_categories =  product_categories::all();
            return view('admin.showproductcategory',['categories'=>$showproduct_categories]);
        }

        public function ShowProductCategory_dropdown(){
            $showproduct_categories =  product_categories::all();
            return view('admin.addproduct',['dropdowncategories'=> $showproduct_categories]);
        }
        public function addproduct(Request $request){
            
            $add_product = new product();
            
            $rules = [
                'productname'=>'required',
                'productdescription'=>'required',
                'productimage'=>'required',
                'productprice'=>'required',
                'category'=>'required'
            ];
            $this->validate($request,$rules);
                    $add_product->product_name = $request -> productname;
                    $add_product->product_description = $request -> productdescription;
                    $add_product->product_price = $request -> productprice;
                    $add_product->productcategory_id = $request -> category;
                    $file = $request -> file('productimage');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time().'.'. $extension; 
                    $file->move('../public/images/',$filename);
                    $add_product->product_image = $filename;
                    if($add_product->save()){
                        session()->flash("success","Product added successfully");
                        return redirect()->back();
                    }
                    session()->flash("error","Products added successfully");
                    return redirect()->back();
        }
        public function adminregister(Request $adminregister){
            $validator = Validator::make($adminregister->all(),[
                'name'=>'required',
                'email'=>'required',
                'password'=>'required'
            ]);
                if(!$validator->passes()){
                    return response()->json(['status'=>0,'error'=>$validator->errors()->toarray()]);
                }
                else{
                    $values = [
                        'name'=>"null",
                        'username'=>$adminregister->name,
                        'email'=>$adminregister->email,
                        'phone'=>"null",
                        'password'=>$adminregister->password 
                    ];
    
                    $query = DB::table('admin_signups')->insert($values);
                    if($query){
                        return response()->json(['status'=>1,'msg'=>'Account Created Successfully']);
                    }

                }
        }
    }
