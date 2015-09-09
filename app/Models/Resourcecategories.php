<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class resourcecategories extends Sximo  {
	
	protected $table = 'legal_resource_categories';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT legal_resource_categories.* FROM legal_resource_categories  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE legal_resource_categories.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
