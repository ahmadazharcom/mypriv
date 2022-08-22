<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller{

	public function logo_update(Request $request){ 
	
        $rules = [

            'dashboard_logo' => 'image|file|max:1024',
            'dashboard_logo_mini' => 'image|file|max:1024',
            'login_logo' => 'image|file|max:1024'

        ];		
		
		$validatedData = $request->validate($rules);

        if($request->file('dashboard_logo')){

            if($request->old_dashboard_logo){

                Storage::delete($request->old_dashboard_logo);

            }
            
            //$validatedData['image'] = $request->file('image')->store('post-image');
			
			$file = $request->file('dashboard_logo');

			$destinationPath = 'storage/post-image';
            
			$validatedData['dashboard_logo'] = $request->file('dashboard_logo')->move($destinationPath,$file->getClientOriginalName());
			
        }      
		
        if($request->file('dashboard_logo_mini')){

            if($request->old_dashboard_logo_mini){

                Storage::delete($request->old_dashboard_logo_mini);

            }
            
            //$validatedData['image'] = $request->file('image')->store('post-image');
			
			$file = $request->file('dashboard_logo_mini');

			$destinationPath = 'storage/post-image';
            
			$validatedData['dashboard_logo_mini'] = $request->file('dashboard_logo_mini')->move($destinationPath,$file->getClientOriginalName());
			
        }

        if($request->file('login_logo')){

            if($request->old_login_logo){

                Storage::delete($request->old_login_logo);

            }
            
            //$validatedData['image'] = $request->file('image')->store('post-image');
			
			$file = $request->file('login_logo');

			$destinationPath = 'storage/post-image';
            
			$validatedData['login_logo'] = $request->file('login_logo')->move($destinationPath,$file->getClientOriginalName());
			
        }

        Profile::where('id', 1)
             ->update($validatedData);


        return redirect('/dashboard/setting')->with('success', 'Gambar telah dikemaskini!'); 		

	}

	public function profile_update(Request $request){        

        $rules = [

            'name' => 'required|string|min:4',
            'username' => 'required|string|min:4',
            'email' => 'required|string|email|max:255',
            'contact' => 'required|string|max:14'

        ];        

        $validatedData = $request->validate($rules);
		
        $validatedData['name'] = $request->name;
        $validatedData['username'] = $request->username;
        $validatedData['email'] = $request->email;
        $validatedData['contact'] = $request->contact;


        User::where('id', auth()->user()->id)
             ->update($validatedData);

        return redirect()->back()->with('status','Profile Updated Successfully');			
		
	}
	
	public function password_change(Request $request){

        $rules = [

            'password' => 'required|string|min:6|max:255'

        ];        

        $validatedData = $request->validate($rules);        

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', auth()->user()->id)
             ->update($validatedData);

        return redirect()->back()->with('status','Password Updated Successfully');		
		
	}

}
