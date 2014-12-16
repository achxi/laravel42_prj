<?php

class Loaisanpham extends \Eloquent {
	protected $fillable = ['id_loai','id_nhom','tenloaisp'];

	protected $table = 'loaisanpham';
	protected $primaryKey = 'id_loai';

	public $timestamps = false;

	public static $add_rules = [
		'id_loai' => 'required|numeric|min:1|unique:loaisanpham,id_loai',
		'id_nhom' => 'required|numeric|min:1',
		'tenloaisp' => 'required|min:2'
	];	

	public function Nhomsanpham(){
		return $this->belongsTo('Nhomsanpham', 'id_nhom', 'id_nhom');
	}
	public function Sanpham(){
		return $this->hasMany('Sanpham', 'id_loai', 'id_loai');
	}	
}