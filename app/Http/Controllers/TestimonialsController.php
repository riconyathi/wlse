<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $testimonial = Testimonials::all();
        return view('dashboard.testimonial', compact('testimonial'));
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
    
       
            if ($request->hasFile('testimonial_image')) {

                $request->validate([
                    'testimonial_image' => 'mimes:jpeg,png,jpg',
                    'testimonial_title' => 'required',
                    'body'=>'required'  
                ]);
    
                
                $request->testimonial_image->store('testimonials', 'public');
    
                $testimonials = new Testimonials([
                  
                    "testimonial_image" => $request->testimonial_image->hashName(),
                    "title" => $request->testimonial_title,
                    'body' => $request->body,
                    'user_id'=>$request->user()->id                  
                    
                ]);  
                
                if($testimonials->save()){
                    return back()->with('success', 'Testimonial successfully created');
                }else{
                    return back()->with('error', 'An error occured');
                                     
                }
               
            }else{
                $request->validate([
                    'testimonial_title' => 'required',
                    'body'=>'required'  
                ]);           
    
                Testimonials::create([
                  
                    "title" => $request->testimonial_title,
                    'body' => $request->body,
                    'user_id'=>$request->user()->id                  
                    
                ]);  
                return back()->with('success', 'Testimonial successfully created');
                   
            }

   
          
    }

  
    public function update(Request $request, $id){
        if ($request->hasFile('testimonial_image')) {
            
                $data = $request->validate([
                    'testimonial_image' => 'mimes:jpeg,png,jpg',
                    'title' => 'required',
                    'body'=>'required' 
                ]);
                // $request->testimonial_image->hashName();
                $request->testimonial_image->store('testimonials', 'public');    
                
            Testimonials::whereId($id)->update($data);
        }else{

            $data = $request->validate([
                'title' => 'required',
                'body'=>'required' 
            ]);

            Testimonials::whereId($id)->update($data);
        }
     return back()->with('success', 'Testimonial updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonials::findOrFail($id);
        $testimonial->delete();

        return back()->with('success', 'Testimonial deleted');
    }
}
