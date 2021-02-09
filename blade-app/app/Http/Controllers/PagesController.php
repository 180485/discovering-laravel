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
}
 

?>