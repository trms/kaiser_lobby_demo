<?php

class IndexController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('index');
	}


	public function ajax()
	{

		$q = Input::get('q');

		$listings = $q
			?	Department::search($q)->orderBy('name','ASC')->get()
			:	Department::orderBy('name', 'ASC')->get();

		return $listings;
	}

	


}
