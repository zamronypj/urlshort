<?php namespace App\Http\Controllers;

use App\Models\Url;
use App\Http\Requests\TranslateUrlRequest;

class TranslateUrlController extends Controller
{
    public function index(TranslateUrlRequest $request, $short_url) {
	    $url = Url::select('actual_url')
		         ->findOrFail($short_url);
		//sampai disini url sudah pasti ada
		return redirect($url->actual_url);
	}	
}
