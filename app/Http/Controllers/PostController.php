<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::with('categories')->get();
        $paginate = Post::orderBy('id', 'asc')->paginate(5);
        return view('posts.index', compact('posts', 'paginate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            // 'foto' => 'required',
            'category_id' => 'required',
            'isi' => 'required',
        ]);
        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Post::create([
            'title' => $request->title,
            'isi' => $request->isi,
            'image' => $image_name,
            'category_id' => $request->category_id,

        ]);
        return redirect()->route('posts.index')->with('success', 'Post Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Post = Post::with('categories')->where('id', $id)->first();
        return view('posts.detail', compact('Post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('categories')->where('id', $id)->first();
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
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
        $request->validate([
            'title' => 'required',
            // 'foto' => 'required',
            'category_id' => 'required',
            'isi' => 'required',
        ]);

        $post = Post::with('categories')->where('id', $id)->first();
        $post->title = $request->title;
        $post->isi = $request->isi;
        $post->category_id = $request->category_id;

        if ($post->foto && file_exists(storage_path('app/public/' . $post->image))) {
            Storage::delete('public/' . $post->image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $post->image = $image_name;

        $post->save();

        return redirect()->route('posts.index')
            ->with('success', 'Post Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect()->route('posts.index');
    }
}
