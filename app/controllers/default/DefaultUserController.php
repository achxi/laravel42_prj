<?php

class DefaultUserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /DefaultUserController
	 *
	 * @return Response
	 */
	// protected $layout = 'default._layouts.master';

	public function index()
	{
		$products = Sanpham::all();
		$this->layout->title = "Achxi :: Welcome Home";
    	$this->layout->types = $this->types;
		// 
		// $groups = Nhomsanpham::find(1);
		// $groups = Nhomsanpham::find(2)->get();
		// $groups = Nhomsanpham::all();
		
/*		foreach($types as $type){
			foreach($type->Loaisanpham as $some){
				if($some->id_nhom == 1){
				echo $some->tenloaisp."<br/>";
				}
			}
		}	*/

/*		foreach($groups->Loaisanpham as $group){
				echo $group->tenloaisp."<br/>";
		}*/	
			// echo "<pre>";
			// // dd(DB::getQueryLog());
			// print_r($types);

		// return View::make('default.user.index', compact(array('products', 'types')));
	    $this->layout->nest('content', 'default.user.index', array('products' => $products));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /DefaultUserController/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /DefaultUserController
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /DefaultUserController/{id}DefaultUserController
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->title = "Achxi :: Product Details";
		$this->layout->types = $this->types;
		$detail = Sanpham::find($id);
		if(Cart::contents()){
			foreach(Cart::contents() as $item){
				if($item->id == $id){
					$qty = $item->quantity;
					break;
				}else{
					$qty = 1;
				}
			}
		}else{
			$qty = 1;
		}
		$this->layout->nest('content', 'default.user.show', array('detail' => $detail,
																	'qty'  => $qty
																	));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /DefaultUserController/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /DefaultUserController/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /DefaultUserController/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function type($id)
	{
		$this->layout->title = "Achxi :: Product By Type";
		$this->layout->types = $this->types;
		$catgories = Sanpham::where('id_loai', '=', $id)->get();
		$this->layout->nest('content', 'default.user.type', array('catgories' => $catgories));
	}
	public function search()
	{
		$this->layout->title = "Achxi :: Product By Type";
		$this->layout->types = $this->types;
		$str = Input::get('str');
		$results = Sanpham::where('tensp', 'LIKE', '%'.$str.'%' )->get();
		$this->layout->nest('content', 'default.user.search', array('results' => $results));
	}	
	public function login()
	{
		$this->layout->title = "Achxi :: Login";
		$this->layout->types = $this->types;
		$this->layout->nest('content', 'default.user.login');
	}	
	public function postLogin()
	{
		$this->layout->title = "Achxi :: Login";
		$this->layout->types = $this->types;
		$data = array('username' => Input::get('username'),
						'password' => Input::get('password')
					);

		$validator = Validator::make($data, Thanhvien::$auth_rules);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if(Auth::attempt(array('user' => 'laravel_hash', 'password' => Hash::make('123456')))){
			// return Redirect::intended('default.user.index');
			return "thats it!!!";
		}
		// return Redirect::route('default.user.postLogin');
		return "no good";

/*		$user = Thanhvien::create(array(
            'user' => 'laravel_hash',
            'pass' => Hash::make('123456')
        ));

		Auth::login($user);*/
	}		
	public function cart()
	{
		$this->layout->title = "Achxi :: Cart";
		$this->layout->types = $this->types;
		$carts = Cart::contents();
		$this->layout->nest('content', 'default.user.cart', array('carts' => $carts));
	}		
	public function cart_add()
	{
		$validator = Validator::make(
		    array('quantity' => Input::get('quantity')),
		    array('quantity' => 'required|numeric|min:1')
		);
		if($validator->fails()){
			$errors = $validator->messages();
			return Redirect::back()->withErrors($validator);
		}
		$id = Input::get('id');
		$quantity = Input::get('quantity');
		$product = Sanpham::find($id);
		if(Cart::contents()){
			foreach(Cart::contents() as $item){
				if($item->id == $id){
					$item->quantity = 0;
				}
			}
		}
		Cart::insert(array(
		    'id'       => $product->id,
		    'name'     => $product->tensp,
		    'price'    => $product->gia,
		    'hinh'	   => $product->hinh,
		    'quantity' => $quantity,
		));
		$carts = Cart::contents();

		$this->layout->nest('content', 'default.user.cart', array('carts' => $carts));
		return Redirect::route('default.user.cart');

	}		
	public function cart_destroy($id)
	{
		foreach (Cart::contents() as $item) {
			if($item->id == $id){
			    $item->remove();
			    break;
			}
		}
		return Redirect::route('default.user.cart');
	}
	public function cart_update()
	{
		$input = Input::all();
		foreach($input as $key=>$item){
			$validator = Validator::make(
			    array('quantity '.$key => $item['quantity']),
			    array('quantity '.$key => 'required|numeric|min:1')
		    );
			if($validator->fails()){
				$errors = $validator->messages();
				return Redirect::back()->withErrors($validator);
			}
		}
		foreach (Cart::contents() as $item) {
			foreach($input as $v){
				if($item->id == $v['id'])
			    $item->quantity = $v['quantity'];
			} 
		}
		return Redirect::route('default.user.cart');
	}		
	public function wishlist()
	{
		$flag = 0;
		if(Session::has('wishlist.list.0')){
			$products = Sanpham::whereIn('id', Session::get('wishlist.list'))->get();
			$flag = 1;
		}else{
			$products = array();
			$flag = 0;
		}
		$this->layout->title = "Achxi :: Wishlist Products";
		$this->layout->types = $this->types;
		$this->layout->nest('content', 'default.user.wishlist', array('products' => $products, 'flag' => $flag));
	}				
	public function wishlist_add($id)
	{
		if(Session::has('wishlist.list')){
			if(!in_array($id, Session::get('wishlist.list'))){
				Session::push('wishlist.list', $id);
			}
		}else{
			Session::push('wishlist.list', $id);
		}
		return Redirect::route('default.user.wishlist');
	}	
	public function wishlist_remove($id)
	{
		if(Session::has('wishlist.list')){
			foreach(Session::get('wishlist.list') as $key=>$item){
				if($item == $id){
					Session::forget("wishlist.list.$key");
					break;
				}
			}
		}
		return Redirect::route('default.user.wishlist');
	}	
	public function compare_add($id)
	{
		if(Session::has('compare.list')){
			if(!in_array($id, Session::get('compare.list'))){
				Session::push('compare.list', $id);
			}
		}else{
			Session::push('compare.list', $id);
		}
		// echo "<pre>";
		// dd(Session::get('compare.list'));
		return Redirect::route('default.user.compare');
	}		
	public function compare()
	{
		$flag = 0;
		if(Session::has('compare.list.0')){
			$products = Sanpham::whereIn('id', Session::get('compare.list'))->get();
			$flag = 1;
		}else{
			$products = array();
			$flag = 0;
		}
		$this->layout->title = "Achxi :: Compare Products";
		$this->layout->types = $this->types;
		$this->layout->nest('content', 'default.user.compare', array('products' => $products, 'flag' => $flag));
	}	
	public function compare_remove($id)
	{
		if(Session::has('compare.list')){
			foreach(Session::get('compare.list') as $key=>$item){
				if($item == $id){
					Session::forget("compare.list.$key");
					break;
				}
			}
		}
		return Redirect::route('default.user.compare');
	}			
}