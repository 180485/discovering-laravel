<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    
    public function index()
    {
        return view ("layouts/main");
    }
    public function form()
    {
        return  view ("form");
    }
    public function footer()
    {
        return  view ("footer");
    }
    public function contact()
    {
        return  view ("contact");
    }
    public function image()
    {
        return  view ("image");
    }
}
 

?>