<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AdminController extends Controller
{
    public function admin_home(Request $request)
    {
        return view('admin.index');
    }

    public function users(Request $request)
    {
        $users = User::all();
        return view('admin.users',[
            'users' => $users
        ]);
    }

    
    public function new_update_users(Request $request)
    {
        try{
            if ($request->filled('delete')) {
                User::where([
                    'id' => $request->input('id'),
                ])
                ->delete();

                return redirect()->back()->with('success','Successfully deleted user');
            } else {
                $pass = env('DEFAULT_PASS','admin@254');
                
                if((string)$request->input('new') == '1'){
                    User::create([
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'user_type' => 'A',
                        'password' => Hash::make($pass)
                        ]);
                }
                else{
                    User::where('id',$request->id)
                        ->update([
                            'name' => $request->input('name'),
                            'email' => $request->input('email')
                        ]);
                }
                    return redirect()->back()->with('success','Successful');
            }
        }
        catch(Exception $e){
            dd($e);
            return redirect()->back()->with('error','Operation on users failed');
            Log::error($e->getMessage());
        }
    }
}
