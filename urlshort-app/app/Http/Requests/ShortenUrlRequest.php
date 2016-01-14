<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

/**
 * Request untuk controller ShortenUrlController
 *
 * @author Administrator
 */
class ShortenUrlRequest extends Request
{
    /**
     * Tentukan apakah user boleh akses
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
            'url' => 'required|url'
        ];
    }

}
