<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class requests extends Sximo  {
	
	protected $table = 'tb_request';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_request.* FROM tb_request  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_request.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
