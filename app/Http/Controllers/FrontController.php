<?php

namespace App\Http\Controllers;

use App\Post;
use Request;
use Illuminate\Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::all()->where('status', 'published')->sortByDesc('date_start', SORT_REGULAR);
        $title = 'Conférences PHP';
        return view('front.index', compact('posts', 'title'));
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

        return view('front.showPost', compact('post'));
    }

    public function about()
    {
        return view('front.about');
    }
    public function mentions()
    {
        return view('front.mentions');
    }
}
