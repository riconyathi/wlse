<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateProfileController extends Controller
{
    public function update(Request $request){

        //get id
        $id= Auth()->user()->id;
      
        if($request->hasFile('file')){
            $data = $request->validate([
                'picture' => 'mimes:jpeg,png,jpg' 
            ]);

            //unlink image 
            $user = User::findOrFail($id);
            
            // $image_path = app_path().'\storage\user_pics\'.$user->picture;

            // if (User::exists($image_path)) {
            //     //File::delete($image_path);
            //     unlink($image_path);
            // }
            
////////////////////////////////////////////////////////
            $file = $request->file;
            

            //get image name
            $filename = $file->getClientOriginalName();
            

            //move image 
            $file->move('storage\user_pics', $filename);

                
           //store image image
           User::whereId($id)->update(['picture' => $filename]);
           
       
        return redirect()->back();
    }
}
}
