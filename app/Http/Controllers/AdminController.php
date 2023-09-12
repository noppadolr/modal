<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use http\QueryString;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        return redirect('login')->with('logedout','log out complete');
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
    }

}
