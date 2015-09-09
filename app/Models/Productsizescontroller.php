<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class productsizescontroller extends Sximo  {
	
	protected $table = 'bsc_sizes';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT bsc_sizes.* FROM bsc_sizes  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE bsc_sizes.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
