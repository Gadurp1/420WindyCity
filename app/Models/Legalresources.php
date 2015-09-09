<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class legalresources extends Sximo  {
	
	protected $table = 'legal_resources';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT legal_resources.* FROM legal_resources  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE legal_resources.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
