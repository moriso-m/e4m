<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_category;
use App\Models\Product;
use App\Models\User;

use App\Mail\ContactMail;

use Mail;
use Hash;
use Auth;
use Session;

class HomeController extends Controller
{
    public function index(Request $request,$category = null){
        $categories = Product_category::all();
        if($category == null){
            $products = Product::all();
        }
        else{
            $products = Product::where('product_category',$category)->get();
        }
        return view('index',[
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    public function login(Request $request)
    {
        if($request->isMethod('GET')){
            
            // check if there is any admin account. If none, create default
            // username => root
            // password => abcd1234
            $admins =User::where('user_type','A')->count();

            if($admins < 1){
                User::create([
                    'name' => env('ADMIN_NAME','root'),
                    'username' => env('ADMIN_USERNAME','root'),
                    'email' => env('ADMIN_EMAIL','root@wholesale.com'),
                    'password' => Hash::make('abcd1234'),
                    'user_type' => 'A',
                ]);
            }
            return view('login');
        }
        else{
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
            // dd(Hash::check('*bazuu','$2y$10$bNY/R4GFWnlmG/Ri/L9nYetRSm0xDjpgboU.tEHo5kWGUUVtVLlwy'));
            if(Auth::attempt($credentials)){
                // redirect accordingly
                if(Auth::user()->user_type == 'A'){
                    return redirect()->route('admin.home');
                }
                else{
                    return redirect()->route('index');
                }
            }
            else{
                Session::flash('error','Wrong username or password');
                return redirect()->back();
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('index');
    }
    
    public function register(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::updateOrCreate([
            'email' => $request->input('email'),
        ],[
            'name' => $request->input('name'),
            'password' => Hash::make('abcd1234'),
            'user_type' => $request->user_type,
        ]);

        //code to send email
        // Mail::to($request->email)->send(new RegisterCustomer($admin,'A'));
        return redirect()->route('admin.index')->withsuccess('Successful');


    }

    public function contact(Request $request)
    {
        if($request->isMethod('GET')){
            return view('contact');
        }
        else{
            $content = array(
                'name' =>$request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message

            );
            Mail::to(env('MAIL_CUSTOMER_CARE'))->send(new ContactMail($content));

            return back()->withSuccess('Mail sent');
        }
    }
}
                              