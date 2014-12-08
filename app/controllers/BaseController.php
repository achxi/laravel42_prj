<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public $layout = 'default._layouts.master';
	
	public function __construct(){
		// parent::__construct();
		$this->types = Nhomsanpham::with('Loaisanpham')->get();
		$this->bot_cats = Loaisanpham::with('Sanpham')->orderBy(DB::raw('RAND()'))->take(5)->get();
		$this->rands = Sanpham::orderByRaw("RAND()")->take(6)->get();
	}
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
			$this->layout->types = $this->types;
			$this->layout->bot_cats = $this->bot_cats;
			$this->layout->rands = $this->rands;
			// echo "<pre>";
			// dd($this->layout->bot_cats);
			// dd($this->layout->types);
			// dd(DB::getQueryLog());
		}
	}

}
