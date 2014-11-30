<?php

class Nhomsanpham extends \Eloquent {
	protected $fillable = [];

	protected $table = 'Nhomsanpham';
	protected $primaryKey = 'id_nhom';

	public function Loaisanpham(){
		return $this->hasMany('Loaisanpham', 'id_nhom', 'id_nhom');
	}	
}