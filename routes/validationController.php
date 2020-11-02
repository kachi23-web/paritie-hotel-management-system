<?php
	  class ValidationController extends Controller {
		public function form() {
			return view('login');
		}
		public function validateform(Request $request) {
			print_r($request->all());
			$this->validate($request,[
				'username'=>'required|max:8',
				'password'=>'required'
			  ]);
		    }
		}
	