<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Products;
use Illuminate\Http\Request;

use View;

class ProductsFrontController extends Controller {
	
	public function index()
	{

		return View::make('420-Market.index');

	}


}


//$explorer=Moncases::all();
//	
// Moncases::where('ID','!=','todd')->get();

//return $explorer;



/* Sets Route for Settlement Explorer */


