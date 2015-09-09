<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class lawquestions extends Sximo  {
	
	protected $table = 'law_questions';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT law_questions.* FROM law_questions  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE law_questions.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
