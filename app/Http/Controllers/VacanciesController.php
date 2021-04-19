<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;


class VacanciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $job = Jobs::all();
        $job_select = Jobs::all();
        return view('jobs', compact('job','job_select'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $job = Jobs::all();
        return view('dashboard.jobs', compact('job'));
    }

   
    public function store(Request $request) {
      
        $request->validate([
            'job_title' => 'required',
            'deadline' => 'required',
            'body'=>'required',
                    
            
        ]);          
    
                Jobs::create([
                  
                    "job_title" => $request->job_title,
                    "body" => $request->body,
                    "deadline" => $request->deadline,
                    'user_id'=>$request->user()->id                  
                    
                ]);  
              
                   
            }
 


   
    public function update(Request $request, $id){
           $data = $request->validate([
                'job_title' => 'required',
                'deadline' => 'required',
                'body'=>'required'
            ]); 

        Jobs::whereId($id)->update($data);
        return back()->with('success', 'Vacancy successfully updated');

        
       }     
    

    public function destroy($id) {
        $job = Jobs::findOrFail($id);
        $job->delete();
        return back()->with('success', 'Vacancy successfully deleted');
    }

  
}
