<?php namespace App\Http\Controllers;

use App\Http\Controllers\controller;
use App\Models\Blog;
use Illuminate\Http\Request;

use View;

$api_url = 'http://data.leafly.com';
$app_id = '91768d00';
$app_key = 'fa557088ad73a02196ab929a1be0437b';

include(app_path().'/includes/leafly/utils.php');
include(app_path().'/includes/leafly/src/leafly.php');

Leafly_Connector::init( $app_id, $app_key );
$strains = new Leafly_Strains();

class BlogFrontController extends Controller {
	
	public function index()
	{

        $search = $strains->search( array( 'take' => 20, 'page' => 0, 'conditions' => 'addadhd' ) );
		return View::make('strains.view')->with('search',$search);


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


