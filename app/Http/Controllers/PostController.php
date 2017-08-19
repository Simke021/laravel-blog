<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // kupim sve postove u promenljivu posts, eloquent metoda all()
        // $posts = Post::all();

        // Sortiranje i Pagination postova
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        // Validacija
        $this->validate($request, array(
            'title' => 'required|min:10|max:191',
            // validacija slug-a, dodajem alpha_dash validaciju/laravel dokumentacija i unique
            'slug'  => 'required|alpha_dash|min:5|max:191|unique:posts,slug',
            'body'  => 'required'
        ));

        // cuvanje u bazi
        $post = new Post;

        $post->title = $request->title;
        $post->slug  = $request->slug;
        $post->body  = $request->body;

        $post->save();

        // Session flash message  flash traje do refreshovanja strane a put do isteka sesije
        Session::flash('success', 'The blog post  is successfully saved!');

        // redirekcija
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Prikaz postova iz baze eloquent function find()
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // trazim post po id-u iz baze i cuvam ga u promenljivoj post
        $post = Post::find($id);

        // return view
        return view('posts.edit')->withPost($post);
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
        // Validacija
        $post = Post::find($id);

        if ($request->input('slug') == $post->slug){
            $this->validate($request, array(
            'title' => 'required|min:10|max:191',
            'body'  => 'required'
           ));

        }else{
            $this->validate($request, array(
                'title' => 'required|min:10|max:191',
                // validacija slug-a, dodajem alpha_dash validaciju/laravel dokumentacija
                'slug'  => 'required|alpha_dash|min:5|max:191|unique:posts,slug',
                'body'  => 'required'
            ));
            
        }

        // Trazim iz baze post po id-u
        $post = Post::find($id);

        // Update post-a
        $post->title = $request->input('title');
        $post->slug  = $request->input('slug');
        $post->body  = $request->input('body');

        // Cuvam u bazu
        $post->save();

        // Session flash poruka
        Session::flash('success', 'Blog post successfully saved!');

        // Redirekcija
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete post-a
        $post = Post::find($id);
        $post->delete();

        // Session flash poruka
        Session::flash('success', 'This post was successfully deleted!');

        // Redirekcija
        return redirect()->route('posts.index');
    }
}
