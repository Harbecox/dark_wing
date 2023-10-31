<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBY('created_at','desc')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(AdminPostStoreRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->context = $request->context;
        $post->intro = $request->intro;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $seo_url = $request->get("seo_url",null);
        $post->seo_url = $seo_url == null ? Str::slug($post->title, '-') : $seo_url;
        $post->image = $request->file('image')->store('images');
        $post->enabled = $request->boolean('enabled');
        $post->save();

        return redirect()->route('post.create')
            ->with('success','Post has been created successfully.');
    }


    public function edit(Post $post)
    {
        return view('admin.post.edit',compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'context' => 'required',
            'intro' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $post = Post::find($post->id);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image',
            ]);
            $post->image = $request->file('image')->store('images');
        }

        $post->title = $request->title;
        $post->context = $request->context;
        $post->intro = $request->intro;
        $seo_url = $request->seo_url;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->seo_url =  $seo_url == null ? Str::slug($post->title, '-') : $seo_url;
        $post->enabled = $request->boolean('enabled');
        $post->save();
        return redirect()->route('post.edit',$post)
            ->with('success','Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')
            ->with('success','Post has been deleted successfully');
    }
}
