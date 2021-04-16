<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateProfileController extends Controller
{
    public function update(Request $request){
      
        if($request->hasFile('file')){
            $data = $request->validate([
                'picture' => 'mimes:jpeg,png,jpg' 
            ]);

            
            $request->file->store('user_pics', 'public');

            $id= Auth()->user()->id;
    
           User::whereId($id)->update($data);
           //$data->save(); //Save the record.
       
        return redirect()->back();
    }
}
}
