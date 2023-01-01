<?php

namespace App\Http\Controllers;

use App\Models\Posts;
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
        return view('dashboard.posts.index', [
            'posts' => Posts::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
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
            "title" => 'required|max:225',
            "slug" => 'required',
            "body" => 'required'
        ]);
        $slugExists = Posts::where('slug', $request->slug)->exists();
        if ($slugExists) {
            // Jika slug sudah ada, tambahkan -angka pada akhir slug
            $count = 2;
            while (Posts::where('slug', $request->slug . '-' . $count)->exists()) {
                $count++;
            }
            $validatedData['slug'] = $request->slug . '-' . $count;
        } else {
            // Jika slug belum ada, gunakan slug yang diinput oleh user
            $validatedData['slug'] = $request->slug;
        }

        $validatedData['user_id'] = auth()->user()->id;
        Posts::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New Post Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        return view('dashboard.posts.show', [
            'post' => $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        return view('dashboard.posts.edit', [
            'post' => $posts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        $rules = [
            "title" => 'required|max:225',
            "body" => 'required'

        ];


        if ($request->slug != $posts->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        Posts::where('id', $posts->id)
            ->update($validatedData);

        if ($posts->author->id !== auth()->user()->id) {
            abort(403);
        }

        return redirect('/dashboard/posts')->with('success', 'Post Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts)
    {
        Posts::destroy($posts->id);
        return redirect('/dashboard/posts')->with('success', 'Post Has Been Deleted!');
    }
}
