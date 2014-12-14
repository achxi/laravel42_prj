
<?php

class AdminDefaultController extends \AdminController {

	public function index(){
		// $products = Sanpham::paginate(9);
		$products = array();
		$this->layout->title = "Achxi :: Admin Panel";
	    $this->layout->nest('content', 'admin.admin.index', array('products' => $products));
	}
	public function products(){
		// $products = Sanpham::paginate(9);
		// $products = array();
		$products = Sanpham::all();
		$this->layout->title = "Achxi :: Products";
	    $this->layout->nest('content', 'admin.admin.products', array('products' => $products));
	}
}
