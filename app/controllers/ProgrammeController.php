<?php

class ProgrammeController extends BaseController {

	public function show()
	{
	    $genres = Genre::all();
		
		return View::make('programme')->with('genres', $genres);
	}

}
