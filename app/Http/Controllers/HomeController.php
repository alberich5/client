<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     /*mostrar las quejas solicitadas*/
    public function index(Request $request)
    {
        $posts=Post::where('id_usuario','=',$request->user()->id)->orderBy('created_at', 'desc')->paginate(10);

        return view('home',compact("posts"));
    }
}
