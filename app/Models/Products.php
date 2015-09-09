<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class products extends Sximo  {
	
	protected $table = 'bsc_products';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT bsc_products.* FROM bsc_products  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE bsc_products.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
