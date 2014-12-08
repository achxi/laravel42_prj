<?php

class Loaisanpham extends \Eloquent {
	protected $fillable = [];

	protected $table = 'Loaisanpham';
	protected $primaryKey = 'id_loai';

	public function Nhomsanpham(){
		return $this->belongsTo('Nhomsanpham');
	}
	public function Sanpham(){
		return $this->hasMany('Sanpham', 'id_loai', 'id_loai');
	}	
}