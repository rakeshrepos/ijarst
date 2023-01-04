<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Adminprofile extends Controller
{
    // {{   }}

    public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
    {
    	 $admin_id = Auth::user()->id; 

    	$user = User::where('id',$admin_id)->first();
    	// dd($user);
    	return view('Admin.Profile.profile',compact('user'));
    }


    public function update(Request $request ,$id)
    {
    	
    	// dd($request->add_line_1);

    	$user = User::where('id',$id)->first();

    	    if ($request->hasFile('image')) {

                $image = $request->file('image');
                $name = rand(11111,99999).time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('uploads/admin_profile/');
                $image->move($destinationPath, $name);
            }
            else
            {
               $name=$user->image; 
            }


    		$user->name = $request->name;
    		$user->email = $request->email;
    		$user->mobile = $request->mobile;
    		$user->image = $name;

    		if ($user->update()) {

    			return redirect('admin/profile')->with('success', 'Profile Updated Successfully');
    		}
    		else
    		{
    			return redirect('admin/profile')->with('Error', 'Sorry Try Again');
    		}



    }


    public function passwordupdate(Request $request ,$id)
    {
    	// dd($request->all());

    	$user = User::where('id',$id)->first();


    	$new_password = Hash::make($request->password);
    	
    	if (Hash::check($request->old_password ,$user->password)) {
    		
    		// dd($user->password);

    		$user->password = $new_password;

    		if ($user->update()) {

    			return redirect('admin/profile')->with('success', 'Password Updated Successfully');
    		}
    		else
    		{
    			return redirect('admin/profile')->with('Error', 'Sorry Try Again');
    		}

    	}
    	else
    	{
    		return redirect('admin/profile')->with('Error', 'Sorry Entered Password Is Wrong');
    	}

    }
}
