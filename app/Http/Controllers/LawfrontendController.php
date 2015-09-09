<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Lawquestions;
use Illuminate\Http\Request;

use View;

class LawfrontendController extends Controller {
	
	public function index()
	{

		$blogPosts=Lawquestions::orderBy('id','desc')->get();
		return View::make('lawfront.index')->with('blogPosts',$blogPosts);

	}



}


//$explorer=Moncases::all();
//	
// Moncases::where('ID','!=','todd')->get();

//return $explorer;



/* Sets Route for Settlement Explorer */


