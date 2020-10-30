<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function uploadCertificates(Request $request) {
        $user = Auth::user();
        $images=[];
        if($files=$request->file('images')){
            $i = 1;
            foreach($files as $file){
                $name = 'users/certificates/'.time().$i.'.'.$file->getClientOriginalExtension();
                $file->move(storage_path('app/public').'/users/certificates/', $name);
                $images[]=$name;
                $i++;
            }
        }

        $user->certificates = $images;
        $user->save();

        return redirect()->route($user->role->name.'.cabinet');
    }

    public function update(Request $request){
        $user = Auth::user();
        $user->update($request->except('_token'));
        return redirect()->route($user->role->name.'.cabinet');
    }

}
