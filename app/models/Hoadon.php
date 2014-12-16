<?php

class Hoadon extends \Eloquent {
	protected $fillable = ['id_hoadon','hoten','diachi','email','dienthoai','fax','cty','id','soluong','tongtien','ngaydat'];

	protected $table = 'hoadon';
	protected $primaryKey = 'id_hoadon';

	public static $add_rules = [
		'id_hoadon' => 'required|numeric|min:1|unique:hoadon,id_hoadon',
		'email' => 'required|email',
		'dienthoai' => 'required|numeric',
		'fax' => 'required|numeric',
		'id' => 'numeric',
		'soluong' => 'numeric',
		'tongtien' => 'numeric'
	];	

}