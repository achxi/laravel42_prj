<?php

class Nhomsanpham extends \Eloquent {
	protected $fillable = ['id_nhom', 'tennhom'];

	protected $table = 'nhomsanpham';
	protected $primaryKey = 'id_nhom';


	public $timestamps = false;

	public static $add_rules = [
		'id_nhom' => 'required|numeric|min:1|unique:nhomsanpham,id_nhom',
		'tennhom' => 'required|min:2'
	];

	public function Loaisanpham(){
		return $this->hasMany('Loaisanpham', 'id_nhom', 'id_nhom');
	}	
}