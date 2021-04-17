<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $blogs = Blog::all();
       //dd($blog);
        return view('dashboard.blog', compact('category','blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->blog_image;
            

        //get image name
        $filename = $file->getClientOriginalName();
        

        //move image 
        $file->move('storage\blog', $filename);

            $blog = new Blog([
                'blog_title'=>$request->input('blog_title'),
                'category_id' =>$request->input('blog_category'),
                'user_id'=>$request->user()->id,
                'body' => $request->input('body'),
                'blog_image' => $filename,
            ]);
             

        if($blog->save()){
            echo "Blog successfully created";
        }else{
           echo "An error occured";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data= $request->validate([
            'blog_title' => 'required',
            'body' => 'required',
            'category'=>'required',         
        ]);

        //check for image
        if($request->blog_image){
           $data['blog_image'] = request('blog_image')->store('blogs');
        }

        Blog::whereId($id)->update($data);
        return back()->with('completed', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return back()->with('completed', 'Blog successfully deleted');
    }

    public function test()
    {
       return view('dashboard.test');
    }

    
}
