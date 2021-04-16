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
    public function index()
    {
        return view('jobs');
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
        // Validate the inputs
        $request->validate([
            'job_title' => 'required',
            'deadline' => 'required',
            'body'=>'required'
           
            
        ]);
            
            $job = new Jobs([
                "job_title" => $request->job_title,
                'deadline' => $request->deadline,
                'body' => $request->body,
                'user_id'=>$request->user()->id
            ]);

            if($job->save()){
                echo "Vacancy successfully created";
            }else{
               echo "An error occured";
            }
           
           
      
       
       //return back()->with('success','Vacancy successfully created');

    }


   
    public function update(Request $request, $id){
         $data = $request->validate([
            'job_title' => 'required',
            'deadline' => 'required',
            'body'=>'required'
        ]);
    
        
        
        Jobs::whereId($id)->update($data);
        return back()->with('completed', 'Vacancy updated');
       }
    

    public function destroy($id) {
        $job = Jobs::findOrFail($id);
        $job->delete();
        return back()->with('completed', 'Vacancy deleted');
    }
}
