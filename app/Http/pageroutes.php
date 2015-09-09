<?php 

App::bind('billing\BillingInterface', 'billing\BillingInterface');


Route::get('Medical-Marijuana-News', 'HomeController@index');
Route::get('contact-us', 'HomeController@index');
Route::get('faq', 'HomeController@index');
Route::get('Illinois-Medical-Marijuana-Information', 'HomeController@index');
Route::get('Medical-Marijuana-Strain-Guide', 'HomeController@index');
Route::get('Shop-420-Windy-City', 'HomeController@index');
Route::get('420-market',function()
{
	return View::make('420-market.index');
});

//*Route::post('420-market',function()
//*{

//*	$billing= App::make('billing\BillingInterface');
//*	return $billing->charge([

//*		'email'=> Input::get('email'),
//*		'token'=> Input::get('token')

//*		]);

//*});

Route::get('420-Market', 'ProductsFrontController@index');
ROUTE::get('420-Market/{slug}',function($slug)
{

    $slug = DB::table('bsc_products')->where('download', $slug)->first();
    $related_products = DB::table('bsc_products')->get();
	return View::make('420-market.view')->with('slug',$slug)->with('related_products',$related_products);

});

Route::get('420-Windy-City-Medical-Marijuana-Blog', 'BlogFrontController@index');
ROUTE::get('420-Windy-City-Medical-Marijuana-Blog/{slug}',function($slug)
{

    $slug = DB::table('tb_blogs')->where('slug', $slug)->first();
	return View::make('blogs.view')->with('slug',$slug);

});


Route::get('Illinois-Medical-Marijuana-Law', 'LawfrontendController@index');
ROUTE::get('Illinois-Medical-Marijuana-Law/{search}',function($search)
{

    

    $search = DB::table('law_questions')->where('img', $search)->first();
    $law_categories = DB::table('law_questions')->where('cat_id', $search->cat_id)->get();
	return View::make('lawfront.view')->with('search',$search)->with('law_categories',$law_categories);

});


ROUTE::get('Medical-Marijuana-Strain-Guide/{slug}',function($slug)
{

	return View::make('strains.view')->with('slug',$slug);

});



ROUTE::get('420-Windy-City-Medical-Marijuana-Blog/{category}',function($slug)
{

    $slug = DB::table('tb_blogs')->where('slug', $slug)->first();
	return View::make('blogs.view')->with('slug',$slug);

});

?>