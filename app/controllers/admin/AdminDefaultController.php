
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
	public function member_new(){
		$this->layout->title = "Achxi :: Add New Member";
		$this->layout->nest('content', 'admin.admin.member_new');
	}		
	public function member_add(){
		$data = array('loginname' => Input::get('loginname'),
						'password' => Input::get('password'),
						'password_confirmation' => Input::get('re_password'),
						'email' => Input::get('email')
					);

		$validator = Validator::make($data, Thanhvien::$auth_rules_reg);
		if($validator->fails()){
			return Redirect::route('admin.member_new')->withErrors($validator)->withInput();
		}else{
			Thanhvien::create(array(
	            'user' => Input::get('loginname'),
	            'pass' => Hash::make('123321'),
	            'hoten' => Input::get('fullname'),
	            'diachi' => Input::get('address'),
	            'email' => Input::get('email'),
	            'dienthoai' => Input::get('phone'),
	            'hieuluc' => Input::get('privilege'),
	            'capquyen' => Input::get('level'),
	        ));
			return Redirect::route('admin.members')->with(Session::flash('notify', 'Create member '.Input::get('loginname'). ' successfully'));
		}	
	}
	public function member_destroy($id){
		Thanhvien::destroy($id);
		return Redirect::route('admin.members')->with(Session::flash('notify', "Delete member: $id successfully"));
	}
	public function member_edit_form($id){
		$this->layout->title = "Achxi :: Edit Member";
		$user = Thanhvien::find($id);
		$this->layout->nest('content', 'admin.admin.member_edit_form', array('user' => $user, 'id' => $id));
	}		
	public function member_edit(){
		$id = Input::get('id');
		$data = array('user' => Input::get('user'),
				'pass'              => Input::get('pass'),
				'pass_confirmation' => Input::get('re_password'),
				'email'             => Input::get('email'),
				'dienthoai'         => Input::get('dienthoai'),
				'hoten'             => Input::get('hoten'),
				'diachi'            => Input::get('diachi'),
				'hieuluc'           => Input::get('hieuluc'),
				'capquyen'          => Input::get('capquyen')
			);

		$validator = Validator::make(
			$data, array('user' => 'required|unique:thanhvien,user,'.$id.',user',
			'pass'                  => 'sometimes|min:5|confirmed',
			'pass_confirmation' => 'sometimes|min:5',
			'email'                 => 'required|email',
			'dienthoai'             => 'sometimes|numeric',
			'hieuluc'               => 'sometimes|boolean',
			'capquyen'              => 'sometimes|boolean'
			)
		);
		if($validator->fails()){
			return Redirect::route('admin.member_edit_form', $id)->withErrors($validator)->withInput();
		}else{
			$user = Thanhvien::find($id)->update($data);
			return Redirect::route('admin.members')->with(Session::flash('notify', 'Update user: '.$id.' successfully'));
		}				
	}
	public function products_type(){
		$this->layout->title = "Achxi :: Products Type";
		$types = Nhomsanpham::all();
		$this->layout->nest('content', 'admin.admin.products_type', array('types' => $types));
	}	
	public function type_destroy($id){
		$items = Loaisanpham::where('id_nhom','=',$id)->count();
		if($items){
			return Redirect::route('admin.products_type')->with(Session::flash('notify', "Cannot delete products type: $id because exist product belong to this type"));			
		}else{
			Nhomsanpham::destroy($id);
			return Redirect::route('admin.products_type')->with(Session::flash('notify', "Delete products type: $id successfully"));
		}
	}	
	public function type_new(){
		$this->layout->title = "Achxi :: Add New Product Type";
		$this->layout->nest('content', 'admin.admin.type_new');
	}
	public function type_add(){
		$data = array('id_nhom' => Input::get('id_nhom'),
						'tennhom' => Input::get('tennhom')
					);

		$validator = Validator::make($data, Nhomsanpham::$add_rules);
		if($validator->fails()){
			return Redirect::route('admin.type_new')->withErrors($validator)->withInput();
		}else{
			Nhomsanpham::create($data);
			return Redirect::route('admin.products_type')->with(Session::flash('notify', 'Create products type '.Input::get('tennhom'). ' successfully'));
		}	
	}	
	public function type_edit_form($id){
		$this->layout->title = "Achxi :: Edit Product Type";
		$type = Nhomsanpham::find($id);
		$this->layout->nest('content', 'admin.admin.type_edit_form', array('type' => $type, 'id' => $id));
	}	
	public function type_edit(){
		$id = Input::get('id');
		$data = array('id_nhom' => Input::get('id_nhom'),
					  'tennhom' => Input::get('tennhom'),
			);

		$validator = Validator::make(
			$data, array('id_nhom' 	=> 'required|numeric|min:1|unique:nhomsanpham,id_nhom,'.$id.',id_nhom',
						'tennhom'   => 'min:2'
			)
		);
		if($validator->fails()){
			return Redirect::route('admin.type_edit_form', $id)->withErrors($validator)->withInput();
		}else{
			Nhomsanpham::where('id_nhom','=',$id)->update($data);
			$count = Loaisanpham::where('id_nhom','=',$id)->count();
			$items = Loaisanpham::where('id_nhom','=',$id);
			if($count){
				$items->update(array('id_nhom' => Input::get('id_nhom')));
			}
			return Redirect::route('admin.products_type')->with(Session::flash('notify', 'Update product type: '.$id.' successfully'));
		}				
	}
	public function products_kind(){
		$this->layout->title = "Achxi :: Products Kind";
		$kinds = Loaisanpham::all();
		$this->layout->nest('content', 'admin.admin.products_kind', array('kinds' => $kinds));
	}
	public function kind_destroy($id){
		Loaisanpham::destroy($id);
		return Redirect::route('admin.products_kind')->with(Session::flash('notify', "Delete products kind: $id successfully"));
	}
	public function kind_new(){
		$this->layout->title = "Achxi :: Add New Product Kind";
		$types = Nhomsanpham::all();
		$this->layout->nest('content', 'admin.admin.kind_new', array('types' => $types));
	}
	public function kind_add(){
		$data = array(  'id_loai' => Input::get('id_loai'),
						'id_nhom' => Input::get('id_nhom'),
						'tenloaisp' => Input::get('tenloaisp')
					);

		$validator = Validator::make($data, Loaisanpham::$add_rules);
		if($validator->fails()){
			return Redirect::route('admin.kind_new')->withErrors($validator)->withInput();
		}else{
			Loaisanpham::create($data);
			return Redirect::route('admin.products_kind')->with(Session::flash('notify', 'Create products kind '.Input::get('tennhom'). ' successfully'));
		}	
	}
	public function kind_edit_form($id){
		$this->layout->title = "Achxi :: Edit Product Kind";
		$kind = Loaisanpham::find($id);
		$types = Nhomsanpham::all();
		$this->layout->nest('content', 'admin.admin.kind_edit_form', array('kind' => $kind,
																			'types' => $types,
																			'id' => $id));

	}
	public function kind_edit(){
		$id = Input::get('id');
		$data = array('id_loai' => Input::get('id_loai'),
					  'id_nhom' => Input::get('id_nhom'),
					  'tenloaisp' => Input::get('tenloaisp'),
			);

		$validator = Validator::make(
			$data, array(
				'id_loai' 	=> 'required|numeric|min:1|unique:Loaisanpham,id_loai,'.$id.',id_loai',
				'tennhom'   => 'min:2'
			)
		);
		if($validator->fails()){
			return Redirect::route('admin.kind_edit_form', $id)->withErrors($validator)->withInput();
		}else{
			Loaisanpham::where('id_loai','=',$id)->update($data);
			return Redirect::route('admin.products_kind')->with(Session::flash('notify', 'Update product kind: '.$id.' successfully'));
		}				
	}

}
