<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::next('date_start');
        return view('posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PostRequest $request)
    {

        $post=Post::create($request->all());
        if($request->hasFile('link_thumbnail') )
        {
            $file = $request->file('link_thumbnail');
            $ext = $file->getClientOriginalExtension();
            $fileName = str_random(12).'.'.$ext;
            $file->move('assets/img/confs', $fileName);
            $post->link_thumbnail = $fileName;
            $post->save();



        }

        return redirect('/dashboard')->with([
            'flash_message' => 'La conférence a bien été créée!',
            'flash_message_important' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $post = Post::findOrNew($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrNew($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrNew($id);
        $post->update($request->all());
        if($request->hasFile('link_thumbnail') )
        {
            $file = $request->file('link_thumbnail');
            $ext = $file->getClientOriginalExtension();
            $fileName = str_random(12).'.'.$ext;
            $file->move('assets/img/confs', $fileName);
            $post->link_thumbnail = $fileName;
            $post->save();


        }

        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->to('dashboard')->with('success', 'success delete!');
    }

    public function updateStatus(Request $request, $id)
    {
        Post::find($id)->update($request->only('status'));

        return Redirect()->to('dashboard')->with('success', 'success update!');
    }
}
