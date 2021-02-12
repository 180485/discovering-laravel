<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Post;
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
  
   
    public function store(Request $request)
    {
        $request->validate([
           'username' => 'required',
           'password' => 'required|min:5',
           'email' => 'required'
           
        ]);
   
        return redirect()->back()->with('message', 'HEY WELCOME TO LARAVEL!');
    }
}