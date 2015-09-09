<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class lawcategories extends Sximo  {
	
	protected $table = 'law_cat';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT law_cat.* FROM law_cat  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE law_cat.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
