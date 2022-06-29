<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $categories = Category::whereNull('parent_id')->with('descendants')->get();
        // $categories = Category::orderBy('id', 'desc')->paginate(6)
        // return view('categories.index', compact('categories'));
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $categories = Category::where('title', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $categories = Category::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('categories.index', compact('categories'));
    }

    public function select(Request $request)
    {
        $categories = [];
        if ($request->has('q')) {
            $search = $request->q;
            $categories = Category::select('id', 'title')->where('title', 'LIKE', "%$search%")->limit(6)->get();
        } else {
            $categories = Category::select('id', 'title')->onlyParent()->limit(6)->get();
        }

        return response()->json($categories);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampil(Request $request)
    {
        // $categories = Content::all();
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $categories = Category::where('title', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $categories = Category::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
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
            // 'slug' => 'required',
            // 'thumbnail' => 'file|image|mimes:jpeg,png,jpg',
            'description' => 'required',
        ]);

        if ($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }

        Category::create([
            'title' => $request->title,
            'thumbnail' =>$image_name,
            'slug' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::find($id);
        return view('categories.detail',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('categories.edit', ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->get('thumbnail') && file_exists(storage_path('app/public/' . $request->thumbnail))) {
            Storage::delete(['public/' . $request->thumbnail]);
        }
        $image_name = $request->file('thumbnail')->store('images', 'public');
        $categories = Category::find($id);
        $categories->thumbnail = $image_name;
        $categories->title = $request->get('title');
        $categories->slug = $request->get('title');
        $categories->description = $request->get('description');

        $categories->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categories.index');
    }
}
