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
		$products = Sanpham::paginate(9);
		$this->layout->title = "Achxi :: Welcome Home";
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
		}       */ 
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
		$catgories = Sanpham::where('id_loai', '=', $id)->paginate(9);
		$this->layout->nest('content', 'default.user.type', array('catgories' => $catgories));
	}
	public function search()
	{
		$this->layout->title = "Achxi :: Product By Type";

		if(Request::ajax()){
			$results = Sanpham::all();
			foreach($results as $item){
				$employees[] = array("id" => $item->id, "value" => $item->tensp);
			}
			return Response::json($employees);
		}
		$str = Input::get('str');
		if(empty($str)){
			$results = array();
		}else{
			$results = Sanpham::where('tensp', 'LIKE', '%'.$str.'%' )->get();
		}
		$this->layout->nest('content', 'default.user.search', array('results' => $results));

	}	
	public function login()
	{
		$this->layout->title = "Achxi :: Login";
		$this->layout->nest('content', 'default.user.login');
	}	
	public function postLogin()
	{
		$data = array('username' => Input::get('username'),
						'password' => Input::get('password')
					);

		$validator = Validator::make($data, Thanhvien::$auth_rules);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

/*	    $credentials = [
	        'user' => 'testmanh',
	        'password' => '123456'
	    ];
	    dd(Auth::attempt($credentials));*/

		if(Auth::attempt(array('user' => Input::get('username'), 'password' => Input::get('password')))){
			return Redirect::intended('/')->with(Session::flash('flash_mess', 'Login successfully'));
		}
		return Redirect::route('default.user.login')->with(Session::flash('flash_mess', 'Wrong username or password'));

/*		$user = Thanhvien::create(array(
            'user' => 'testmanh',
            'pass' => Hash::make('123456')
        ));

		Auth::login($user);*/
	}		

	public function logout(){
		Auth::logout();
		return Redirect::route('default.user.index');
	}
	public function cart()
	{
		$this->layout->title = "Achxi :: Cart";
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
	public function contact()
	{
		$this->layout->title = "Achxi :: Contact Us";
		$this->layout->nest('content', 'default.user.contact');		
	}			
	public function checkout()
	{
		$this->layout->title = "Achxi :: Checkout";
		$products = array();
		$this->layout->nest('content', 'default.user.checkout', array('products' => $products));
	}		
	public function postcheckout()
	{
		$input = Input::all();
		//validate input
		//insert necessary info into database
		//intergrated paypal or stripped to checkout - maybe opencart or magento
		//after finish
		Cart::destroy();
		//redirect to thank you page with flash session info
		//redirect to home page
		$products = array();
		$this->layout->nest('content', 'default.user.checkout', array('products' => $products));
		return Redirect::route('default.user.index')->with(Session::flash('flash_mess', 'Thank you for using our shopping system. Our manager is going to contact you soon to confirm the process'));;
	}		
	public function register()
	{
		$this->layout->title = "Achxi :: Register Account";
		$products = array();
		$this->layout->nest('content', 'default.user.register', array('products' => $products));
	}	
	public function postregister()
	{
		$input = Input::all();
		$data = array('loginname' => Input::get('loginname'),
				'password' => Input::get('password'),
				'email' => Input::get('email')
			);

		$validator = Validator::make($data, Thanhvien::$auth_rules_reg);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user = Thanhvien::create(array(
			'user'  => Input::get('loginname'),
			'pass'  => Hash::make(Input::get('password')),
			'email' => Input::get('email')
        ));

		Auth::login($user);
		$products = array();
		$this->layout->nest('content', 'default.user.register', array('products' => $products));
		return Redirect::route('default.user.index')->with(Session::flash('flash_mess', 'You have been registered an account successfully'));;
	}	
	public function account()
	{
		$this->layout->title = "Achxi :: Account Setting";
		$user = Thanhvien::where('user', '=', Auth::user()->user)
           ->first();
		$products = array();
		$this->layout->nest('content', 'default.user.account', array('user' => $user));
	}	
	public function postaccount()
	{
		$data = array('loginname' => Input::get('loginname'),
				'password' => Input::get('password'),
				'email' => Input::get('email'),
				'phone' => Input::get('phone'),
			);

		$validator = Validator::make(
			$data, array('email' => 'required|email|unique:thanhvien,email,'.Auth::user()->user.',user',
			'password'           => 'required|min:5',
			'phone'              => 'numeric'
			)
		);
		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();
		}
		if(Auth::attempt(array('user' => Input::get('loginname'), 'password' => Input::get('password')))){
			$user = Thanhvien::find(Input::get('loginname'));
			$user->email = Input::get('email');
			$user->hoten = Input::get('fullname');
			$user->diachi = Input::get('address');
			$user->dienthoai = Input::get('phone');
			$user->save();
			return Redirect::route('default.user.index')->with(Session::flash('flash_mess', 'Updated successfully'));;
		}
		return Redirect::route('default.user.account')->with(Session::flash('flash_mess', 'Wrong username or password'));

		$products = array();
		$this->layout->nest('content', 'default.user.account', array('products' => $products));
	}
	public function page_404(){
		$this->title = "Achxi :: 404 not found";
		return View::make('default._layouts.page_404')->with('title', $this->title);
	}
	public function price_range()
	{
		$validator = Validator::make(
		    array('Min Value' => Input::get('minval'), 'Max Value' => Input::get('maxval')),
		    array('minval' => 'sometimes|numeric', 'maxval' => 'sometimes|numeric')
		);
		if($validator->fails()){
			$errors = $validator->messages();
			return Redirect::back()->withErrors($validator);
		}

		$minval = Input::get('minval');
		$maxval = Input::get('maxval');

		if(!$minval){
			$products = Sanpham::where('gia', '<=', $maxval)->get();
		}elseif(!$maxval){
			$products = Sanpham::where('gia', '>=', $minval)->get();
		}else{
			$products = Sanpham::where('gia', '>=', $minval)->where('gia', '<=', $maxval)->get();			
		}
		$this->layout->title = "Achxi :: Price Range";
	    $this->layout->nest('content', 'default.user.price_range', array('products' => $products));
	}

/*	public function search_ajax(){
		$this->layout->title = "seach ajax";
		$str = Input::get('str');
		// $results = Sanpham::where('tensp', 'LIKE', '%'.$str.'%' )->get();
		$results = Sanpham::all();

		foreach($results as $item){
			$employees[] = array("id" => $item->id, "value" => $item->tensp);
		}
		// echo "<pre>";
		// dd($data);
		// $employees = array($data);
		// dd($employees);

		$in = array(
		    "suggestions" => array(
		        array("value" => "one", "data" => "ON"),
		        array("value" => "two", "data" => "TW"),
		        array("value" => "three", "data" => "TH"),
		        array("value" => "four", "data" => "FO"),
		    )
	    );

            $employees = array(
                 array("value" => "Tom", "id" => "1") ,
                 array("value" => "Stefan", "id" => "2") ,
                 array("value" => "Martin", "id" => "3") ,
                 array("value" => "Sara", "id" => "4") ,
                 array("value" => "Valarie", "id" => "5") ,
            );
		return Response::json($employees);
		// $this->layout->nest('content', 'default.user.search', array('results' => $results));
	}	*/
}