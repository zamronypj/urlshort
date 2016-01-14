<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Redirect;
use App\Http\Requests\ShortenUrlRequest;

class ShortenUrlController extends Controller
{
    public function index(Request $request) {
	    $aview = view('shortenurl',[
		                'short_url'=>$request->session()->get('short_url'),
		                'actual_url'=>$request->session()->get('actual_url')]);
	    return $aview;
	}
	
    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
           $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }	
	
	private function addUrlToDb($actual_url) {
	    $url = new Url();
		$url->short_url = $this->generateRandomString(6);
		$url->url_hash = md5($actual_url);
		$url->actual_url = $actual_url;
		$url->save();
	    return $url;
	}
	
	public function addUrl(ShortenUrlRequest $request) {
	    $actual_url = $request->get('url');
	    $a_url = Url::where('url_hash',md5($actual_url))
		           ->select('short_url')
		           ->first();
		if (!$a_url) {
	        $a_url = $this->addUrlToDb($actual_url);	    
		}
		return Redirect::route('home')
		         ->with('short_url', $a_url->short_url)
		         ->with('actual_url', $actual_url);
	}
}
