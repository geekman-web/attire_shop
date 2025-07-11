<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageUpload;

class UploadController extends Controller
{
    	public function store (Request $request) {
		//$imagePath = $request->file('image')->store('uploaded', 'public');
		$designPath = $request->file('design')->store('uploaded', 'public');

		$upload = new ImageUpload;
		//$upload->image = $imagePath;
		$upload->design = $request->design->storeAs('uploaded', $request->file('design')->getClientOriginalName(), 'public');
		$upload->sku = $request->sku;
		$upload->status = 'temporary';
		$upload->session_id = $request->sess;
		$upload->save();

		return back()->with("ok");
	}
}
