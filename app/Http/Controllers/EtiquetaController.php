<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtiquetaController extends Controller {

	public function create(Request $request) {
		return $view = \View::make("etiquetas")->with($request->all());
		// $pdf         = \PDF::loadHTML($view);
		// return $pdf->download();
	}
}
