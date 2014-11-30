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
		$this->layout->title = "Achxi :: Welcome home";
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
		$this->layout->title = "Achxi :: Product details";
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

}