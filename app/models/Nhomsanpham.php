<?php

class Nhomsanpham extends \Eloquent {
	protected $fillable = [];

	protected $table = 'Nhomsanpham';

	public function Loaisanpham(){
		return $this->hasMany('Loaisanpham', 'id_nhom');
	}	
}