<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use View;

class BlogFrontController extends Controller {
	
	public function index()
	{

		$blogPosts=Blog::orderBy('BlogId','desc')->get();
		return View::make('blogs.index')->with('blogPosts',$blogPosts);

	}


	public function view()
	{

		$slug=Blog::whereslug($slug)->first(); // select * from mon_cases where slug=$slug limit 1	
		return View::make('blogs.view')->with('slug',$slug);


	}

}


//$explorer=Moncases::all();
//	
// Moncases::where('ID','!=','todd')->get();

//return $explorer;



/* Sets Route for Settlement Explorer */


