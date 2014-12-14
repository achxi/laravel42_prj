
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
		$products = Sanpham::paginate(9);
		$this->layout->title = "Achxi :: Products";
	    $this->layout->nest('content', 'admin.admin.products', array('products' => $products));
	}
	public function product_destroy($id){
		Sanpham::destroy($id);
		return Redirect::route('admin.products')->with(Session::flash('notify', "Delete product id:$id successfully"));
	}	
	public function product_add(){
		$this->layout->title = "Achxi :: Add A Product";
		$products = array();
		$this->layout->nest('content', 'admin.admin.product_add', array('products' => $products));
	}	
	public function members(){
		$this->layout->title = "Achxi :: Members";
		$members = Thanhvien::paginate(10);
		$this->layout->nest('content', 'admin.admin.members', array('members' => $members));
	}			
}
