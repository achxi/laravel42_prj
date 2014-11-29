<?php

class Loaisanpham extends \Eloquent {
	protected $fillable = [];

	protected $table = 'Loaisanpham';

	public function Nhomsanpham(){
		return $this->belongsTo('Nhomsanpham');
	}
}