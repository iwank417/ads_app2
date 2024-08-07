<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard/posts/index' ,[
            'posts' => Post::where('user_id',auth()->user()->id)->get()



        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/posts/create',[
            'categories'=> Category::all()


        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body),200);

        Post:: create($validateData);
        return redirect('/dashboard/posts')->with('success','new post sudah di buat !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return view('dashboard/posts/show',[
            'posts' => $post

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard/posts/edit',[
            'posts' => $post,
            'categories'=> Category::all()
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules =[
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ];
        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts' ;
        }

       $validateData = $request->validate($rules);

       $validateData['user_id'] = auth()->user()->id;
       $validateData['excerpt'] = Str::limit(strip_tags($request->body),200);

       Post:: where('id',$post->id)
                ->update($validateData);
       return redirect('/dashboard/posts')->with('success','post sudah di Update !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post:: destroy($post->id);
        return redirect('/dashboard/posts')->with('success','postingan sudah di hapus');
    }
    
}

