<?php

class Sanpham extends \Eloquent {
	protected $fillable = [];

	protected $table = 'sanpham';

	public function Loaisanpham(){
		return $this->belongsTo('Loaisanpham');
	}	
}