<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class productcategories extends Sximo  {
	
	protected $table = 'bsc_category';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT bsc_category.* FROM bsc_category  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE bsc_category.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
