<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Courses;

class ProgramsController extends Controller
{
    public function index() {
        return view('programs');
     }

     public function create() {
         $category = Category::all();
         $course = Courses::all();
        return view('dashboard/courses', compact('course','category'));
     }

     public function store(Request $request) {
                
        $request->validate([
            'course_title' => 'required',
            'body' => 'required'        
            
        ]);
           
            $course = new Courses([
                "course_title" => $request->course_title,
                "body" => $request->body,
                'category_id'=>$request->input('category_id'),
                'user_id'=>$request->user()->id
            ]);
 
            if($course->save()){
                echo "Course successfully created";
            }else{
               echo "An error occured";
            }
    }

    public function update(Request $request, $id) {
                   
        $data = $request->validate([
            'course_title'=> 'required',
            'category_id'=> 'required',
            'body'=> 'required',
            
        ]);

        Courses::whereId($id)->update($data);
       return back()->with('completed', 'Course updated');
    }

    public function destroy($id) {
        
        $course = Courses::findOrFail($id);
        $course->delete();
    return back()->with('completed', 'Course deleted successfully');
    }
}
