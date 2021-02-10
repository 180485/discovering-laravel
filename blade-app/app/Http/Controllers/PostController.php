<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Post;
  
class PostController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_post');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'username' => 'required',
           
        ]);
   
        Post::create($request);
    
        return view('form');
    }
}