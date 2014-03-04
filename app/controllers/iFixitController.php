<?php
	class iFixitController extends BaseController {
		
		public function search() {
    	return View::make('iFixitSearch');
  	}

  	public function result() {
  		$ifixit = new \Itp\Api\iFixitSearch();
  		$json = $ifixit->getResults(Input::get('device'));
    	return Response::json($json);
  	}
	}
?>