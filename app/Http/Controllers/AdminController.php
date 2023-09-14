<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Closure;
use http\QueryString;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  public function AdminProfile(){
      $id = Auth::id();
      $adminData = User::query()->find($id);
//      dd($adminData);

      return view('admin.admin_profile',compact('adminData'));
  }//end method

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login/view')->with('logedout','log out complete');
    }//End method


    public function UpdateProfile(Request $request){
//      dd($request->all());
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name =$request->name;
        $data->username =$request->username;
        $data->phone =$request->phone;
        $data->address =$request->address;
        $data->updated_at = Carbon::now();
        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/adminImages/' . $data->photo));

            $filename = $id . "_" . $file->getClientOriginalName();
            $file->move(public_path('upload/adminImages'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();
        return redirect()->route('admin.profile')->with('Profileupdated','Admin Profile Updated');
    }
    //end mehtod

    public function AdminDashboard(){
      return view('admin.dashboard');
    }//end method

    public function ChangePassword(){
        $id=Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.change_password',compact('adminData'));
    }//End Method

    public  function UpdatePassword(Request $request)
    {
        // validation
        $request->validate([
            'old_password' =>['required',
                function (string $attribute, mixed $value, Closure $fail) {
                    if (!Hash::check($value,Auth::user()->password)) {
                        $fail("The Old Password is not Match !");
                    }
                },
            ],
            'new_password'=>'required|confirmed|min:3',
            'new_password_confirmation' => ['required','same:new_password'],

        ]);

        if (!Hash::check($request->old_password,Auth::user()->password)){
            $notification = array(
                'message' => 'Old Password Does not Match ! ',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
        //Update The new password
        $id=Auth::user()->id;
        User::whereid(auth()->user()->id)->update([
            'password'=>Hash::make($request->new_password),
        ]);
        $notification = array(
            'message' => 'Password Change Successfully Relogin! ',
            'alert-type' => 'success'
        );
//        return  redirect('admin/logout')->with($notification);
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        return redirect('/admin/login/view')->with('PasswordUpdated','Change password Complete');

    }//End UpdatePassword method


    public function AdminLoginView(){
      return view('admin.adminLogin');
    }
    //End method




}
