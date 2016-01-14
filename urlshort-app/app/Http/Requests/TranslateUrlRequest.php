<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
//use Input;
use Illuminate\Support\Facades\Input;

/**
 * Request untuk controller TranslateUrlController
 *
 * @author Administrator
 */
class TranslateUrlRequest extends Request
{
    /**
     * Kita butuh override all() karena isu
     * terkait validasi parameter route
     * Parameter route /{width}x{height} tidak akan tersedia dalam
     * Request secara otomatis sehingga harus diisi manual 
     * @return type
     */
    public function all()
    {
        $request = Input::all();
        $request['short_url'] = $this->route('short_url');
        return $request;
    }
	
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         return true;
    }
 
    /**
     * Ambil aturan validasi
     *
     * @return array
     */
    public function rules()
    {
        return [
            'short_url' => 'required|string|alpha_num|size:6'
        ];
    }
}
