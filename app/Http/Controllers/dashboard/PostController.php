<?php
namespace App\Http\Controllers\dashboard;

use App\Models\Post;
use  \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at','desc')->paginate(5);

        return view('dashboard.category.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = Post::get();
        return view('dashboard.post.create',['post' => new Post()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StorePostPost $request)
    {


       //echo "hola mundo:".$request->input('title');
       //echo "holamundo: ".request("title");
       //echo "hola mundo".request("title");

    //    $request->validate([
    //        'title'=>'required|min:5|max:500',
    //        //'url_clean'=>'required|min:5|max:500'
    //        'content'=>'required|min:5'
    //    ]);

       echo "hola mundo: ".$request->content;


       Post::create($request->validated());

       return back()->with('status','Humano, Tu Post Creado Con Exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('dashboard.post.show',["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.edit',["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( StorePostPost $request, Post  $post)
    {

       $post->update($request->validated());

       return back()->with('status','Humano, tu Post se ha actualizado Con Exito');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();
      return back()->with('status','Humano, tu Post se ha ido a un agujero negro');


    }
}
