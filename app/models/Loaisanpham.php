<?php

class Loaisanpham extends \Eloquent {
	protected $fillable = [];

	protected $table = 'loaisanpham';
	protected $primaryKey = 'id_loai';

	public $timestamps = false;

	public function Nhomsanpham(){
		return $this->belongsTo('Nhomsanpham', 'id_nhom', 'id_nhom');
	}
	public function Sanpham(){
		return $this->hasMany('Sanpham', 'id_loai', 'id_loai');
	}	
}