<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Products;
use Illuminate\Http\Request;

use View;

class ProductsFrontController extends Controller {
	
	public function index()
	{

		$products=products::orderBy('id','desc')->get();
		return View::make('420-Market.index')->with('products',$products);
		
	}


	public function view()
	{

		$slug=Products::whereslug($slug)->first(); // select * from mon_cases where slug=$slug limit 1	
		return View::make('420-Market.view')->with('slug',$slug);


	}

}


//$explorer=Moncases::all();
//	
// Moncases::where('ID','!=','todd')->get();

//return $explorer;



/* Sets Route for Settlement Explorer */


