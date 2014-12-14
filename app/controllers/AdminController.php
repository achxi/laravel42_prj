<?php

class AdminController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public $layout = 'admin._layouts.master';
	
	public function __construct(){
		// parent::__construct();
		$this->types = Nhomsanpham::with('Loaisanpham')->get();
		// $this->bot_cats = Loaisanpham::with('Sanpham')->orderBy(DB::raw('RAND()'))->take(5)->get();
		// $this->rands = Sanpham::orderByRaw("RAND()")->take(6)->get();
	}
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
			$this->layout->types = $this->types;
			// $this->layout->bot_cats = $this->bot_cats;
			// $this->layout->rands = $this->rands;
			
			// echo "<pre>";
			// dd($this->layout->bot_cats);

			// dd($this->bot_cats{0}->id_loai);
			
			// foreach($this->bot_cats{0}->Sanpham as $item){
			// 	if($this->bot_cats{0}->id_loai == $item->id_loai ){
			// 		echo $item->tensp."<br/>";
			// 	}
			// }

			// dd($this->types);
			// dd(DB::getQueryLog());
		}
	}

}
