<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('user.index', [
            'user' => User::get(),
            'posts' => Post::latest()->get(),
            'categories' => Category::get(),
        ]);
        
    }
    
    public function showByCategories(Category $category)
    {
        
        return view('user.index', [
            'categories' => Category::get(),
            'posts' => $category->posts,
            'category' => $category->name,
            'activeBtn' => "active-btn-categories",
        ]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.post-form',[
            'categories' => Category::get(),
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

        $validatedData = $request->validate([
            'title' => 'required|max:225',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file',
            'description' => 'required',
            'place' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);

        
        return redirect()->route('profile', [Auth::id()])
        ->with('succes', 'Your post has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.show', [
            'post' => Post::findorFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.edit-post-form',[
            'categories' => Category::get(),
            'post' => Post::findorFail($id),
        ]);
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
        
        $rules = [
            
            'title' => 'required|max:225',
            'category_id' => 'required',
            'image' => 'image|file',
            'description' => 'required',
            'place' => 'required',
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData = $request->validate($rules);
        
        Post::where('id', $post->id)
            ->update($validatedData);

        
        return redirect()->route('profile', [Auth::id()])
        ->with('succes', 'Your post has been Updated');

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
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
