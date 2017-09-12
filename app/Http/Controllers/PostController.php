<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //metodo 1
        $posts = Post::all();
        return view('posts.index', compact('posts'));

        //metodo 2
//        return $posts = Post::all();

   //     dd($post = Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        //return $request->get('title');
        //return $request->title;

        //metodo 1:
        Post::create($request->all());
        return redirect('/posts');

        //Metodo 2:
        //$input = $request->all();
        //$input['title'] = $request->title;
        //Post::create($request->all());

        //metodo 3
//    $post = new Post;
//    $post->title = $request->title;
//    $post->save();




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
      $posts= Post::findOrFail($id);
      return view('posts.show',compact('posts'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts= Post::findOrFail($id);
        return view('posts.edit', compact('posts'));

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
       // return "ok..";
        $post= Post::findOrFail($id);
        $post->update($request->all());
        return redirect('posts/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post= Post::whereId($id)->delete();
        return redirect('/posts');
    }


    public function contact(){

        $people =['A', 'B', 'C','D','E'];

        return view('contact', compact('people'));
    }

    public function show_post($id, $name, $pass)
    {
        //return "hello!";
        //return view('show')->with('id',$id);
        return view('show', compact('id','name','pass'));
    }


}
