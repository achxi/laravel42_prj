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
	}
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
