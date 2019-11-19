<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
//use DB;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'materials','showMaterial']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      
    public function index()
    {
        //$posts = Post::all();
        //$posts = Post::orderBy('title','desc')->get();
        //$post =Post::where('title','Post Two')->get();
        //$posts = DB::select ('Select * from posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        
        $posts = Post::orderBy('created_at','desc')->paginate(4);
        return view('posts.index')->with('posts',$posts);
       
    }

    public function materials()
    {
        //$posts = Post::all();
        //$posts = Post::orderBy('title','desc')->get();
        //$post =Post::where('title','Post Two')->get();
        //$posts = DB::select ('Select * from posts');
        //$posts = Post::orderBy('title','desc')->take(1)->get();
        
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('posts.materials')->with('posts',$posts);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'cover_image' => 'image|nullable|max:1999'
 
        ]);
  
        //Handle file Upload

        if($request -> hasFile('cover_image')){
            //Get filename with extention
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension= $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=  $filename.'_'.time().'.'.$extension;
            //actual code to upload image
            $path= $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);   
            //this $path points to storage/app/public/cover_image so create a symlink to 
        }
        else{
            $fileNameToStore= 'noimage.jpg';
        }

        //create post or insert post into db
        $post = new Post;
        $post->title = $request->input('title');
        
        $post->category = $request->input('category');
        $post->body = $request-> input('body');
        $post->assert= $request-> input('assert')  ;
        $post->user_id= auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/materials')->with('success','Post Created');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('posts.show')->with('post',$post);
    }
    //admin pages
    public function adminIndex(){
        if(auth()->user()->username !== 'admin') {
            return redirect('/')->with('error','Unathorized Page');
        }
        return view('admin.index');
    }

    public function showMaterial($id)
    {
        $post =  Post::find($id);
        return view('posts.single')->with('post',$post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =  Post::find($id);
        //check for correct user
        if(auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unathorized Page');
        }
        return view('posts.edit')->with('post',$post);

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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'cover_image' => 'image|nullable|max:1999'
            

        ]);

        //Handle file Upload

        if($request -> hasFile('cover_image')){
            //Get filename with extention
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename= pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension= $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore=  $filename.'_'.time().'.'.$extension;
            //actual code to upload image
            $path= $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);   
            //this $path points to storage/app/public/cover_image so create a symlink to 
        }
        
        //update post
        $post =  Post::find($id);

        //check for correct user
        if(auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unathorized Page');
        } 

        $post->title = $request->input('title');
        $post->category = $request->input('category');
        $post->body = $request-> input('body');

        if($request -> hasFile('cover_image')){

            if($post->cover_image != 'noimage.jpg'){
                    Storage::delete('public/cover_images/' . $post->cover_image);
            }
            $post->cover_image = $fileNameToStore;
        }
        
        $post->save();
        return redirect('/posts')->with('success','Post Udated');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  Post::find($id);


        //check for correct user
        if(auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unathorized Page');
        }

        if($post->cover_image != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();

        return redirect('/posts')->with('success','Post Removed');

    }
}
