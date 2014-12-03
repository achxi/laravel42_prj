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
		$this->layout->nest('content', 'default.user.show', array('detail' => $detail));
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
}